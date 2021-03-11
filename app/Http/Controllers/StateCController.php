<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StateC;

class StateCController extends Controller
{
    public function control()
    {
        $data = StateC::select('id','status')->get();
        return view('pages.control',['data' => $data]);
    }

    public function postValue(Request $request){
      $id = $request->id;
      $value = $request->value;
      $data = StateC::where('id',$id)->update(array('status' => $value));

      return response()->json([
        "message" => "Data's records updated successfully"
    ], 200);
    }

    public function getStatus(){
      $data = StateC::select('id','status')->get();

      return $data;
    }

}
?>