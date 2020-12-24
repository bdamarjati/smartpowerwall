<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'data';

    public function scopeGetPower(){
        return $query->select('data.power_in','data.power_out')
		->get();
    }
}