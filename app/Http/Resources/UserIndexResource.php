<?php

namespace App\Http\Resources;

use Larawos\Illuminate\Http\Resources\Json\ResourceCollection;

class UserIndexResource extends ResourceCollection
{
    /**
     * The resource template.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return array
     */
    protected function template($model)
    {
        return $model->toArray();
    }

    /**
     * The resource message.
     *
     * @return array
     */
    protected function message()
    {
        return [
            //
        ];
    }
}
