@extends('layouts.master.admin')

@section('page-title')
    Add Role
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-role/{id}')
                            <h3 style="text-align: center; margin-bottom:25px;">Edit Role</h3>
                        @else
                            <h3 style="text-align: center; margin-bottom:25px;">Add Role</h3>
                        @endif
                        @if(Session::has('flash_message'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('flash_message')}}
                            </div>
                        @endif
                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-role/{id}')
                            <form class="form" method="POST" action="/admin/edit-role/@if($result && $result->id){{$result->id}}@endif">
                        @else
                            <form class="form" method="POST" action="/admin/add-role">
                        @endif
                            @csrf

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="roleName">Role</label>
                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-role/{id}')
                                        <input type="text" id="name" class="form-control" placeholder="Enter Role" name="name" value="@if($result && $result->name){{$result->name}}@endif" required>
                                    @else
                                        <input type="text" id="name" class="form-control" placeholder="Enter Role" name="name" required>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="newPassword">Role Description</label>
                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-role/{id}')
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Role Description" name="description" required>@if($result && $result->description){{$result->description}}@endif</textarea>
                                    @else
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Role Description" name="description" required></textarea>
                                    @endif
                                    
                                </div>
                            </div>

                            <div class="form-actions center">
                                <a href='/admin/add-role'>
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
