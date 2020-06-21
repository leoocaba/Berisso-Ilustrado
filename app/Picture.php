<?php

namespace App;
use App\Publication;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    public $timestamps = true;
    protected $guarded = [];


    public function publication() {
        return $this->belongsTo('App\Publication');
    }

    public function users() {
        return $this->belongsTo('App\User');
    }
}
