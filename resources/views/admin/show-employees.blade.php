@extends('layouts.master.admin')

@section('page-title')
    Employees
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Employee List</h3>

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
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Department</th>
                                    <th>Joining Date</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->code}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->role->name}}</td>
                                    <td>{{$employee->department->name}}</td>
                                    <td>{{$employee->date_of_joining}}</td>
                                    <td>{{$employee->current_address}}</td>
                                    <td>{{$employee->number}}</td>
                                    <td>
                                        @if ($employee->status == 0)
                                            Present
                                        @else
                                            Ex
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                                <a href="/admin/edit-employee/{{$employee->id}}">
                                                    <button type="button" class="btn btn-info btn-min-width" style="padding: 0.4rem 1rem;" >View / Edit</button>
                                                </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    <br><br>
                </div>
                <div style="text-align:center; margin: 0 auto;">
                        {!! $employees->links() !!}
                </div>
                
            </div>
            
        </div>
    </div>
@endsection
