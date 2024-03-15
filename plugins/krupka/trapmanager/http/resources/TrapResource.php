<?php namespace Krupka\TrapManager\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Carbon;
class TrapResource extends Resource
{
    public function toArray($request)
    {
        //dd(Carbon::make($this->time)->subMonth()->format('d.m.Y H:i'));
        return [
            'id' => $this->id,
            'type' => $this->type,
            'percentage'=> $this->percentage,
            'count'=> $this->count,
            'name'=> $this->name
        ];
    }
}