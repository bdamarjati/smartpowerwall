<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function getAllData(){
        // get all data
        $data = State::get()->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }
    public function addData(Request $request){
        // post data
        $data = new State;
        $data->id = $request->id;
        $data->switch = $request->switch;
        $data->state = $request->state;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
    }
    /*
    public function getData($id){
        // get data at id = $id
        if (State::where('id', $id)->exists()) {
            $data = State::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($data, 200);
        } else {
            return response()->json([
                "message" => "Data not found"
            ], 404);
        }
    }
    */
    public function updateData(Request $request, $id){
        // put data at id = $id
        if (State::where('id', $id)->exists()) {
            $data = State::find($id);
            $data->state = is_null($request->state) ? $data->state : $request->state;
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
    /*
    public function deleteData($id){
        // delete data at id = $id
        if(State::where('id', $id)->exists()) {
            $data = State::find($id);
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
    */
}
