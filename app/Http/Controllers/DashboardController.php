<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Data;

class DashboardController extends Controller {
    public function index(){
        $data = Data::groupBy('created_at')
        ->selectRaw('UNIX_TIMESTAMP(created_at)*1000 time, sum(capacity) capacity')
        ->orderBy('time')
        ->get();

        $e = array();
        foreach($data as $b){
            $a = $b['time'];
            $d = (double)number_format(($b['capacity']),2);
            $e[] = collect($a)->merge($d);
        }
        return $e;
    }
}
