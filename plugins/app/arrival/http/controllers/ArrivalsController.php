<?php namespace App\Arrival\Http\Controllers;

use App\Arrival\Controllers\Arrivals;
use App\Arrival\Http\Resources\ArrivalResource;
use App\Arrival\Models\Arrival;
use Illuminate\Routing\Controller;

class ArrivalsController extends Controller
{
    public function index()
    {
        $arrivals = Arrival::all();
        return ArrivalResource::collection($arrivals);
        
    }

    public function show($id)
    {
        $arrival = Arrival::findOrFail($id);
        return ArrivalResource::make($arrival);
    }
    public function save()
    {
        $user = auth()->user();
        $arrival = new Arrival();

        $arrival->name = post('name');
        $arrival->user_id = $user->id;
        $arrival->created_at = post('created_at');
        $arrival->save();

        return ArrivalResource::make($arrival);
    }
    
}