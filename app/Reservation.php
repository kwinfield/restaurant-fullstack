<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    protected $fillable = [
        'fname', 'lname', 'email', 'phone_number', 'guest_total', 'time',
    ];
}
