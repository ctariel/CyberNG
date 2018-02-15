<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    //
    protected $guarded = [];

    public function city() {
        return $this->belongsTo(City::class);
    }
}
