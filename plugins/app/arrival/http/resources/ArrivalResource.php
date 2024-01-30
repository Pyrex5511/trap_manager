<?php namespace App\Arrival\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Carbon;
class ArrivalResource extends Resource
{
    public function toArray($request)
    {
        //dd(Carbon::make($this->time)->subMonth()->format('d.m.Y H:i'));
        return [
            'id' => $this->id,
            'name' => $this->name,
            
        ];
    }
}