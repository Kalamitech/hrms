@extends('layouts.master.admin')

@section('page-title')
    Holiday Listings
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Holiday Listings</h3>

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
                                    <th>Holiday ID</th>
                                    <th>Occasion</th>
                                    <th>Date From</th>
                                    <th>Date To</th>
                                    <th>Acion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($holidays as $holiday)
                                <tr>
                                    <td>{{$holiday->id}}</td>
                                    <td>{{$holiday->occasion}}</td>
                                    <td>{{$holiday->date_from}}</td>
                                    <td>{{$holiday->date_to}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type    = "button" 
                                                class   = "btn btn-info btn-min-width holiday-modal" 
                                                style   = "padding: 0.4rem 1rem;"
                                                data-info   = '[
                                                    "{{$holiday->id}}",
                                                    "{{$holiday->occasion}}",
                                                    "{{$holiday->date_from}}",
                                                    "{{$holiday->date_to}}"
                                                ]' >Edit / Delete
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
                    {!! $holidays->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="holidayInfoModal" tabindex="-1" role="dialog" aria-labelledby="holidayInfoDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="holidayInfoDetailsModalLabel">Holiday Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" method="POST" action="/admin/holiday-listings">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" class="form-control"  id="holidayID" value="1" name="holidayID">
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
        
        $( ".holiday-modal" ).click(function(){
            
            var holidayData = $(this).data('info');

            //populate modal inputs
            document.getElementById("name").value = holidayData[1];
            document.getElementById("fromDate").value = holidayData[2];
            document.getElementById("toDate").value = holidayData[3];
            document.getElementById("holidayID").value = holidayData[0];

            //show modal
            $('#holidayInfoModal').modal('show');
        });
    </script>
@endsection
