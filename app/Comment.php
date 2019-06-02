<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['assigned_to', 'comments', 'complain_id', 'user_id', 'deadline', 'status'];

    public function complain()
    {
        return $this->belongsTo('App\Complain', 'complain_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Admin', 'user_id');
    }
}
