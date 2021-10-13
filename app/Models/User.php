<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    // following line is for, if we want to insert into some other table from some other model,
    //  means model and table are not of the same name or those are not maped each other.!
    public $table = "migrations";
}
