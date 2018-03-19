<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    //
    protected $guarded = [];

    public function rooms() {
        return $this->belongsTo(Room::class);
    }
}
