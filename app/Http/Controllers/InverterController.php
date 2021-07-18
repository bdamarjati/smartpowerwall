<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Models\InverterData;

class InverterController extends Controller
{
    public function getAllData(){
        // get all data for testing api
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

    public function getModeData($mode){
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

    public function getData(){
        // get last data for realtime display
        $data = InverterData::latest()->get();
        return response($data[0], 200);
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

    public function graphDataInverter(){
        $datas = InverterData::latest()->get()->chunk(12);
        $data = $datas[0]->pluck('voltage');
        $time = $datas[0]->pluck('created_at');
        $days = new Collection;
        for($i=0;$i<12;$i++){
            $day = Carbon::parse($time[0])->format('M/d/Y');
            $days->push($day);
        }
        return response()->json(['data'=>$data, 'time'=>$days]);
    }
    public function graphDataInverterB(){
        $datas = InverterData::latest()->get()->chunk(12);
        $data = $datas[0]->pluck('current');
        $time = $datas[0]->pluck('created_at');
        $days = new Collection;
        for($i=0;$i<12;$i++){
            $day = Carbon::parse($time[0])->format('M/d/Y');
            $days->push($day);
        }
        return response()->json(['data'=>$data, 'time'=>$days]);
    }
    public function graphDataInverterC(){
        $datas = InverterData::latest()->get()->chunk(12);
        $data = $datas[0]->pluck('freq');
        $time = $datas[0]->pluck('created_at');
        $days = new Collection;
        for($i=0;$i<12;$i++){
            $day = Carbon::parse($time[0])->format('M/d/Y');
            $days->push($day);
        }
        return response()->json(['data'=>$data, 'time'=>$days]);
    }
    public function tableData(){
        $data = InverterData::latest()->get();//->toJson(JSON_PRETTY_PRINT);
        return response()->json(['data'=>$data]);
    }
}
