<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Table;
use App\Enums\TableStatus;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\ReservationNotification;

class ReservController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $reservation = $request->session()->get('reservation');
        
        $tables = Table::where('status',TableStatus::Avalaiable)->get();
        
        $mindate = Carbon::today()->format('Y-m-d\TH:i:s');
        
        $maxdate = Carbon::now()->addWeek()->format('Y-m-d\TH:i:s');
        
        
        return view('user.reservtable',compact('reservation','mindate','maxdate','tables'));
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
    public function store(Request $request)
    {
        $validate = $request->validate([

            'firstname'         =>      ['required'],
            'lastname'          =>      ['required'],
            'email'             =>      ['required','email'],
            'phone_number'      =>      ['required'],
            'table_id'      =>      ['required'],    
            'reservation_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'guest_number'      =>      ['required']

            
        ]);

       
                $storereserv = Reservation::create([
                    
                    'firstname'         =>      $validate['firstname'],
                    'lastname'          =>      $validate['lastname'],
                    'email'             =>      $validate['email'],
                    'phone_number'      =>      $validate['phone_number'],  
                    'table_id'          =>      $validate['table_id'],    
                    'reservation_date' =>       $validate['reservation_date'],
                    'guest_number'      =>      $validate['guest_number']

                ]);


              
                Alert::success('Done','your Reservation Submited Successfully'); 
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
        //
    }
}