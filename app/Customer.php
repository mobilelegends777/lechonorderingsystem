<?php

namespace App;

use illumintae\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table='customer_info';

    protected $fillable = [
        'customer_id','firstname', 'lastname'
    ];
}

