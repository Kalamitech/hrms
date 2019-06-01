@extends('layouts.master.admin')

@section('page-title')
    Leave Types
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Leave Type List</h3>

                <div class="card-content collapse show">
                    @if(Session::has('success'))
                        <div class="alert round bg-success alert-dismissible mb-2" style="width: 40%; margin-left: 30%; text-align: center;" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{\Session::get('success')}}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr class="border-double">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($leaveTypes as $leaveType)
                                <tr>
                                    <td>{{$i+=1}}</td>
                                    <td>{{$leaveType->leave_type}}</td>
                                    <td>{{$leaveType->description}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-min-width dropdown-toggle" style="padding: 0.4rem 1rem;"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="/admin/edit-leave-type/{{$leaveType->id}}">Edit</a>
                                                <a class="dropdown-item" href="/admin/delete-leave-type/{{$leaveType->id}}">Delete</a>
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
                    {!! $leaveTypes->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
