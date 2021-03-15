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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-four">
                        <h4 class="font-weight-bold align-left"><b>S O U R C E</b>
                            <h4 class="align-right">
                                <label class="form-switch2">
                                    <input type="checkbox">
                                    GRID&nbsp <i></i>&nbspBATTERY
                                </label>
                            </h4>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-four">
                        <div class="widget-heading">
                            <h4 class="font-weight-bold align-left"><b>Priority Load</b>
                                <h4 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>
                                </h4>
                            </h4>
                            <br />
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
                            </br>
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

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-four">
                        <div class="widget-heading">
                            <h4 class="font-weight-bold align-left"><b>Non-Priority Load</b>
                                <h4 class="align-right">
                                    <label class="form-switch">
                                        <input type="checkbox">
                                        <i></i>
                                    </label>
                                </h4>
                            </h4>
                            <br />
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
                            </br>
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
    $(document).ready(function () {
        App.init();
    });

</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_2.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
