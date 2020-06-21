<?php

namespace App;
use App\Picture;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    public $timestamps = true;
    protected $guarded = [];

    public function pictures() {
        return $this->hasMany('App\Picture', 'publication_id');
    }

    public function users() {
        return $this->belongsTo('App\User');
    }
}
