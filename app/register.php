<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable =['fname','lname','email','pwd','rpwd'];
}
