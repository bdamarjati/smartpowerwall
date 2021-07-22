@extends('layout.mainlayout')

@section('title','Dashboard')

@section('content')
<head>
<link rel="stylesheet" href="css/switch.css">
</head>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
    <div class="layout-top-spacing">
        <h3 class="font-weight-bold align-left">MAIN PANEL</h3>
    </div>
        <div class="row layout-top-spacing">
            <!-- POWER -->
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
                                <p class="w-value" id="textcap"> Watt</p>
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
                                <p class="w-value" id="textcharge"> Watt</p>
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
                                <p class="w-value" id="textload"> Watt</p>
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
            <!-- POWER FLOW -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-content">
                        <h4 class="w-value">Powerflow</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="90mm" height="73mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                    viewBox="0 0 9144 9144" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <style type="text/css">
                            <![CDATA[
                                .str4 {stroke:#009688;stroke-width:20}
                                .str0 {stroke:#1B55E2;stroke-width:20}
                                .str2 {stroke:#E7515A;stroke-width:20}
                                .str5 {stroke:#009688;stroke-width:84.66;stroke-linecap:round;stroke-linejoin:round}
                                .str1 {stroke:#1B55E2;stroke-width:84.66;stroke-linecap:round;stroke-linejoin:round}
                                .str3 {stroke:#E7515A;stroke-width:84.66;stroke-linecap:round;stroke-linejoin:round}
                                .fil1 {fill:none}
                                .fil3 {fill:#009688}
                                .fil0 {fill:#1B55E2}
                                .fil2 {fill:#E7515A}
                                .fil4 {fill:white}
                                .fil5 {fill:white}
                                .fnt0 {font-weight:normal;font-size:493.88px;font-family:'Bebas Neue'}
                            ]]>
                            </style>
                        </defs>
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"/>
                            <circle class="fil0 str0" cx="1458" cy="2322" r="708"/>
                            <path class="fil1 str1" d="M1128 3231c-383,-139 -637,-503 -637,-909 0,-535 433,-968 967,-968 407,0 770,255 909,637"/>
                            <path class="fil1 str1" d="M1789 3239c269,-98 481,-309 578,-578"/>
                            <circle class="fil2 str2" transform="matrix(4.80419E-014 -1.79926 -1.79926 -4.80419E-014 7685.58 6822.29)" r="394"/>
                            <path class="fil1 str3" d="M6777 7153c139,382 502,637 909,637 534,0 967,-433 967,-968 0,-406 -254,-770 -637,-909"/>
                            <path class="fil1 str3" d="M6768 6491c98,-268 310,-480 578,-578"/>
                            <circle class="fil3 str4" transform="matrix(4.80419E-014 1.79926 -1.79926 4.80419E-014 7685.58 2321.71)" r="394"/>
                            <path class="fil1 str5" d="M6777 1991c139,-382 502,-637 909,-637 534,0 967,433 967,968 0,406 -254,770 -637,909"/>
                            <path class="fil1 str5" d="M6768 2653c98,268 310,480 578,578"/>
                            <line class="fil1 str5" id="gtl" x1="2422" y1="2318" x2="6652" y2= "2318" />
                            <line class="fil1 str3" id="btl" x1="7711" y1="5845" x2="7711" y2= "3301" />
                            <path class="fil1 str1" id="gtb" d="M6684 6822l-3969 -2c-508,0 -926,19 -1104,-107 -179,-126 -153,-588 -153,-1028l0 -2366"/>
                            <path class="fil4" d="M1758 2048c-80,-80 -187,-124 -300,-124 -113,0 -219,44 -299,124 -80,80 -124,187 -124,300 0,75 20,149 58,214 37,63 90,115 153,152 6,3 12,5 19,5 12,0 25,-7 31,-18 11,-18 5,-40 -13,-50 -108,-63 -175,-179 -175,-303 0,-193 157,-350 350,-350 193,0 350,157 350,350 0,81 -22,149 -64,196 -34,39 -79,61 -125,61 -46,0 -97,-24 -116,-88 73,-15 129,-80 129,-159l0 -106c0,-6 -4,-10 -9,-10l-49 0 0 -100c0,-20 -17,-37 -37,-37 -20,0 -37,17 -37,37l0 100 -83 0 0 -100c0,-20 -17,-37 -37,-37 -20,0 -37,17 -37,37l0 100 -49 0c-5,0 -9,4 -9,10l0 106c0,83 62,152 143,161 8,41 26,76 53,103 36,36 85,56 138,56 67,0 132,-31 180,-85 38,-42 83,-119 83,-245 0,-113 -44,-220 -124,-300z"/>
                            <g id="_426616816">
                            </g>
                            <g id="_426616600">
                            </g>
                            <g id="_426616432">
                            </g>
                            <g id="_426616168">
                            </g>
                            <g id="_426616000">
                            </g>
                            <g id="_426615520">
                            </g>
                            <g id="_426615952">
                            </g>
                            <g id="_426615400">
                            </g>
                            <g id="_426614752">
                            </g>
                            <g id="_426615208">
                            </g>
                            <g id="_426614968">
                            </g>
                            <g id="_426615064">
                            </g>
                            <g id="_426614896">
                            </g>
                            <g id="_426613960">
                            </g>
                            <g id="_426613840">
                            </g>
                            <path class="fil4" d="M7827 6467l-62 0 0 -47 -162 0 0 47 -59 0c-39,0 -70,31 -70,69l0 619c0,38 31,69 70,69l283 0c39,0 70,-31 70,-69l0 -619c0,-38 -31,-69 -70,-69zm24 688c0,13 -11,23 -24,23l-283 0c-13,0 -23,-10 -23,-23l0 -619c0,-13 10,-23 23,-23l283 0c13,0 24,10 24,23l0 619zm-26 -4l-279 0 0 -102 279 0 0 102 0 0zm0 -127l-279 0 0 -102 279 0 0 102 0 0zm0 -127l-279 0 0 -102 279 0 0 102 0 0zm0 -127l-279 0 0 -102 279 0 0 102 0 0zm0 -127l-279 0 0 -101 279 0 0 101 0 0z"/>
                            <g id="_426613792">
                            </g>
                            <g id="_426614416">
                            </g>
                            <g id="_426613600">
                            </g>
                            <g id="_426613576">
                            </g>
                            <g id="_426613216">
                            </g>
                            <g id="_426613744">
                            </g>
                            <g id="_426612880">
                            </g>
                            <g id="_426612832">
                            </g>
                            <g id="_426612784">
                            </g>
                            <g id="_426612400">
                            </g>
                            <g id="_426612256">
                            </g>
                            <g id="_426611776">
                            </g>
                            <g id="_426611464">
                            </g>
                            <g id="_426611512">
                            </g>
                            <g id="_426611632">
                            </g>
                            <path id="home.svg" class="fil4" d="M8086 2267c0,0 0,0 0,0l-345 -346c-15,-15 -35,-23 -55,-23 -21,0 -41,8 -56,23l-345 345c0,1 0,1 0,1 -30,30 -30,79 0,110 14,14 32,22 52,23 1,0 1,0 2,0l14 0 0 254c0,50 41,91 91,91l135 0c14,0 25,-11 25,-25l0 -199c0,-23 19,-42 42,-42l79 0c23,0 42,19 42,42l0 199c0,14 11,25 25,25l135 0c50,0 91,-41 91,-91l0 -254 13 0c21,0 40,-8 55,-23 31,-31 31,-80 0,-110zm0 0z"/>
                            <text x="1115" y="1143"  class="fil5 fnt0">GRID</text>
                            <text x="7026" y="8323"  class="fil5 fnt0">BATTERY</text>
                            <text x="7302" y="1143"  class="fil5 fnt0">LOAD</text>
                        </g>
                        </svg>

                    </div>
                </div>
            </div>
            <!-- MAIN LOAD -->
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
            <!-- USAGE PER MONTH -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h4 class="w-value">Usage This Month</h4>
                    </div>
                    <div class="widget-content">
                        <div class="vistorsBrowser">
                            <div class="browser-list">
                                <div class="w-icon" style="background-color: #009688">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="#FFFFFF" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-chrome">
                                        <!--<circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line>-->
                                    </svg>
                                </div>
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h6>Main Load</h6>
                                        <p class="browser-count" id="txtpwrb"> Watt </p>
                                    </div>
                                    <div class="w-browser-stats">
                                        <div class="progress powerbar">
                                            <div class="progress-bar bg-gradient-success" id="pwrbbr" role="progressbar"
                                                style="width: 0%" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list" >
                                <div class="w-icon" style="background-color: #1b55e2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-compass">
                                        <!--<circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>-->
                                    </svg>
                                </div>
                                <div class="w-browser-details">

                                    <div class="w-browser-info">
                                        <h6>Grid</h6>
                                        <p class="browser-count" id="txtcrntb"> Watt</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress currentbar">
                                            <div class="progress-bar bg-gradient-primary" id="crntbbr" role="progressbar"
                                                style="width: 0%" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon" style="background-color: #e7515a">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-globe">
                                        <!--<circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>-->
                                    </svg>
                                </div>
                                <div class="w-browser-details">

                                    <div class="w-browser-info">
                                        <h6>Battery</h6>
                                        <p class="browser-count" id="txtvltb"> Watt </p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress voltbar">
                                            <div class="progress-bar bg-gradient-danger" id="vltbbr" role="progressbar"
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
            <!-- COST -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h4 class="w-value">Cost Overview</h4>
                    </div>
                    <div class="widget-content">
                        <div class="vistorsBrowser">
                            <div class="browser-list">
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h5>Total Load Cost</h5>
                                        <h5 class="browser-count" id="txtpwrc" style="color:#e7515a"> Rp </h5>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list">
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h5>Cost from Grid</h5>
                                        <h5 class="browser-count" id="txtcrntc" style="color:#e7515a"> Rp</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list">
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h5>Saving</h5>
                                        <h5 class="browser-count" id="txtvltc" style="color:#009688"> Rp </h5>
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
    $(document).ready(function () {
        App.init();
    });
    document.getElementById('menuDashboard').className = 'menu active';
    $.ajax({
        url: 'api/checkGrid',
        success: function(data){
            sgrid = data.kwh2;
            sload = data.kwh1;
            if(sgrid == 1){
                noBatt();
                if(sload == 0){
                    noLoad();
                }
            }
            else if(sgrid == 0){
                noGrid();
                if(sload == 0){
                    noLoad();
                }
            }
        }
    });
    function noLoad(){
        const str = document.querySelectorAll(".str5,.str4");
        const fil = document.querySelectorAll(".fil3");
        for (var i = 0; i < str.length; i++) {
            str[i].style.stroke = 'grey';
        }
        for (var i = 0; i < fil.length; i++) {
            fil[i].style.fill = 'grey';
        }
        document.getElementById('btl').style.stroke = 'grey';
    };
    function noGrid(){
        const str = document.querySelectorAll(".str0,.str1");
        const fil = document.querySelectorAll(".fil0");
        document.getElementById('gtl').style.stroke = 'grey';
        for (var i = 0; i < str.length; i++) {
            str[i].style.stroke = 'grey';
        }
        for (var i = 0; i < fil.length; i++) {
            fil[i].style.fill = 'grey';
        }
    };
    function noBatt(){
        const str = document.querySelectorAll(".str2,.str3");
        const fil = document.querySelectorAll(".fil2");
        for (var i = 0; i < str.length; i++) {
            str[i].style.stroke = '#1B55E2';
        }
        for (var i = 0; i < fil.length; i++) {
            fil[i].style.fill = '#1B55E2';
        }
        document.getElementById('btl').style.stroke = 'grey';
    };
</script>
<script src="assets/js/custom.js"></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
