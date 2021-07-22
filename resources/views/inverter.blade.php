@extends('layout.mainlayout')

@section('title','Inverter')

@section('content')

<head>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
    <link rel="stylesheet" href="css/switch.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
</head>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
    <div class="layout-top-spacing">
        <h3 class="font-weight-bold align-left">INVERTER</h3>
    </div>
    <div class="row">

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-circle">
                                        <!--<path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>-->
                                    </svg>
                                </div>
                                <p class="w-value" id="invvolt">0 Volt</p>
                                <h5 class="">Voltage</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-users">
                                        <!--<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>-->
                                    </svg>
                                </div>
                                <p class="w-value" id="invamp">0.00 A</p>
                                <h5 class="">Current</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-link">
                                        <!--<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>-->
                                    </svg>
                                </div>
                                <p class="w-value" id="invfreq">0 Hz</p>
                                <h5 class="">Frequency</h5>
                            </div>
                        </div>
                    </div>
                    <div class="layout-px-spacing layout-top-spacing" hidden>
                        <h3 id="txtdebug">DEBUG</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class="">MODE</h5>
                    </div>
                    <div class="widget-content">
                        <!-- <div id="chart-2" class=""></div> -->
                        <h3 id="invmode" style="text-align: center; padding: 39px; font-weight: bold;">MODE</h3>
                    </div>
                </div>
            </div>

            <div class="layout-px-spacing layout-top-spacing">
                <h3 class="font-weight-bold align-left" id="debug">STATISTICS</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Voltage</h5>
                            </div>

                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_1" class="tabcontent">
                                        <div id="chartInvVolt"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Current</h5>
                            </div>

                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_2" class="tabcontent">
                                        <div id="chartInvAmp"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-chart-one">
                            <div class="widget-heading">
                                <h5 class="">Frequency</h5>
                            </div>

                            <div class="widget-content">
                                <div class="tabs tab-content">
                                    <div id="content_3" class="tabcontent">
                                        <div id="chartInvFreq"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-table-two">
                            <div class="widget-heading">
                                <h5 class="font-weight-bold align-left">LOGs</h5>
                            </div>
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table id="log-inverter" class="table text-center">
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
                                    </table>
                                </div>
                            </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
    document.getElementById('menuDashboard').className = 'menu';
    document.getElementById('menuInverter').className = 'menu active';

    $(document).ready(function() {
        $('#log-inverter').DataTable({
            "ajax": "api/InverterTable",
            "columns": [
                { "data": "mode" },
                { "data": "voltage" },
                { "data": "current" },
                { "data": "freq" },
                { "data": "created_at" }
            ],
            "pageLength": 5,
            "lengthChange": false
        });
    });
</script>
<script src="assets/js/custom.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/pages/inverter.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
