<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InverterData;

class InverterController extends Controller
{
    public function getAllData(){
        // get all data
        $data = InverterData::latest()->get();//->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }
    
    public function addData(Request $request){
        // post data
        $data = new InverterData;
        $data->mode = $request->mode;
        $data->freq = $request->freq;
        $data->voltage = $request->voltage;
        $data->current = $request->current;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
    }

    public function getData($mode){
        // get data at id = $id
        if (InverterData::where('mode', $mode)->exists()) {
            $data = InverterData::where('mode', $mode)->get();//->toJson(JSON_PRETTY_PRINT);
            return response($data, 200);
        } else {
            return response()->json([
                "message" => "Data not found"
            ], 404);
        }
    }

    public function deleteData($id){
        // delete data at id = $id
        if(InverterData::where('id', $id)->exists()) {
            $data = InverterData::find($id);
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
