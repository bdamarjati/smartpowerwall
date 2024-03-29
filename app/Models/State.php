<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'control';
    protected $fillable = ['kwh1','kwh2','kwh3'];
    public $timestamps = false;
    public $incrementing = false;
}