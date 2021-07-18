@extends('layout.mainlayout')

@section('title','Control')

@section('content')

<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="css/switch.css">
    <link rel="stylesheet" href="css/switch2.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
        <div class="layout-top-spacing">
            <h3 class="font-weight-bold align-left">MAIN PANEL CONTROL</h3>
        </div>
            <div class="row layout-top-spacing">

                <div class="column1 left col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-four">
                        <h4 class="font-weight-bold align-left"><b>S O U R C E</b>
                            <h4 class="align-right">
                                <div class="toggleWrapper">
                                    <input type="checkbox" class="dn" id="dn" value="{{ $data[0]['kwh3'] }}" onClick="mySwitch()"/>
                                    <label for="dn" class="toggle">
                                        <span class="toggle__handler"></span>
                                    </label>
                                </div>
                            </h4>
                        </h4>
                    </div>
                </div>

                <!-- <div class="column1 right">
                    <div class="widget widget-chart-four">
                        <h4 class="align-center"><b>Battery</b></h4>
                        <div class="widget-content">
                            <div id="chart" class=""></div>
                        </div>
                    </div>
                </div> -->

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-four">
                        <div class="widget-heading">
                            <h4 class="font-weight-bold align-left"><b>Load</b>
                            </h4>
                            <br>
                            <hr style="height:2px;color:grey;background-color:grey">
                        </div>
                        <div class="widget-content">
                            <h5 class="table-1 align-left">Main Load
                                <h5 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox" id="loadA" value="{{ $data[0]['kwh1'] }}" onClick="mySwitch()">
                                        <i></i>
                                    </label>
                                </h5>
                            </h5>
                            <br>
                            @foreach ($datac as $d)
                            <h5 class="table-1 align-left">{{$d['description']}}
                                <h5 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox" id="skwh3" value="{{$d['state']}}" onClick="getSwitch()">
                                        <i></i>
                                    </label>
                                </h5>
                            </h5>
                            </br>
                            @endforeach
                            <!-- <h5 class="table-1 align-left">Load 1
                                <h5 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>
                                </h5>
                            </h5>
                            <br>
                            <h5 class="table-1 align-left">Load 2
                                <h5 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>
                                </h5>
                            </h5> -->
                        </div>
                    </div>
                    <div>
                        <h3 id="debug" hidden>DEBUG</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

<style>
</style>

</html>
<!--  END CONTENT AREA  -->
@endsection

@section('CustomScripts')
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
$(document).ready(function() {
    App.init();
});
document.getElementById('menuDashboard').className = 'menu active';

source = document.getElementById('dn').getAttribute("value");
loadA = document.getElementById('loadA').getAttribute("value");
if(source == true){
    document.getElementById('dn').checked = true;
} else if (source == false) {
    document.getElementById('dn').checked = false;
}
if(loadA == true){
    document.getElementById('loadA').checked = true;
} else if (loadA == false) {
    document.getElementById('loadA').checked = false;
}
// document.getElementById('debug').innerHTML = "load : " + loadA;

function mySwitch(){
    var x = document.getElementById('dn').checked;
    var load = document.getElementById('loadA').checked;
    if (x == true){
        y = 0;
        z = 1;
    } else if (x == false){
        y = 1;
        z = 0;
    }
    if (load == true){
        x = 1;
    } else if (load == false){
        x = 0;
    }
    // document.getElementById('debug').innerHTML = "Switch : " + x;
    $.ajax({
        url:'api/State',
        type:'POST',
        data:{
            id:1,
            kwh1:x,
            kwh2:y,
            kwh3:z
        }
    });
}
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="plugins/apex/strokedgauge.js"></script>
<!-- <script src="assets/js/dashboard/dash_2.js"></script> -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection