@extends('layout.mainlayout')

@section('title','Dashboard')

@section('content')

<head>
    <link rel="stylesheet" href="css/switch.css">
</head>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class="">Usages</h5>
                        <ul class="tabs tab-pills">
                            <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                        </ul>
                    </div>

                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="usageMonthly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-four">
                    <div class="widget-heading">
                        <h4 class="font-weight-bold align-left"><b>DEBUG</b>
                        </h4>
                    </div>
                    <div class="widget-content">
                        <h5 class="table-1 align-left" id="debug">TEXT

                        </h5>
                        </br>
                        <h5 class="table-1 align-left">

                        </h5>
                    </div>
                </div>
            </div> -->

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">
                    <div class="widget-heading">
                        <h5 class="font-weight-bold align-left">LOGs</h5>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content" style="text-align: center">Mode</div>
                                        </th>
                                        <th>
                                            <div class="th-content" style="text-align: center">Voltage</div>
                                        </th>
                                        <th>
                                            <div class="th-content" style="text-align: center">Current</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading" style="text-align: center">Frequency</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading" style="text-align: center">Timestamp</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name" style="text-align: center">1</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand" style="text-align: center">220</div>
                                        </td>
                                        <td>
                                            <div class="td-content" style="text-align: center">2.08</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing" style="text-align: center"><span class="">50</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing" style="text-align: center"><span class="">2021-03-26 06:25:13</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name" style="text-align: center">2</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand" style="text-align: center">220</div>
                                        </td>
                                        <td>
                                            <div class="td-content" style="text-align: center">1.23</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing" style="text-align: center"><span class="">50</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing" style="text-align: center"><span class="">2021-03-26 06:25:13</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name" style="text-align: center">3</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand" style="text-align: center">220</div>
                                        </td>
                                        <td>
                                            <div class="td-content" style="text-align: center">3.3</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing" style="text-align: center"><span class="">50</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing" style="text-align: center"><span class="">2021-03-26 06:25:13</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!--  END CONTENT AREA  -->

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
