<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $guarded = [];

    public function space() {
        return $this->belongsTo(Space::class);
    }

    public function hardware() {
        return $this->hasMany(Hardware::class);
    }
}
