<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\StateC;

class StateController extends Controller {
    
    public function control(){
        $data = State::select('id','kwh1','kwh2','kwh3')->get();
        $datac = StateC::select('id_kwh', 'description', 'state')->get();
        //dd($data);
        return view('controlb',['data' => $data, 'datac' => $datac]);
    }

    public function postValue(Request $request){
      $id = $request->id;
      $kwh1 = $request->kwh1;
      $kwh2 = $request->kwh2;
      $kwh3 = $request->kwh3;
      $data = State::where('id',$id)->update(array(
          'kwh1' => $kwh1,
          'kwh2' => $kwh2,
          'kwh3' => $kwh3,
        ));

      return response()->json([
        "message" => "Data's records updated successfully"
    ], 200);
    }

    public function getStatus(){
      $data = State::select('id','kwh1','kwh2','kwh3')->get();
      $datac = StateC::select('id_kwh', 'description', 'state')->get();
      // return ['data' => $data, 'datac' => $datac];
      return view('control',['data' => $data, 'datac' => $datac]);
    }
}
?>