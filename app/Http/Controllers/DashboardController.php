<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Data;
use App\Models\State;

class DashboardController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
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

    public function viewDashboard()
    {
        return view('dashboard');
    }

    public function viewUsages()
    {
        return view('usages');
    }

    public function viewControl()
    {
        return view('control');
    }

    public function viewBms()
    {
        return view('bms');
    }

    public function viewControlb()
    {
        return view('controlb');
    }

    public function viewCost()
    {
        return view('cost');
    }

}