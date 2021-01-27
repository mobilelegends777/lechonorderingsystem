<?php

namespace App;

use illumintae\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='customer_address';

    protected $fillable = [
        'customer_id','purok_zone',
    ];
}
