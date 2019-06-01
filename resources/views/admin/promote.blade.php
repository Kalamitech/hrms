@extends('layouts.master.admin')

@section('page-title')
    Promote
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <h3 style="text-align: center; margin-bottom:25px;">Promote Employee</h3>
                        @if(Session::has('success'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('success')}}
                            </div>
                        @endif
                        <form class="form" method="POST" action="/admin/promote">
                        
                            @csrf

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="employee">Employee</label>
                                            <select class="custom-select" id="employee" name="employee" required>
                                                <option selected disabled>Select Employee</option>
                                                @foreach($employees as $employee)
                                                    <option value="{{ $employee->id }}" employeeOldSalary="{{ $employee->salary }}" employeeOldRole="{{ $employee->role->name }}" >{{ $employee->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="oldDesignation">Old Designation</label>
                                            <input type="text" class="form-control required" id="oldDesignation" name="oldDesignation" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="newDesignation">New Designation</label>
                                            <select class="custom-select" id="newDesignation" name="newDesignation" required>
                                                <option selected disabled> Select new designation</option>
                                                @foreach($roles as $key => $role)
                                                    <option value="{{ $key }}" newDesignationText="{{ $role }}">{{ $role }}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" class="form-control required" id="newDesignationText" name="newDesignationText" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="oldSalary">Old Salary</label>
                                            <input type="text" class="form-control required" id="oldSalary" name="oldSalary" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="newSalary">New Salary</label>
                                            <input type="number" class="form-control required" id="newSalary" name="newSalary" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-actions center">
                                <a href='/admin/apply-leave'>
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
        
        $("#employee").change(function(){
            var employeeOldSalary =$('option:selected', this).attr('employeeOldSalary');
            var employeeOldRole =$('option:selected', this).attr('employeeOldRole');
            document.getElementById("oldSalary").value = employeeOldSalary;
            document.getElementById("oldDesignation").value = employeeOldRole;
        });

        $("#newDesignation").change(function(){
            var newDesignationText =$('option:selected', this).attr('newDesignationText');
            document.getElementById("newDesignationText").value = newDesignationText;
        });

        

        // $("#leaveFromTime").change(function(){
        //     var leaveFromTime = $('#leaveFromTime').val();
        //     document.getElementById("leaveToTime").min = leaveFromTime;

        //     if ($('#leaveFromTime').val() > $('#leaveToTime').val()) {
        //         document.getElementById("leaveToTime").value = leaveFromTime;
        //     }
        // });


    </script>
@endsection
