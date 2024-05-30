<?php

namespace Krupka\TrapManager\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Carbon;

class TrapResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => $this->type
        ];
    }
}
