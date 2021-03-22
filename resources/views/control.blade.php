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

            <div class="row layout-top-spacing">

                <div class="column1 left">
                    <div class="widget widget-four">
                        <h4 class="font-weight-bold align-left"><b>S O U R C E</b>
                            <h4 class="align-right">
                                <div class="toggleWrapper">
                                    <input type="checkbox" class="dn" id="dn" />
                                    <label for="dn" class="toggle">
                                        <span class="toggle__handler"></span>
                                    </label>
                                </div>
                            </h4>
                        </h4>
                    </div>
                </div>

                <div class="column1 right">
                    <div class="widget widget-chart-four">
                        <h4 class="align-center"><b>Battery</b></h4>
                        <div class="widget-content">
                            <div id="chart" class=""></div>
                        </div>
                    </div>
                </div>

                <div class="column2 left">
                    <div class="widget widget-four">
                        <div class="widget-heading">
                            <h4 class="font-weight-bold align-left"><b>Priority Load</b>
                            </h4>
                            <br>
                            <hr style="height:2px;color:grey;background-color:grey">
                        </div>
                        <div class="widget-content">
                            <h5 class="table-1 align-left">Load 1
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
                            </h5>
                        </div>
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
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="plugins/apex/strokedgauge.js"></script>
<script src="assets/js/dashboard/dash_2.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection