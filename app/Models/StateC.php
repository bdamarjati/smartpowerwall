<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateC extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'controlc';
    protected $fillable = ['id_kwh','status'];
    public $timestamps = false;
    public $incrementing = false;
}