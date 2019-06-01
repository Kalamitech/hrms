@extends('layouts.master.admin')

@section('page-title')
    Program Listings
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Program Listings</h3>

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
                                    <th>Program ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Acion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 0;?>
                                @foreach($programs as $program)
                                <tr>
                                    <td>{{$program->id}}</td>
                                    <td>{{$program->name}}</td>
                                    <td>{{$program->description}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type    = "button" 
                                                class   = "btn btn-info btn-min-width program-modal" 
                                                style   = "padding: 0.4rem 1rem;"
                                                data-info   = '[
                                                    "{{$program->id}}",
                                                    "{{$program->name}}",
                                                    "{{$program->description}}"
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
                    {!! $programs->links() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="programInfoModal" tabindex="-1" role="dialog" aria-labelledby="programInfoDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="programInfoDetailsModalLabel">Program Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form" method="POST" action="/admin/program-listings">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" class="form-control"  id="programID" value="1" name="programID">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Program Name</label>
                                    <input type="text" class="form-control required"  id="name" name="name">
                                </div>

                                <div class="form-group">
                                        <label for="description">Program Description</label>
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter Department Description" name="description" required></textarea>
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
        
        $( ".program-modal" ).click(function(){
            
            var programData = $(this).data('info');

            //populate modal inputs
            document.getElementById("name").value = programData[1];
            document.getElementById("description").value = programData[2];
            document.getElementById("programID").value = programData[0];

            //show modal
            $('#programInfoModal').modal('show');
        });
    </script>
@endsection
