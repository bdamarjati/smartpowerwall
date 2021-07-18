<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\StateC;

class SettingsController extends Controller
{
    //
    public function index(){
        $bill = Settings::select('cost')->get();
        $data_last = StateC::select('id_kwh')->orderBy('id_kwh', 'desc')->first();
        $id_new = $data_last['id_kwh'] + 1;
        return view('settings')->with([
            'bill' => $bill,
            'data' => $id_new,
        ]);
    }

    public function store(Request $request){
        //
        $bill = Settings::find(1);
        $bill->cost = $request->get('cost');
        $bill->save();

        return redirect()->back();
    }

}
