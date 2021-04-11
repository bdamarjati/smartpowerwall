<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BmsData;

class BmsController extends Controller
{
    //
    public function getAllData(){
        // get all data
        $data = BmsData::latest()->get();
        return response($data, 200);
        //return view('bootstrap_temp', compact('data'));
    }

    public function tempView(){
        $data = BmsData::latest()->get();
        return view('bms-dev', compact('data'));
    }
    
    public function addData(Request $request){
        // post data
        $data = new BmsData;
        $data->vc1 = $request->vc1;
        $data->vc2 = $request->vc2;
        $data->vc3 = $request->vc3;
        $data->vc4 = $request->vc4;
        $data->vc5 = $request->vc5;
        $data->vc6 = $request->vc6;
        $data->vc7 = $request->vc7;
        $data->vc8 = $request->vc8;
        $data->vc9 = $request->vc9;
        $data->vc10 = $request->vc10;
        $data->vc11 = $request->vc11;
        $data->vc12 = $request->vc12;
        $data->vc13 = $request->vc13;
        $data->vc14 = $request->vc14;
        $data->vc15 = $request->vc15;
        $data->amps = $request->amps;
        $data->temp = $request->temp;
        $data->svc = $data->vc1 + $data->vc2 + $data->vc3 + $data->vc4 + $data->vc5 +
                     $data->vc6 + $data->vc7 + $data->vc8 + $data->vc9 + $data->vc10 +
                     $data->vc11 + $data->vc12 + $data->vc13 + $data->vc14 + $data->vc15;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
    }

    public function deleteData($id){
        // delete data at id = $id
        if(BmsData::where('id', $id)->exists()) {
            $data = BmsData::find($id);
            $data->delete();
    
            return response()->json([
              "message" => "Data's records deleted"
            ], 202);
          } 
        else {
            return response()->json([
              "message" => "Data not found"
            ], 404);
        }
    }
}
