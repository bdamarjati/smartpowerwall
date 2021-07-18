@extends('layout.mainlayout')

@section('title','Control')

@section('content')

<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="css/switch.css">
    <link rel="stylesheet" href="css/switch2.css">
</head>

<body>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-four">

                        <div class="widget-heading">
                            <h4 class="font-weight-bold align-left"><b>Control Test</b>
                            </h4>
                            <br/>
                        </div>
                        </br>
                        <div class="widget-content">
                            <h5 class="table-1 align-left">KWH 1
                                <h5 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox" id="skwh1" value="{{$data[0]['kwh1']}}" onClick="getSwitch()">
                                        <i></i>
                                    </label>
                                </h5>
                            </h5>
                            </br>
                            <h5 class="table-1 align-left">KWH 2
                                <h5 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox" id="skwh2" value="{{$data[0]['kwh2']}}" onClick="getSwitch()">
                                        <i></i>
                                    </label>
                                </h5>
                            </h5>
                            </br>
                            @foreach ($data as $d)
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
                            <!-- Just for debugging purpose it's such pain in the ass to change the tab every debugging -->
                            <h5 class="table-1 align-left">API DATA :
                                <h5 class="align-right" id="debug">TEXT</h5>
                            </h5>
                            </br>
                            <h5 class="table-1 align-left">Switch Value :
                                <h5 class="align-right" id="swdebug">TEXT</h5>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
h4.align-right {
    text-align: right;
    padding: 0;
    margin: 0;
}

h4.align-left {
    text-align: left;
    padding: 0;
    margin: 0;
    position: absolute;
}

h5.align-right {
    text-align: right;
    padding: 0;
    margin: 0;
}

h5.align-left {
    text-align: left;
    padding: 0;
    margin: 0;
    position: absolute;
}
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
</script>
<script src="assets/js/custom.js"></script>
<script>
    // document.getElementById("skwh1").checked = 0;
    // document.getElementById("skwh2").checked = 0;
    // document.getElementById("skwh3").checked = 0;

    var skwh1 = document.getElementById("skwh1").getAttribute("value");
    var skwh2 = document.getElementById("skwh2").getAttribute("value");
    var skwh3 = document.getElementById("skwh3").getAttribute("value");
    document.getElementById("debug").innerHTML = "{{$data[0]}}";
    
    setTimeout(updateSwitch(),1000);
    setTimeout(getSwitch(),1000);
    function updateSwitch(){
        // skwh1 = document.getElementById("skwh1").getAttribute("value");
        // skwh2 = document.getElementById("skwh2").getAttribute("value");
        // skwh3 = document.getElementById("skwh3").getAttribute("value");
        if(skwh1 != 0){
            document.getElementById("skwh1").checked = true;
        }
        if(skwh2 != 0){
            document.getElementById("skwh2").checked = true;
            // document.getElementById("skwh3").checked = false;
        }
        if(skwh3 != 0){
            document.getElementById("skwh3").checked = true;
            // document.getElementById("skwh2").checked = false;
        }
        //considering swap to switch instead of if
    };
    function getSwitch(){
        var x = document.getElementById("skwh1").checked;
        var y = document.getElementById("skwh2").checked;
        var z = document.getElementById("skwh3").checked;
        //if x,y,z true == 1; false == 0;
        switch(x){
            case true :
                x = 1;
                break;
            case false :
                x = 0;
                break;
        }
        switch(y){
            case true :
                y = 1;
                z = 0;
                document.getElementById("skwh3").checked = false;
                break;
            case false :
                y = 0;
                z = 1;
                document.getElementById("skwh3").checked = true;
                break;
        }
        switch(z){
            case true :
                z = 1;
                y = 0;
                document.getElementById("skwh2").checked = false;
                break;
            case false :
                z = 0;
                y = 1;
                document.getElementById("skwh2").checked = true;
                break;
        }
        document.getElementById("swdebug").innerHTML = x+" ; "+y+" ; "+z;
        //ajax post to api/State the value of x,y,z
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
        // updateSwitch();
    };
</script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_2.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection