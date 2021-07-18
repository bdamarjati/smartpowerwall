<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use App\Models\ApiData;

class ApiDataController extends Controller
{
    public function getAllData(){
        // get all data
        $data = ApiData::latest()->get();//->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }
    
    public function addData(Request $request){
        // post data
        $data = new ApiData;
        $data->kwh = $request->kwh;
        $data->power = $request->power;
        $data->voltage = $request->voltage;
        $data->current = $request->current;
        $data->save();
    
        return response()->json([
            "message" => "data record added"
        ], 201);
    }

    public function graphData(Request $request, $kwh){
        $data = ApiData::where('kwh',$kwh)->latest()->get()->chunk(7);
        $chunk = $data[0];
        $pwr = $chunk->pluck('power');
        $crnt = $chunk->pluck('current');
        $vlt = $chunk->pluck('voltage');
        return ['power'=>$pwr, 'current'=>$crnt, 'voltage'=>$vlt];
        //return $chunk;
    }

    public function statData($kwh){
        //
        // $mm = strtotime(date("F"));
        $sum = 0;
        $mm = strtotime("April");
        $month = (int)date("m", $mm);
        if($month != (int)date("m")){
            $day = cal_days_in_month(CAL_GREGORIAN, $month, (int)date("Y"));
        }
        else{
            $day = (int)date("d");
        }
        $datas = new Collection();
        for($i=1; $i<=$day; $i++){
            $data = ApiData::where('kwh',$kwh)
            ->whereMonth('created_at', $month)
            ->whereDay('created_at', $i)
            ->get();
            if($data->isEmpty()||!$data){
                $pwr = 0;
                $datas->push($pwr);
            }
            else{
                $pwr = $data->pluck('power')->sum();
                $pwr = $pwr/1000;
                $pwr = round($pwr,2);
                $datas->push($pwr);
                $sum = $sum + $pwr;
            }
        }

        return ['datas' => $datas, 'cday' => $day, 'sum' => $sum];//response()->json($datas);
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
