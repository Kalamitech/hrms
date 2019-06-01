@extends('layouts.pages.select')

@section('page-title')
    Invite to Training Program
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <h3 style="text-align: center; margin-bottom:25px;">Invite to Training Program</h3>
                        @if(Session::has('success'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('success')}}
                            </div>
                        @endif
                        
                        <form class="form" method="POST" action="/admin/training-invite">
                        
                            @csrf

                            <div class="form-body">

                                <div class="form-group">
                                    <label for="description">Invite Members</label>
                                    <select class="select2 form-control" multiple="multiple" name="employeeIDs[]" style="border-radius: 20px;" required>
                                            @foreach($employees as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                            @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="program">Select Program</label>
                                    <select class="custom-select" id="program" name="programID" required>
                                        <option selected disabled>Select One </option>
                                        @foreach($programs as  $program)
                                            <option value="{{ $program->id }}">{{ $program->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="description">Invite Description</label>
                                    <input type="text" id="description" class="form-control" placeholder="Enter Invite Description" name="description" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fromDate">From Date</label>
                                            <input type="date" class="form-control required" id="fromDate" min="2019-05-27" name="fromDate" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="toDate">To Date</label>
                                            <input type="date" class="form-control required" id="toDate" min="2019-05-27" name="toDate" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <a href='/admin/training-invite'>
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

    <script type="text/javascript">
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
        if(dd<10){
                dd='0'+dd
            } 
            if(mm<10){
                mm='0'+mm
            } 

        today = yyyy+'-'+mm+'-'+dd;
        
        document.getElementById("fromDate").setAttribute("min", today);
        document.getElementById("toDate").setAttribute("min", today);

        document.getElementById("fromDate").setAttribute("value", today);
        document.getElementById("toDate").setAttribute("value", today);

        $("#fromDate").change(function(){
            var fromDate = $('#fromDate').val();
            document.getElementById("toDate").value = fromDate;
            document.getElementById("toDate").min = fromDate;
        });
    </script>
@endsection
