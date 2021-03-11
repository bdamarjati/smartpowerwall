<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'control';
    protected $fillable = ['id_kwh','state'];
    public $timestamps = false;
    public $incrementing = false;
}