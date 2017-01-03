<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "video";

    public function Course()
    {
        return $this->belongsTo('App\Course');
    }
}
