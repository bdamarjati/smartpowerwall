@extends('layout.mainlayout')

@section('title','Dashboard')

@section('content')

<!-- <head>
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
    <link rel="stylesheet" href="css/switch.css">
</head> -->
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
    <div class="layout-top-spacing">
        <h3 class="font-weight-bold align-left">Battery Monitoring</h3>
    </div>
        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-circle">
                                    </svg>
                                </div>
                                <p class="w-value" id="bmsvolt">0 Volt</p>
                                <h5 class="">Total Voltage</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-users">
                                    </svg>
                                </div>
                                <p class="w-value" id="bmscrnt">0 A</p>
                                <h5 class="">Current</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-link">
                                    </svg>
                                </div>
                                <p class="w-value" id="bmstemp">0</p>
                                <h5 class="">Temperature</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                        <div class="widget widget-one_hybrid widget-social">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-link">
                                    </svg>
                                </div>
                                <p class="w-value" id="bmssoc">0 %</p>
                                <h5 class="">State of Charge</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layout-px-spacing">
                <h3 class="font-weight-bold">Battery Cells</h3>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc1">0 Volt</p>
                                <h5 class="">Cell 1</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc2">0 Volt</p>
                                <h5 class="">Cell 2</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc3">0 Volt</p>
                                <h5 class="">Cell 3</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc4">0 Volt</p>
                                <h5 class="">Cell 4</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc5">0 Volt</p>
                                <h5 class="">Cell 5</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc6">0 Volt</p>
                                <h5 class="">Cell 6</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc7">0 Volt</p>
                                <h5 class="">Cell 7</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc8">0 Volt</p>
                                <h5 class="">Cell 8</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc9">0 Volt</p>
                                <h5 class="">Cell 9</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc10">0 Volt</p>
                                <h5 class="">Cell 10</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc11">0 Volt</p>
                                <h5 class="">Cell 11</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc12">0 Volt</p>
                                <h5 class="">Cell 12</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">

                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc13">0 Volt</p>
                                <h5 class="">Cell 13</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc14">0 Volt</p>
                                <h5 class="">Cell 14</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="tvc15">0 Volt</p>
                                <h5 class="">Cell 15</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="cellmin">0 Volt</p>
                                <h5 class="">Min. Voltage</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <p class="w-value" id="cellmax">0 Volt</p>
                                <h5 class="">Max. Voltage</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="layout-px-spacing">
                <h3 class="font-weight-bold">LOGs</h3>
            </div> -->

            <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content" style="text-align: center">Cell 1</div>
                                        </th>
                                        <th>
                                            <div class="th-content" style="text-align: center">Cell 2</div>
                                        </th>
                                        <th>
                                            <div class="th-content" style="text-align: center">Cell 3</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading" style="text-align: center">Cell 4</div>
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
            </div> -->
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
    document.getElementById('menuBMS').className = 'menu active';
</script>
<script src="assets/js/custom.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/pages/bms.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
