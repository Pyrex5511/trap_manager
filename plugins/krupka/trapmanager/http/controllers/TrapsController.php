<?php

namespace Krupka\TrapManager\Http\Controllers;

use Krupka\TrapManager\Http\Resources\TrapResource;
use Krupka\TrapManager\Controllers\Traps;
use Krupka\Trapmanager\Models\TrapEntry;
use Krupka\TrapManager\Models\Trap;
use Illuminate\Routing\Controller;

class TrapsController extends Controller
{
    public function index()
    {
        $traps = Trap::all();
        return TrapResource::collection($traps);
    }

    public function filterTraps($id)
    {
        $traps = Trap::findOrFail($id);
        return TrapResource::collection($traps);
    }


    public function show($id, $date)
    {
        $trap = Trap::findOrFail($id);

        $trapEntry = TrapEntry::where('date', $date)->where('trap_id', $id)->firstOrFail();
        return TrapResource::make($trapEntry);
    }

    public function edit($id, $date)
    {
        $trap = Trap::findOrFail($id);

        $trapEntry = TrapEntry::where('date', $date)->where('trap_id', $id)->firstOrFail();
        $trapEntry->percentage = post('percentage');
        $trapEntry->count = post('count');
        $trapEntry->name =  post('name');
        $trapEntry->save();

        return TrapResource::make($trapEntry);
    }
}
