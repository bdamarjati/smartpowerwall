<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BmsData extends Model
{
    use HasFactory;

    public $table = 'bms_data';
    public $fillable = ['vc1','vc2','vc3','vc4','vc5',
                        'vc6','vc7','vc8','vc9','vc10',
                        'vc11','vc12','vc13','vc14','vc15',
                        'amps','temp','svc'];
}
