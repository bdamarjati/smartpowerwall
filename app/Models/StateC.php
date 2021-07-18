<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateC extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'control_load';
    protected $fillable = ['id_kwh', 'description', 'state'];
    public $timestamps = false;
    public $incrementing = false;
}