<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StateC;

class StateCController extends Controller
{
    public function control(){
        $data = StateC::select('id_kwh', 'description', 'state')->get();
        // $count = count($data);
        // return ['data' => $data, 'count' => $count];
        return view('controlb',['data' => $data]);
    }

    public function postValue(Request $request){
      $id_kwh = $request->id_kwh;
      $value = $request->value;
      $data = StateC::where('id_kwh',$id_kwh)->update(array('state' => $value));

      return response()->json([
        "message" => "Data's records updated successfully"
      ], 200);
    }

    public function addLoad(Request $request){
      $data_last = StateC::select('id_kwh')->orderBy('id_kwh', 'desc')->first();
      $id_kwh = $data_last['id_kwh'] + 1;
      $data = new StateC;
      $data->id_kwh = $id_kwh;
      $data->description = $request->description;
      $data->state = 0;
      $data->save();

      return redirect()->back();;
    }

    public function getStatus(){
      $data = StateC::select('id_kwh', 'description', 'state')->get();
      $data_last = StateC::select('id_kwh')->orderBy('id_kwh', 'desc')->first();
      $id_new = $data_last['id_kwh'] + 1;

      return ['data' => $data, 'id_new' => $id_new];
    }

}
?>