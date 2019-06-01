@extends('layouts.master.admin')

@section('page-title')
    Add Holiday
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('success')}}
                            </div>
                        @elseif(Session::has('error'))
                        <div class="alert round bg-danger alert-dismissible mb-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            {{\Session::get('error')}}
                        </div>
                        @endif
                        
                        <form class="form" method="POST" action="/admin/add-holiday" enctype="multipart/form-data">
                            <div class="card">
                                    <div class="card-content">
                                        <div class="card-body" style=" padding: 0px;">
                                            <ul class="nav nav-tabs nav-iconfall">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="add-holiday" data-toggle="tab" aria-controls="addHolidayTab" href="#addHolidayTab" aria-expanded="true"><i class="la la-calendar"></i> Add Holiday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="upload-holiday-sheet" data-toggle="tab" aria-controls="uploadHolidaySheetTab" href="#uploadHolidaySheetTab" aria-expanded="false"><i class="la la-cloud-upload"></i> Upload Holiday Sheet</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active" id="addHolidayTab" aria-expanded="true" aria-labelledby="add-holiday">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="name">Holiday Description</label>
                                                            <input type="text" id="name" class="form-control" placeholder="Enter Holiday Name" name="name">
                                                        </div>
                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="fromDate">From Date</label>
                                                                    <input type="date" class="form-control required" id="fromDate" min="2019-05-27" name="fromDate">
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="toDate">To Date</label>
                                                                    <input type="date" class="form-control required" id="toDate" min="2019-05-27" name="toDate">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions center">
                                                        <a href='/admin/add-holiday'>
                                                            <button type="button" class="btn btn-warning mr-1">
                                                                <i class="la la-refresh"></i> Refresh
                                                            </button>
                                                        </a>
                                                        <button type="submit" name="single" value="single" class="btn btn-success">
                                                            <i class="la la-check-square-o"></i> Save
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="uploadHolidaySheetTab" aria-labelledby="upload-holiday-sheet">
                                                    <div class="row">
                                                        <div class="col-md-4" style="text-align:center; padding-right: 0px;">
                                                            <a href='../../../app-assets/excel/holiday_sample_sheet.xlsx'>
                                                                <button type="button" class="btn btn-info mr-1">
                                                                    <i class="la la-cloud-download"></i> Sample Sheet
                                                                </button>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="uploadFile" id='uploadFileLabel'>Select Upload File</label>
                                                                <input type="file" class="custom-file-input required" id="uploadFile" name="uploadFile">
                                                            </div>
                                                    </div>
                    
                                                        
                                                    </div>
                                                    <div class="form-actions center">
                                                        <a href='/admin/add-holiday'>
                                                            <button type="button" class="btn btn-warning mr-1">
                                                                <i class="la la-refresh"></i> Refresh
                                                            </button>
                                                        </a>
                                                        <button type="submit" name="upload" value="upload" class="btn btn-success">
                                                            <i class="la la-cloud-upload"></i> Upload Sheet
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @csrf
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

        $('#uploadFile').change(function() {
            var filename = $('#uploadFile').val();
            $('#uploadFileLabel').html(filename);
        });
    </script>
@endsection
