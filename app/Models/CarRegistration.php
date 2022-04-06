<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_date', 'advance_date', 'serial_no', 'registration_no', 'model', 'chases_no', 
        'engine_no', 'quota', 'mark', 'color', 'power', 'number_plate', 'file', 'copy', 'total_documents', 'token', 'partenership','vendor'
        ,'model_year', 'purchased_price','document'
    ];

}
