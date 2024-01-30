<?php namespace Krupka\TrapManager\Http\Controllers;

use Krupka\TrapManager\Http\Resources\TrapResource;
use Krupka\TrapManager\Controllers\Traps;
use Krupka\TrapManager\Models\Trap;
use Illuminate\Routing\Controller;

class TrapsController extends Controller
{
    public function index()
    {
        $traps = Trap::all();
        return TrapResource::collection($traps);
        
    }

    public function show($id)
    {
        $trap = Trap::findOrFail($id);
        return TrapResource::make($trap);
    }
    public function save()
    {
        $trap = new Trap();

        $trap->type = post('type');
        $trap->percentage = post('percentage');
        $trap->count = post('count');
        $trap->save();

        return TrapResource::make($trap);
    }
}