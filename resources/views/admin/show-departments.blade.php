@extends('layouts.master.admin')

@section('page-title')
    Departments
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Department List</h3>

                <div class="card-content collapse show">
                    @if(Session::has('flash_message'))
                        <div class="alert round bg-success alert-dismissible mb-2" style="width: 40%; margin-left: 30%; text-align: center;" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{\Session::get('flash_message')}}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr class="border-double">
                                    <th>ID</th>
                                    <th>Department</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($departments as $department)
                                <tr>
                                    <td>{{$i+=1}}</td>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->description}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-min-width dropdown-toggle" style="padding: 0.4rem 1rem;"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/admin/edit-department/{{$department->id}}">Edit</a>
                                                <a class="dropdown-item" href="/admin/delete-department/{{$department->id}}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                </div>
                <div style="text-align:center; margin: 0 auto;">
                    {!! $departments->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
