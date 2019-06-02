<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = ['subject', 'details', 'name', 'phone', 'email','image', 'status'];
}
