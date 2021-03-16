<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Carbon\Carbon;

class DataController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	// public function store(Request $request){
	// 	$rand_cap = rand(13000,20000);
	// 	$rand_in = rand(13000,20000);
	// 	$rand_use = rand(13000,20000);

	// 	$data = new Data();
	// 	$data->capacity = $rand_cap;
	// 	$data->power_in = $rand_in;
	// 	$data->power_used = $rand_use;

	// 	$data->save();
	// }

	public function view()
    {
        return view('dashboard');
    }
}