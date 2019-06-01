@extends('layouts.pages.forms')

@section('page-title')
    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
        Edit Employee
    @else
        Add Employee
    @endif
@endsection

@section('content-body')
    <section id="validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                <h3 style="text-align: center; margin-bottom:25px;">Edit Details of {{ $employee->name }} </h3>
                                <form id="employeeForm" name="employeeForm" action="/admin/edit-employee/{{$employee->id}}" method="POST" class="steps-validation wizard-notification">
                            @else
                                <h3 style="text-align: center; margin-bottom:25px;">Add Employee</h3>
                                <form id="employeeForm" name="employeeForm" action="/admin/add-employee" method="POST" class="steps-validation wizard-notification">
                            @endif
                            
                            <form id="employeeForm" name="employeeForm" action="/admin/add-employee" method="POST" class="steps-validation wizard-notification">
                                @csrf
                                <!-- Step 1 -->
                                <h6><i class="step-icon la la-home"></i>Personal Details</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeName">
                                                    Employee Name 
                                                    <span class="danger">*</span>
                                                </label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="text" class="form-control required" id="employeeName" name="employeeName" value="@if($employee && $employee->name){{$employee->name}}@endif">
                                                @else
                                                    <input type="text" class="form-control required" id="employeeName" name="employeeName">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeePhoto">
                                                    Employee Photo 
                                                    <span class="danger">*</span>
                                                </label>
                                                <fieldset class="form-group">
                                                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                            <div style="float:left; width:30%">
                                                                    <button type="button" class="btn btn-info btn-min-width" style="padding: 0.4rem 1rem; height: 40px;
                                                                    border-radius: 5px;" >View Current Photo</button>
                                                            </div>
                                                            <div class="custom-file" style="width:70%">
                                                                <label class="custom-file-label" for="employeePhoto" id='employeePhotoLabel' >Choose New Photo to Upload</label>
                                                                <input type="file" class="custom-file-input" id="employeePhoto" value="@if($employee &&$employee->photo){{$employee->photo}}@endif">
                                                            </div>
                                                        @else
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="employeePhoto" id='employeePhotoLabel'>Choose photo</label>
                                                                <input type="file" class="custom-file-input required" id="employeePhoto">
                                                            </div>
                                                        @endif
                                                </fieldset>                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeDOB">Date of Birth</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="date" class="form-control required" id="employeeDOB" name="employeeDOB" value="@if($employee && $employee->date_of_birth){{$employee->date_of_birth}}@endif">
                                                @else
                                                    <input type="date" class="form-control required" id="employeeDOB" name="employeeDOB">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeGender">
                                                    Gender
                                                    <span class="danger">*</span>
                                                </label>
                                                <fieldset class="radio required" >
                                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                        <label>
                                                            <input type="radio" name="employeeGender" value="0" @if(isset($employee))@if($employee->gender == '0') checked @endif @endif>
                                                            Male 
    
                                                            &nbsp;&nbsp;
    
                                                            <input type="radio" name="employeeGender" value="1" @if(isset($employee))@if($employee->gender == '1') checked @endif @endif>
                                                            Female
                                                        </label>
                                                    @else
                                                        <label>
                                                            <input type="radio" name="employeeGender" value="0" checked>
                                                            Male 
    
                                                            &nbsp;&nbsp;
    
                                                            <input type="radio" name="employeeGender" value="1" >
                                                            Female
                                                        </label>
                                                    @endif
                                                    
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employmentStatus">
                                                    Employment Status
                                                    <span class="danger">*</span>
                                                </label>
                                                <fieldset class="radio required">
                                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <label>
                                                        <input type="radio" name="employmentStatus" value="0"  @if(isset($employee))@if($employee->status == '0') checked @endif @endif>
                                                       Present 

                                                       &nbsp;&nbsp;

                                                        <input type="radio" name="employmentStatus" value="1"  @if(isset($employee))@if($employee->status == '1') checked @endif @endif>
                                                        Ex
                                                    </label>

                                                    @else
                                                        <label>
                                                            <input type="radio" name="employmentStatus" value="0" >
                                                            Present 
    
                                                           &nbsp;&nbsp;
    
                                                            <input type="radio" name="employmentStatus" value="1">
                                                            Ex
                                                        </label>
                                                    @endif
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeDOJ">Date of Joining</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="date" class="form-control required" id="employeeDOJ" name="employeeDOJ" value="@if($employee && $employee->date_of_joining){{$employee->date_of_joining}}@endif">
                                                @else
                                                    <input type="date" class="form-control required" id="employeeDOJ" name="employeeDOJ">
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeePhoneNumber">Phone Number</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="tel" class="form-control required" id="employeePhoneNumber" name="employeePhoneNumber" value="@if($employee && $employee->number){{$employee->number}}@endif">
                                                @else
                                                    <input type="tel" class="form-control required" id="employeePhoneNumber" name="employeePhoneNumber">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeEmergencyNumber">Emergency Number</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="tel" class="form-control required" id="employeeEmergencyNumber" name="employeeEmergencyNumber" value="@if($employee && $employee->emergency_number){{$employee->emergency_number}}@endif">
                                                @else
                                                    <input type="tel" class="form-control required" id="employeeEmergencyNumber" name="employeeEmergencyNumber">
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeTIN">Tax Identification Number</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="text" class="form-control required" id="employeeTIN" name="employeeTIN" value="@if($employee && $employee->tin){{$employee->tin}}@endif">
                                                @else
                                                    <input type="text" class="form-control required" id="employeeTIN" name="employeeTIN">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeFathersName">Fathers Name</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="text" class="form-control required" id="employeeFathersName" name="employeeFathersName" value="@if($employee && $employee->father_name){{$employee->father_name}}@endif">
                                                @else
                                                    <input type="text" class="form-control required" id="employeeFathersName" name="employeeFathersName">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeResidentialAddress">Residential Address</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="text" class="form-control required" id="employeeResidentialAddress" name="employeeResidentialAddress" value="@if($employee && $employee->permanent_address){{$employee->permanent_address}}@endif">
                                                @else
                                                    <input type="text" class="form-control required" id="employeeResidentialAddress" name="employeeResidentialAddress">
                                                @endif                                                    
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeCurrentAddress">Current Address</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="text" class="form-control required" id="employeeCurrentAddress" name="employeeCurrentAddress" value="@if($employee && $employee->current_address){{$employee->current_address}}@endif">
                                                @else
                                                    <input type="tel" class="form-control required" id="employeeCurrentAddress" name="employeeCurrentAddress">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Step 2 -->
                                <h6><i class="step-icon la la-briefcase"></i>Employment Details</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="joiningFormalities">
                                                    Joining Formalities
                                                    <span class="danger">*</span>
                                                </label>
                                                <br><br>
                                                <fieldset class="radio required">
                                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <label>
                                                        <input type="radio" name="joiningFormalities" value="0" @if(isset($employee))@if($employee->formalities == '0') checked @endif @endif>
                                                        Completed 

                                                        &nbsp;&nbsp;

                                                        <input type="radio" name="joiningFormalities" value="1"  @if(isset($employee))@if($employee->formalities == '1') checked @endif @endif>
                                                        Pending
                                                    </label>
                                                    @else
                                                        <label>
                                                            <input type="radio" name="joiningFormalities" value="0" checked>
                                                            Completed 
    
                                                            &nbsp;&nbsp;
    
                                                            <input type="radio" name="joiningFormalities" value="1">
                                                            Pending
                                                        </label>
                                                    @endif
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="offerAcceptance">
                                                    Offer Acceptance
                                                    <span class="danger">*</span>
                                                </label>
                                                <br><br>
                                                <fieldset class="radio required">
                                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                        <label>
                                                            <input type="radio" name="offerAcceptance" value="0"  @if(isset($employee))@if($employee->formalities == '0') checked @endif @endif>
                                                            Completed 

                                                            &nbsp;&nbsp;

                                                            <input type="radio" name="offerAcceptance" value="1"  @if(isset($employee))@if($employee->formalities == '1') checked @endif @endif>
                                                            Pending
                                                        </label>
                                                    @else
                                                    <label>
                                                            <input type="radio" name="offerAcceptance" value="0" checked>
                                                            Completed 

                                                            &nbsp;&nbsp;

                                                            <input type="radio" name="offerAcceptance" value="1">
                                                            Pending
                                                        </label>
                                                    @endif
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeePP">Probation Period</label>
                                                <fieldset class="form-group">
                                                    <select class="custom-select" id="employeePP" name="employeePP">
                                                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                            <option value="0" @if(isset($employee))@if($employee->probation_period == '0') selected @endif @endif>0 days</option>
                                                            <option value="30" @if(isset($employee))@if($employee->probation_period == '30') selected @endif @endif>30 days</option>
                                                            <option value="60" @if(isset($employee))@if($employee->probation_period == '60') selected @endif @endif>60 days</option>
                                                            <option value="90" @if(isset($employee))@if($employee->probation_period == '90') selected @endif @endif>90 days</option>
                                                            <option value="180" @if(isset($employee))@if($employee->probation_period == '180') selected @endif @endif>180 days</option>
                                                        @else
                                                            <option value="0" selected>0 days</option>
                                                            <option value="30">30 days</option>
                                                            <option value="60">60 days</option>
                                                            <option value="90">90 days</option>
                                                            <option value="180">180 days</option>
                                                        @endif
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeDOC">Date of Confirmation</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="date" class="form-control required" id="employeeDOC" name="employeeDOC" value="@if($employee && $employee->date_of_confirmation){{$employee->date_of_confirmation}}@endif">
                                                @else
                                                    <input type="date" class="form-control required" id="employeeDOC" name="employeeDOC">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeRole">Role</label>
                                                <fieldset class="form-group">
                                                    <select class="custom-select" id="employeeRole" name="employeeRole">
                                                        
                                                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                            @foreach($roles as $key => $role)
                                                                <option value="{{ $key }}" @if(isset($employee))@if($employee->role_id == $key ) selected @endif @endif>{{ $role }}</option>
                                                            @endforeach
                                                        @else
                                                            <option selected disabled>Select Role</option>
                                                            @foreach($roles as $key => $role)
                                                                <option value="{{ $key }}">{{ $role }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeDepartment">Department</label>
                                                <fieldset class="form-group">
                                                    <select class="custom-select" id="employeeDepartment" name="employeeDepartment">
                                                        
                                                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                            @foreach($departments as $key => $department)
                                                                <option value="{{ $key }}" @if(isset($employee))@if($employee->department_id == $key ) selected @endif @endif>{{ $department }}</option>
                                                            @endforeach
                                                        @else
                                                            <option selected disabled>Select Department</option>
                                                            @foreach($departments as $key => $department)
                                                                <option value="{{ $key }}">{{ $department }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeAccessLevel">Access Level</label>
                                                <fieldset class="form-group">
                                                    <select class="custom-select" id="employeeAccessLevel" name="employeeAccessLevel">
                                                        
                                                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                            @foreach($accessLevels as $key => $accessLevel)
                                                                <option value="{{ $key }}" @if(isset($user))@if($user->access_level == $key ) selected @endif @endif>{{ $accessLevel }}</option>
                                                            @endforeach
                                                        @else
                                                            <option selected disabled>Assign Access Level</option>
                                                            @foreach($accessLevels as $key => $accessLevel)
                                                                <option value="{{ $key }}">{{ $accessLevel }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeSOC">Salary on Confirmation</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="number" class="form-control required" id="employeeSOC" name="employeeSOC" value="@if($employee && $employee->salary){{$employee->salary}}@endif">
                                                @else
                                                    <input type="number" class="form-control required" id="employeeSOC" name="employeeSOC">
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </fieldset>

                                <!-- Step 3 -->
                                <h6><i class="step-icon la la-money"></i>Banking Details</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeBankName">Bank Name</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="text" class="form-control required" id="employeeBankName" name="employeeBankName" value="@if($employee && $employee->bank_name){{$employee->bank_name}}@endif">
                                                @else
                                                    <input type="text" class="form-control required" id="employeeBankName" name="employeeBankName">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeBankAccountNumber">Bank Account Number</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="text" class="form-control required" id="employeeBankAccountNumber" name="employeeBankAccountNumber" value="@if($employee && $employee->account_number){{$employee->account_number}}@endif">
                                                @else
                                                    <input type="text" class="form-control required" id="employeeBankAccountNumber" name="employeeBankAccountNumber">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <!-- Step 4 -->
                                <h6><i class="step-icon la la-newspaper-o"></i>Ex Employment Details</h6>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeDOR">Date of Resignation</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="date" class="form-control required" id="employeeDOC" name="employeeDOR" value="@if($employee && $employee->date_of_resignation){{$employee->date_of_resignation}}@endif">
                                                @else
                                                    <input type="date" class="form-control required" id="employeeDOC" name="employeeDOR">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeNP">Notice Period</label>
                                                <fieldset class="form-group">
                                                    <select class="custom-select" id="employeeNP" name="employeeNP">
                                                        @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                            <option value="0" @if(isset($employee))@if($employee->notice_period == '0') selected @endif @endif>0 days</option>
                                                            <option value="30" @if(isset($employee))@if($employee->notice_period == '30') selected @endif @endif>30 days</option>
                                                            <option value="60" @if(isset($employee))@if($employee->notice_period == '60') selected @endif @endif>60 days</option>
                                                            <option value="90" @if(isset($employee))@if($employee->notice_period == '90') selected @endif @endif>90 days</option>
                                                        @else
                                                            <option value="0" selected>0 days</option>
                                                            <option value="30">30 days</option>
                                                            <option value="60">60 days</option>
                                                            <option value="90">90 days</option>
                                                        @endif
                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employeeLWD">Last Working Day</label>
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                    <input type="date" class="form-control required" id="employeLWD" name="employeeLWD"  value="@if($employee && $employee->last_working_day){{$employee->last_working_day}}@endif">
                                                @else
                                                    <input type="date" class="form-control required" id="employeLWD" name="employeeLWD">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="FnF">
                                                    Full and Final Settlement  
                                                    <span class="danger">*</span>
                                                </label>
                                                <br><br>
                                                <fieldset class="radio required">
                                                    @if(\Route::getFacadeRoot()->current()->uri() == 'admin/edit-employee/{id}')
                                                        <label>
                                                            <input type="radio" name="FnF" value="0" @if(isset($employee))@if($employee->full_final == '0') checked @endif @endif>
                                                            Completed 
    
                                                            &nbsp;&nbsp;
    
                                                            <input type="radio" name="FnF" value="1" @if(isset($employee))@if($employee->full_final == '1') checked @endif @endif>
                                                            Pending
                                                        </label>
                                                    @else
                                                        <label>
                                                            <input type="radio" name="FnF" value="0" checked>
                                                            Completed 
    
                                                            &nbsp;&nbsp;
    
                                                            <input type="radio" name="FnF" value="1">
                                                            Pending
                                                        </label>
                                                    @endif
                                                    
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('#employeePhoto').change(function() {
            var filename = $('#employeePhoto').val();
            $('#employeePhotoLabel').html(filename);
        });
    </script>
@endsection

