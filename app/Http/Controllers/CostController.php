<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\ApiData;
use App\Models\Settings;

class CostController extends Controller
{
    //
    public function costGraphData($kwh){
        //
        $cost = Settings::select('cost')->get();
        // return $cost[0]['cost'];
        //
        $mm = strtotime(date("F"));
        $scost = 0;
        // $mm = strtotime("April");
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
                $cst = 0;
                $datas->push($cst);
            }
            else{
                $pwr = $data->pluck('power')->sum();
                $pwr = $pwr/1000;
                $cst = round($pwr,2)*$cost[0]['cost'];
                $datas->push($cst);
                $scost = $scost + $cst;
            }
        }

        return ['datas' => $datas, 'cday' => $day, 'sum' => $scost];
    }
}
