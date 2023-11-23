<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
  
    protected $fillable = [

        'firstname',
        'lastname',
        'email' ,
        'phone_number',
        'reservation_date',
        'table_id',
        'guest_number'
    ];
    use Notifiable;
    protected $dates = [

        'res_date',
    ];
    
    public function table(){

        return $this->belongsTo(Table::class);
        
    }
}