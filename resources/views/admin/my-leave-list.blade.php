@extends('layouts.master.admin')

@section('page-title')
    My Leaves
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">My Leave List</h3>

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
                                    <th>Leave Type</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Days</th>
                                    <th>Remarks</th>
                                    <th>Status</th>
                                    <th>Acion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($leaves as $leave)
                                <tr>
                                    <td>{{$i+=1}}</td>
                                    <td>{{$leave->leaveType->leave_type}}</td>
                                    <td>{{$leave->date_from}}</td>
                                    <td>{{$leave->date_to}}</td>
                                    <td>{{$leave->days}}</td>
                                    <td>{{$leave->remarks}}</td>
                                    @if($leave->status == 1)
                                        <td><div class="badge badge-pill badge-success">Approved</div></td>
                                        <td>
                                            None.
                                        </td>
                                    @elseif($leave->status == 3)
                                        <td><div class="badge badge-pill badge-danger">Rejected</div></td>
                                        <td>
                                            None.
                                        </td>
                                    @elseif($leave->status == 0)
                                        <td><div class="badge badge-pill badge-warning">Pending</div></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type    = "button" 
                                                    class   = "btn btn-info btn-min-width leave-modal" 
                                                    style   = "padding: 0.4rem 1rem;"
                                                    data-info   = '[
                                                        "{{$leave->employee->name}}",
                                                        "{{$leave->leaveType->id}}",
                                                        "{{$leave->date_from}}",
                                                        "{{$leave->date_to}}",
                                                        "{{$leave->days}}",
                                                        "{{$leave->id}}",
                                                        "{{$leave->remarks}}",
                                                        "{{$leave->reason}}"
                                                    ]' >Edit 
                                                </button>
                                            </div>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br><br>
                </div>
                <div style="text-align:center; margin: 0 auto;">
                    {!! $leaves->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="leaveInfoModal" tabindex="-1" role="dialog" aria-labelledby="leaveInfoDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="leaveInfoDetailsModalLabel">Leave Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" method="POST" action="/admin/my-leave-list">
                <div class="modal-body">
                    
                        
                    @csrf
                    <input type="hidden" class="form-control"  id="leaveID" value="1" name="leaveID">
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
                </div>
                <div class="modal-footer">
                    <button type="submit" name="update" value='update' class="btn btn-outline-success">Save Changes</button>
                    <button type="submit" name="delete" value='delete' class="btn btn-outline-danger">Delete</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    
    <script type="text/javascript">
        
        $( ".leave-modal" ).click(function(){
            
            var leaveData = $(this).data('info');

            //populate modal inputs
            document.getElementById("leaveFromDate").value = leaveData[2];
            document.getElementById("leaveToDate").value = leaveData[3];
            document.getElementById("leaveType").value = leaveData[1];
            document.getElementById("leaveDays").value = leaveData[4];
            document.getElementById("leaveReason").value = leaveData[7];
            document.getElementById("leaveID").value = leaveData[5];

            //show modal
            $('#leaveInfoModal').modal('show');

        // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        // var modal = $(this);
        // // modal.find('.modal-title').text('Edit Bank Details ' + recipient)
        // // modal.find('.modal-body input').val(recipient)
        });
    </script>
@endsection
