<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InverterData extends Model
{
    use HasFactory;
    protected $table = 'inverter_data';
    protected $fillable = ['mode','freq','voltage','current'];
}
