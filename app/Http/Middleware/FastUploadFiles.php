<?php

namespace App\Http\Middleware;

use Closure;
use Larawos\Illuminate\Foundation\Models\File;

class FastUploadFiles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->has('file__files_md5') &&
            is_array($md5s = $request->input('file__files_md5'))) {
            $files = File::whereIn('md5', $md5s)->get(['id', 'md5']);
            $location = $request->url();

            return api(
                    compact('files', 'location')
                , 302, '获取资源成功，请按要求进行重定向');
        }

        return $next($request);
    }
}
