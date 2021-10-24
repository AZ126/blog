<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutator extends Model
{
    use HasFactory;
    function setNameAttribute($value){
            return $this->attributes['name']="My Name is: ".$value;
    }
}
