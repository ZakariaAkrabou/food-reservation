<?php

namespace App\Http\Controllers\Admin;

use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use RealRashid\SweetAlert\Facades\Alert;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $reserv = Reservation::all();
        $tableres = Table::where('status',TableStatus::Avalaiable)->get();
        return view('admin.reservation',compact('reserv','tableres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request){
            $table = Table::findOrFail($request->table_id);
                
            
            // if($request->guest_number > $table->guest_number){

            //     return back()->with('warning','Please base on guest to choose the table');
            // }

            // $requestdate = Carbon::parse($request->reservation_date);
            // foreach($table->reservations as $res){

            //     if($res->reservation_date->format('Y-m-d') == $requestdate->format('Y-m-d')){
                    
            //         return back()->with('Sorry','You cant make reservation at this time');
            //     }
            // }
            
            Reservation::create($request->validated());
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $submitreserv = Reservation::find($id);

        $submitreserv->delete();

        return redirect()->back();
    }
}