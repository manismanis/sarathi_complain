<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompletedComplain extends Model
{
    protected $fillable = [ 'comments', 'complain_id','user_id'];

    public function complain(){
        return $this->belongsTo('App\Complain','complain_id');
    }

    public function user(){
        return $this->belongsTo('App\Admin','user_id');
    }
}
