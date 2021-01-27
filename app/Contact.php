<?php

namespace App;

use illumintae\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table='contact_info';

    protected $fillable = [
        'customer_id','phone'
    ];
}
