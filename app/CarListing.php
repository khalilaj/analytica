<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarListing extends Model
{
    protected $fillable = ['name', 'car_model', 'car_manufacturer', 'description', 'price', 'user_visits', 'whatsapp_calls', 'phone_calls', 'created_at'];
}
