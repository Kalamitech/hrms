@extends('layouts.master.admin')

@section('page-title')
    Bank Details
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Employee Bank Details</h3>

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
                                    <th>Bank Name</th>
                                    <th>Account Number</th>
                                    <th>TIN</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 0;?>
                                @foreach($employees as $employee)
                                <tr>
                                    <td>{{$employee->code}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->bank_name}}</td>
                                    <td>{{$employee->account_number}}</td>
                                    <td>{{$employee->tin}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type    = "button" 
                                                    class   = "btn btn-info btn-min-width bank-modal" 
                                                    style   = "padding: 0.4rem 1rem;"
                                                    {{-- data-toggle = "modal" 
                                                    data-target = "#bankInfoModal" --}}
                                                    data-info   = '[
                                                        "{{$employee->code}}",
                                                        "{{$employee->name}}",
                                                        "{{$employee->bank_name}}",
                                                        "{{$employee->account_number}}",
                                                        "{{$employee->tin}}",
                                                        "{{$employee->id}}"
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
                        {!! $employees->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bankInfoModal" tabindex="-1" role="dialog" aria-labelledby="bankInfoDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="bankInfoDetailsModalLabel">Edit Bank Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form" method="POST" action="/admin/employee-bank-details">
                            @csrf
                            <div class="form-group">
                                <label for="employeeCode">Employee Code</label>
                                <input type="text" class="form-control required" id="employeeCode" name="employeeCode" readonly> 
                            </div>

                            <div class="form-group">
                                <label for="employeeName">Employee Name</label>
                                <input type="text" class="form-control required" id="employeeName" name="employeeName" readonly> 
                            </div>

                            <div class="form-group">
                                <label for="employeeBankName">Bank Name</label>
                                <input type="text" class="form-control required" id="employeeBankName" name="employeeBankName"> 
                            </div>

                            <div class="form-group">
                                <label for="employeeAccountNumber">Account Number</label>
                                <input type="text" class="form-control required" id="employeeAccountNumber" name="employeeAccountNumber"> 
                            </div>

                            <div class="form-group">
                                <label for="employeeTIN">Tax Identification Number</label>
                                <input type="text" class="form-control required" id="employeeTIN" name="employeeTIN"> 
                            </div>

                            <input type="hidden" class="form-control required" id="employeeID" name="employeeID">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-success">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
        <script type="text/javascript">
            
            $( ".bank-modal" ).click(function(){
               
                var employeeBankData = $(this).data('info');

                //populate modal inputs
                document.getElementById("bankInfoDetailsModalLabel").innerHTML = "Edit Bank Details - ".concat(employeeBankData[1]);
                document.getElementById("employeeCode").value = employeeBankData[0];
                document.getElementById("employeeName").value = employeeBankData[1];
                document.getElementById("employeeBankName").value = employeeBankData[2];
                document.getElementById("employeeAccountNumber").value = employeeBankData[3];
                document.getElementById("employeeTIN").value = employeeBankData[4];
                document.getElementById("employeeID").value = employeeBankData[5];

                //show modal
                $('#bankInfoModal').modal('show');

            // // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            // var modal = $(this);
            // // modal.find('.modal-title').text('Edit Bank Details ' + recipient)
            // // modal.find('.modal-body input').val(recipient)
            });
        </script>
@endsection
