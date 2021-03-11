@extends('layout.mainlayout')

@section('title','Dashboard')

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">

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
                                <p class="w-value" id="textcap">  Watt</p>
                                <h5 class="">Main Load</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="graphcap"></div>
                                </div>
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
                                <p class="w-value" id="textcharge">  Watt</p>
                                <h5 class="">Grid</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="graphcharge"></div>
                                </div>
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
                                <p class="w-value" id="textload">  Watt</p>
                                <h5 class="">Battery</h5>
                            </div>
                            <div class="widget-content">
                                <div class="w-chart">
                                    <div id="graphload"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ROW WIDGET -->
            <?php
            $value = 30;
            ?>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h4 class="w-value">Main Load</h4>
                    </div>
                    <div class="widget-content">
                        <div class="vistorsBrowser">
                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chrome">
                                        <!--<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>-->
                                    </svg>
                                </div>
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h6>Power (P)</h6>
                                        <p class="browser-count" id="txtpwr"> Watt </p>
                                    </div>
                                    <div class="w-browser-stats">
                                        <div class="progress powerbar">
                                            <div class="progress-bar bg-gradient-primary" id="pwrbr" role="progressbar"
                                                style="width: 0%" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-compass">
                                        <!--<circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>-->
                                    </svg>
                                </div>
                                <div class="w-browser-details">

                                    <div class="w-browser-info">
                                        <h6>Current (I)</h6>
                                        <p class="browser-count" id="txtcrnt"> A</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress currentbar">
                                            <div class="progress-bar bg-gradient-danger" id="crntbr" role="progressbar"
                                                style="width: 0%" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-globe">
                                        <!--<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>-->
                                    </svg>
                                </div>
                                <div class="w-browser-details">

                                    <div class="w-browser-info">
                                        <h6>Voltage (V)</h6>
                                        <p class="browser-count" id="txtvlt"> V </p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress voltbar">
                                            <div class="progress-bar bg-gradient-warning" id="vltbr" role="progressbar"
                                                style="width: 0%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

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
<script>
$(document).ready(function() {
    App.init();
});
</script>
<script src="assets/js/custom.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection