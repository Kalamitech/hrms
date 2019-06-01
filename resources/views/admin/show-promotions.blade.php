@extends('layouts.master.admin')

@section('page-title')
    Promotions
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Promotions List</h3>

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
                                    <th>Promotion ID</th>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Old Designation</th>
                                    <th>New Designation</th>
                                    <th>Old Salary</th>
                                    <th>New Salary</th>
                                    <th>Date of Promotion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($promotions as $promotion)
                                <tr>
                                    <td>{{$promotion->id}}</td>
                                    <td>{{$promotion->employee->code}}</td>
                                    <td>{{$promotion->employee->name}}</td>
                                    <td>{{$promotion->old_designation}}</td>
                                    <td>{{$promotion->new_designation}}</td>
                                    <td>{{$promotion->old_salary}}</td>
                                    <td>{{$promotion->new_salary}}</td>
                                    <td>{{$promotion->date_of_promotion}}</td>
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
                        {!! $promotions->links() !!}
                </div>
                
            </div>
            
        </div>
    </div>
@endsection
