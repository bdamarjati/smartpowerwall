@extends('layout.mainlayout')

@section('title','Settings')

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <!-- <div class="col-xl-3 layout-spacing"></div> -->
            <div class="col-xl-12 layout-spacing">
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
                    </div>
                </div>
            </div>
            <div class="col-xl-6 layout-spacing">
                <div class="widget widget-four">
                    <h4 class="font-weight-bold align-center">Control Page</h4>
                    <div class="widget-heading">
                        <h5 class="align-left">Add Load</h5>
                        <hr style="height:2px;color:grey;background-color:grey">
                    </div>
                    <div class="panel-body">
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
                    <div class="widget-heading">
                        <h5 class="align-left">Delete Load</h5>
                        <hr style="height:2px;color:grey;background-color:grey">
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" name="formLoad" method="POST" action="{{ route('deleteLoad') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <select class="form-control align-right" name="selectLoad" id="selectLoad" type="text">
                                    <option disabled selected>-- Select Load --</option>
                                    @foreach ($load as $l)
                                        <option value="{{$l['description']}}">{{$l['description']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary">
                                        Delete Load
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 layout-spacing">
                <div class="widget widget-table-two">
                    <h4 class="font-weight-bold align-center">User Setup</h4>
                    <div class="widget-heading">
                        <h5 class="align-left">List User</h5>
                        <hr style="height:2px;color:grey;background-color:grey">
                    </div>
                    <div class="widget-content">
                        <div class="col text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">
                                Add User
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="user-table" class="table text-center">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content" style="text-align: center">ID</div>
                                        </th>
                                        <th>
                                            <div class="th-content" style="text-align: center">Name</div>
                                        </th>
                                        <th>
                                            <div class="th-content" style="text-align: center">Email</div>
                                        </th>
                                        <th>
                                            <div style="text-align: center">Action</div>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add User Modal -->
            <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUserLabel">Add New User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form class="form-horizontal" name="formNewUser" method="POST" action="{{ route('addUser') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name" class="col-dm-6 control-label">Name</label>
                                    <div class="col-center">
                                        <input type="text" id="name" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-dm-6 control-label">Email</label>
                                    <div class="col-center">
                                        <input type="email" id="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-dm-6 control-label">Password</label>
                                    <div class="col-center">
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-primary" name="action">
                                            Add User
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Edit User Modal -->
            <div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="editUserLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editUserLabel">Update User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form class="form-horizontal" name="formEditUser" method="POST" action="{{ route('updateUser') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="id-edit" class="col-dm-6 control-label">ID</label>
                                    <div class="col-center">
                                        <input type="text" id="id-edit" name="id-edit" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name-edit" class="col-dm-6 control-label">Name</label>
                                    <div class="col-center">
                                        <input type="text" id="name-edit" name="name-edit" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email-edit" class="col-dm-6 control-label">Email</label>
                                    <div class="col-center">
                                        <input type="email" id="email-edit" name="email-edit" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-primary" name="action">
                                            Update User
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete User Modal -->
            <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CONFIRMATION</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <br />Are you sure you want to remove this user?
                    </div>
                    <br />
                    <div class="modal-footer">
                        <button id="delete_confirmation" type="button" class="btn btn-danger">Delete</button>
                    </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    App.init();
});
</script>
<script>
    $(document).ready(function() {
        $('#user-table').DataTable({
            "ajax": "api/getUser",
            "columns": [
                { "data": "id" },
                { "data": "name" },
                { "data": "email" },
                {
                    mRender: function (data, type, row) {
                    if (row['id'] == '1') {
                        return 'ADMIN'
                    } else {
                        return '<a title="Edit User" id="edit_button" data-id= ' + row['id'] + ' style="color: #8c4411" data-toggle="modal" data-target="#edit-user"><i class="fa fa-edit fa-lg"></i></a> ' +
                        '|' +
                        ' <a title="Delete User" id="delete_button" data-id=' + row['id'] + '><i class="fa fa-times fa-lg" style="color: #d82929"></i></a>'
                    }
                    }
                }
            ],
            "lengthChange": false,
            "searching": false,
        });
    });

    $(document).on('click', '#edit_button', function () {
        var id = $(this).attr('data-id');
        $.ajax({
            url: 'showUser/' + id,
            success: function (data) {
                $('#id-edit').val(data['id']);
                $('#name-edit').val(data['name']);
                $('#email-edit').val(data['email']);
            }
        })
    });

    $(document).on('click', '#delete_button', function () {
        user_id = $(this).attr('data-id');
        $('#confirmation').modal('show');
        $('#confirmation').css('background', 'rgba(0,0,0,0.5)');
    });

    $('#delete_confirmation').click(function () {
        $.ajax({
            url: 'deleteUser/' + user_id,
            beforeSend: function () {
            $('#delete_confirmation').text('DELETING..');
            },
            success: function (data) {
            setTimeout(function () {
                $('#confirmation').modal('hide');
                $('#userst').DataTable().ajax.reload();
                $('#delete_confirmation').text('DELETE');
            }, 1000);
            }
        })
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<!-- <script src="assets/js/dashboard/dash_1.js"></script> -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection