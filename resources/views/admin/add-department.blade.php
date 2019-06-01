@extends('layouts.master.admin')

@section('page-title')
    Add Department
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-department/{id}')
                            <h3 style="text-align: center; margin-bottom:25px;">Edit Department</h3>
                        @else
                            <h3 style="text-align: center; margin-bottom:25px;">Add Department</h3>
                        @endif
                        @if(Session::has('flash_message'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('flash_message')}}
                            </div>
                        @endif
                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-department/{id}')
                            <form class="form" method="POST" action="/admin/edit-department/@if($result && $result->id){{$result->id}}@endif">
                        @else
                            <form class="form" method="POST" action="/admin/add-department">
                        @endif
                            @csrf

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="departmentName">Department</label>
                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-department/{id}')
                                        <input type="text" id="name" class="form-control" placeholder="Enter Department" name="name" value="@if($result && $result->name){{$result->name}}@endif" required>
                                    @else
                                        <input type="text" id="name" class="form-control" placeholder="Enter Department" name="name" required>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="newPassword">Department Description</label>
                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-department/{id}')
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Department Description" name="description" required>@if($result && $result->description){{$result->description}}@endif</textarea>
                                    @else
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Department Description" name="description" required></textarea>
                                    @endif
                                    
                                </div>
                            </div>

                            <div class="form-actions center">
                                <a href='/admin/add-department'>
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
