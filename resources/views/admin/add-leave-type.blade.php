@extends('layouts.master.admin')

@section('page-title')
    Add Laave Type
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-leave-type/{id}')
                            <h3 style="text-align: center; margin-bottom:25px;">Edit Leave Type</h3>
                        @else
                            <h3 style="text-align: center; margin-bottom:25px;">Add Leave Type</h3>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('success')}}
                            </div>
                        @endif
                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-leave-type/{id}')
                            <form class="form" method="POST" action="/admin/edit-leave-type/@if($result && $result->id){{$result->id}}@endif">
                        @else
                            <form class="form" method="POST" action="/admin/add-leave-type">
                        @endif
                            @csrf

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="roleName">Leave Type</label>
                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-leave-type/{id}')
                                        <input type="text" id="type" class="form-control" placeholder="Enter Leave Type" name="type" value="@if($result && $result->leave_type){{$result->leave_type}}@endif" required>
                                    @else
                                        <input type="text" id="type" class="form-control" placeholder="Enter Leave Type" name="type" required>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="newPassword">Leave Description</label>
                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-leave-type/{id}')
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Leave Description" name="description" required>@if($result && $result->description){{$result->description}}@endif</textarea>
                                    @else
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Leave Description" name="description" required></textarea>
                                    @endif
                                    
                                </div>
                            </div>

                            <div class="form-actions center">
                                <a href='/admin/add-leave-type'>
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
