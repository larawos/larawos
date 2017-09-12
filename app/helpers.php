<?php

if (! function_exists('api')) {
    /**
     * 返回json格式的api数据
     */
    function api($data = [], $status = 200, $message = '请求成功')
    {
        return response()->json(
                empty($data) ? compact('status', 'message', 'data') :
                array_merge(compact('status', 'message'), $data)
            );
    }
}

