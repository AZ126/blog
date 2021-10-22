<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessor extends Model
{
    use HasFactory;

    function getEmailAttribute($value){
        return ucfirst($value);
    }
    
    function getAddressAttribute($value){
        return "My Address is ". $value;
    }
}
