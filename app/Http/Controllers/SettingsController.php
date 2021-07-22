<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\StateC;
use App\Models\User;

class SettingsController extends Controller
{
    //
    public function index(){
        $bill = Settings::select('cost')->get();
        $data_last = StateC::select('id_kwh')->orderBy('id_kwh', 'desc')->first();
        $id_new = $data_last['id_kwh'] + 1;
        $load = StateC::select('description')->get();
        $user = User::select('id','name','email')->get();
        // return ['load' => $load];
        return view('settings')->with([
            'bill' => $bill,
            'data' => $id_new,
            'user' => $user,
            'load' => $load
        ]);
    }

    public function store(Request $request){
        //
        $bill = Settings::find(1);
        $bill->cost = $request->get('cost');
        $bill->save();

        return redirect()->back();
    }

    public function deleteLoad(Request $request){
        //
        $load = $request->get('selectLoad');
        $data = StateC::where('description',$load);
        // return $data;
        $data->delete();
        return redirect()->back();
    }

}
