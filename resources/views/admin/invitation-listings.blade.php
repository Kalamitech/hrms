@extends('layouts.master.admin')

@section('page-title')
    Training Invites
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Training Invites</h3>

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
                                    <th>Employee</th>
                                    <th>Training Program</th>
                                    <th>Description</th>
                                    <th>Date From</th>
                                    <th>Date To</th>
                                    <th>Acion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($invites as $invite)
                                <tr>
                                    <td>{{$i+=1}}</td>
                                    <td>{{$invite->employee->name}}</td>
                                    <td>{{$invite->program->name}}</td>
                                    <td>{{$invite->description}}</td>
                                    <td>{{$invite->date_from}}</td>
                                    <td>{{$invite->date_to}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type    = "button" 
                                                class   = "btn btn-info btn-min-width invite-modal" 
                                                style   = "padding: 0.4rem 1rem;"
                                                data-info   = '[
                                                    "{{$invite->employee->name}}",
                                                    "{{$invite->program->name}}",
                                                    "{{$invite->date_from}}",
                                                    "{{$invite->date_to}}",
                                                    "{{$invite->description}}",
                                                    "{{$invite->id}}"
                                                ]' >Edit 
                                            </button>
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
                    {!! $invites->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="inviteInfoModal" tabindex="-1" role="dialog" aria-labelledby="inviteInfoDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="inviteInfoDetailsModalLabel">Invite Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" method="POST" action="/admin/invitation-listings">
                <div class="modal-body">
                    
                        
                    @csrf
                    <input type="hidden" class="form-control"  id="inviteID" value="1" name="inviteID">
                    <div class="form-body">

                            <div class="form-group">
                                <label for="name">Invitee</label>
                                <input type="text" id="name" class="form-control" placeholder="" name="name" readonly>
                            </div>

                            <div class="form-group">
                                <label for="program">Program</label>
                                <input type="text" id="program" class="form-control" placeholder="" name="program" readonly>
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
                </div>
                <div class="modal-footer">
                    <button type="submit" name="update" value='update' class="btn btn-outline-success">Save Changes</button>
                    <button type="submit" name="delete" value='delete' class="btn btn-outline-danger">Delete Invite</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    
    <script type="text/javascript">
        
        $( ".invite-modal" ).click(function(){
            
            var inviteData = $(this).data('info');

            //populate modal inputs
            document.getElementById("name").value = inviteData[0];
            document.getElementById("program").value = inviteData[1];
            document.getElementById("description").value = inviteData[4];
            document.getElementById("fromDate").value = inviteData[2];
            document.getElementById("toDate").value = inviteData[3];
            document.getElementById("inviteID").value = inviteData[5];

            //show modal
            $('#inviteInfoModal').modal('show');

        // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        // var modal = $(this);
        // // modal.find('.modal-title').text('Edit Bank Details ' + recipient)
        // // modal.find('.modal-body input').val(recipient)
        });

        $("#fromDate").change(function(){
            var fromDate = $('#fromDate').val();
            document.getElementById("toDate").value = fromDate;
            document.getElementById("toDate").min = fromDate;
        });
    </script>
@endsection
