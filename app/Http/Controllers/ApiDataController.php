<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiData;

class ApiDataController extends Controller
{
    public function getAllData(){
        // get all data
        $data = ApiData::get()->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }
    public function addData(Request $request){
        // post data
        $data = new ApiData;
        $data->power = $request->power;
        $data->voltage = $request->voltage;
        $data->current = $request->current;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
    }
    public function getData($id){
        // get data at id = $id
        if (ApiData::where('id', $id)->exists()) {
            $data = ApiData::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($data, 200);
        } else {
            return response()->json([
                "message" => "Data not found"
            ], 404);
        }
    }
    public function updateData(Request $request, $id){
        // put data at id = $id
        if (ApiData::where('id', $id)->exists()) {
            $data = ApiData::find($id);
            $data->power = is_null($request->power) ? $data->power : $request->power;
            $data->voltage = is_null($request->voltage) ? $data->voltage : $request->voltage;
            $data->current = is_null($request->current) ? $data->current : $request->current;
            $data->save();
    
            return response()->json([
                "message" => "Data's records updated successfully"
            ], 200);
        }
        else {
            return response()->json([
                "message" => "Data not found"
            ], 404);
        }
    }
    public function deleteData($id){
        // delete data at id = $id
        if(ApiData::where('id', $id)->exists()) {
            $data = ApiData::find($id);
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