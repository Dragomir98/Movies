<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    //
    protected $table = 'movies';
    public $primaryKey = 'id';
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}

Movies::all();


