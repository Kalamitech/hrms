@extends('layouts.master.admin')

@section('page-title')
    Add Training Program
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <h3 style="text-align: center; margin-bottom:25px;">Add Training Program</h3>
                        @if(Session::has('success'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('success')}}
                            </div>
                        @endif
                        
                        <form class="form" method="POST" action="/admin/add-training-program">
                        
                            @csrf

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="name">Training Program</label>
                                    <input type="text" id="name" class="form-control" placeholder="Enter Program Name" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Training Program Description</label>
                                    <textarea class="form-control" id="description" rows="3" placeholder="Enter Department Description" name="description" required></textarea>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <a href='/admin/add-training-program'>
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
