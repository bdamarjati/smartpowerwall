@extends('layout.mainlayout')

@section('title','Settings')

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl-3 layout-spacing"></div>
            <div class="col-xl-6 layout-spacing">
                <div class="widget widget-four">
                    <h4 class="font-weight-bold align-center">Settings</h4>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('settings') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="cost" class="col-dm-6 control-label">Cost/kWh</label>
                                <div class="col-center">
                                    <input type="text" id="cost" name="cost" class="form-control" value="{{ $bill[0]['cost'] }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                        <h4 class="font-weight-bold align-center">Control Page</h4>
                        <h5>Add Load</h5>
                        <form class="form-horizontal" name="formLoad" method="POST" action="{{ route('addLoad') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="description" class="col-dm-6 control-label">Label</label>
                                <div class="col-center">
                                    <input type="text" id="description" name="description" class="form-control" value="Load">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_kwh" class="col-dm-6 control-label">ID KWH</label>
                                <div class="col-center">
                                    <input type="text" id="id_kwh" name="id_kwh" class="form-control" value="{{$data}}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="api-field" class="col-dm-6 control-label">API</label>
                                <div class="col-center">
                                    <input type="text" id="api-field" name="api-field" class="form-control" value="https://si.ft.uns.ac.id/smartpowerwall/api/StateC" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary" name="action">
                                        Add Load
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
h4.align-center {
    text-align: center;
}
</style>
@endsection

@section('CustomScripts')
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
$(document).ready(function() {
    App.init();
});
</script>
<script>
    function genApi(){
        $.ajax({
            url: 'api/'
        });
    }
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection