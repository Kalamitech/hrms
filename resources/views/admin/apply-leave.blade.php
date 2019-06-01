@extends('layouts.master.admin')

@section('page-title')
    Apply Leave
@endsection


@section('content-body')
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        <h3 style="text-align: center; margin-bottom:25px;">Apply Leave</h3>
                        @if(Session::has('success'))
                            <div class="alert round bg-success alert-dismissible mb-2" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {{\Session::get('success')}}
                            </div>
                        @endif
                        <form class="form" method="POST" action="/admin/apply-leave">
                        
                            @csrf

                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leaveFromDate">From Date</label>
                                            <input type="date" class="form-control required" id="leaveFromDate" min="2019-05-27" name="leaveFromDate">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leaveToDate">To Date</label>
                                            <input type="date" class="form-control required" id="leaveToDate" min="2019-05-27" name="leaveToDate">
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leaveFromTime">From Time</label>
                                            <input type="time" class="form-control required" value="08:00" id="leaveFromTime" name="leaveFromTime">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leaveToTime">To Time</label>
                                            <input type="time" class="form-control required" value="17:00" id="leaveToTime" name="leaveToTime">
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leaveType">Leave Types</label>
                                            <select class="custom-select" id="leaveType" name="leaveType" required>
                                                <option selected disabled>Select Leave Types</option>
                                                @foreach($leaveTypes as $key => $leaveType)
                                                    <option value="{{ $key }}">{{ $leaveType }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leaveDays">Days Off</label>
                                            <input type="text" class="form-control required"  id="leaveDays" value="1 day" name="leaveDays" readonly>
                                            <input type="hidden" class="form-control"  id="leaveDaysNumber" value="1" name="leaveDaysNumber">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="leaveReason">Reason</label>
                                            <input type="text" class="form-control required"  id="leaveReason" name="leaveReason">
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
        
        document.getElementById("leaveFromDate").setAttribute("min", today);
        document.getElementById("leaveToDate").setAttribute("min", today);

        document.getElementById("leaveFromDate").setAttribute("value", today);
        document.getElementById("leaveToDate").setAttribute("value", today);

        $("#leaveFromDate").change(function(){
            var leaveFromDate = $('#leaveFromDate').val();
            document.getElementById("leaveToDate").value = leaveFromDate;
            document.getElementById("leaveToDate").min = leaveFromDate;
        });

        $("#leaveToDate").change(function(){
            var leaveFromDate = $('#leaveFromDate').val();
            var leaveToDate = $('#leaveToDate').val();

            const leaveFromDateObj = new Date(leaveFromDate);
            const leaveToDateObj = new Date(leaveToDate);

            const diffTime = Math.abs(leaveToDateObj.getTime() - leaveFromDateObj.getTime());
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24) + 1);

            document.getElementById("leaveDaysNumber").value = diffDays;

            if (diffDays == 1) {
                document.getElementById("leaveDays").value = diffDays + " day leave";
            }else{
                document.getElementById("leaveDays").value = diffDays + " days leave";
            }

        });

        // $("#leaveFromTime").change(function(){
        //     var leaveFromTime = $('#leaveFromTime').val();
        //     document.getElementById("leaveToTime").min = leaveFromTime;

        //     if ($('#leaveFromTime').val() > $('#leaveToTime').val()) {
        //         document.getElementById("leaveToTime").value = leaveFromTime;
        //     }
        // });

        const date1 = new Date('7/13/2010');
const date2 = new Date('12/15/2010');
const diffTime = Math.abs(date2.getTime() - date1.getTime());
const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 


    </script>
@endsection
