@extends('layouts.master.admin')

@section('page-title')
    Change Password
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <h3 style="text-align: center; margin-bottom:25px;">Change Password</h3>
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('flash_message')}}
                            </div>
                        @endif
                        <form class="form" method="POST" action="/admin/change-password">

                            @csrf

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="oldPassword">Old Password</label>
                                    <input type="password" id="oldPassword" class="form-control" placeholder="Enter Old Password" name="old" required>
                                </div>

                                <div class="form-group">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" id="newPassword" class="form-control" placeholder="Enter New Password" name="new" required>
                                </div>

                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm New Password" name="confirm" required>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <a href='/admin/change-password'>
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="la la-refresh"></i> Refresh
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-success">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
