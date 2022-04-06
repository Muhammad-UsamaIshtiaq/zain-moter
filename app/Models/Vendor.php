<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id', 'first_name', 'last_name', 'phone_no', 'id_card', 'current_address', 'permanent_address'
    ];
}
