
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">


    <button class="btn btn-success">Audio Contents</button>

                        </div>
                        <div class="col-md-4 col-md-4">



                        </div>
                        <div class="col-md-4 col-md-4">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <span class="glyphicon glyphicon-add">Add</span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Audio Content</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <!-- Multi Columns Form -->
                            <form class="row g-3" id="programdetails">
                            <input type="hidden" name="_token" required="required" value="{{ csrf_token() }}">
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Program Venue</label>
                                <input type="text" class="form-control" id="programvenue" required="required" name="programvenue">
                              </div>
                              <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Program Tile</label>
                                <input type="text" class="form-control" id="programtitle" required="required" name="programtitle">
                              </div>
                              <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Description</label>
                                <input type="text" class="form-control" id="programdescription" required="required" name="programdescription">
                              </div>
                              <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Direction</label>
                                <input type="text" class="form-control" id="programlocation" required="required" name="programlocation">
                              </div>
                              <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Program Date</label>
                                <input type="date" class="form-control" id="programdate" required="required" name="programdate">
                              </div>
                          
                          
                              <div class="text-center">
                              <br>
                          <br>
                              

                                <button class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                            </div>
                            </div>
                        </div>
                        </div>


                        </div>
                        </div>  


          
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalupdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Video</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="datatable">

                        </div>
                        </div>
                        </div>
                    </div>
                    </div>


<br>
<div class="row">

@foreach($programs as $program)
<div class="col-md-4">
<div class="programcard">
        <div class="card-header">
            <h1>{{$program -> title}}</h1>
            <p>Venue: {{$program -> venue}}</p>
            <p>Date: {{$program -> eventdate}}</p>
        </div>
        <div class="card-body">
            

            <h2>Description</h2>
            <p>
            {{$program -> description}}
            </p>
        <a href="  {{$program -> programdirection}}" target="_blank">Direction</a>
        </div>

        <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-4">
        @if($program -> status == 0)
          <a href="#" class="btn btn-success" onclick= "activateprogram({{$program -> id}})">Activate</a>
            @else
            <a href="#" class="btn btn-danger" onclick= "deactivateprogram({{$program -> id}})">Deactivate</a>
            
            @endif
        </div>
        <div class="col-md-3">
        @if($content -> live == 'Yes')
      <div class="git-live-label"><img src="{{ asset('v1/images/live.gif')}}" class="orig-price" style="width:100%; height:80px"/> </div>
        @else
        @endif
         </div>
        <div class="col-md-3">
           
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalupdate" onclick= "getcontentdata()">
                    <span class="glyphicon glyphicon-edit"></span>
        </button>  
        </div>
        <div class="col-md-1">

        </div>

      </div>
      <br>
    </div>
<br>
</div>
@endforeach
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    
    function updatecontentdetails(){

var form_data = new FormData(document.getElementById("updateFormcontent"));

$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
$.ajax({
     type:'POST',
     url: "{{ route('updatecontent')}}",
     data:form_data,
     cache:false,
     contentType: false,
     processData: false,
     success: function(data){
      if(data.error)
      {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'warning',
        title: ''+data.error+'!'
      })
          

      }else {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Video updated successfully!'
      })
      $('.table_data').html(data);
      location.reload();
      $('#exampleModalCenter').modal('hide');
      $('.example-advanced-form')[0].reset();
          
     

      }
      
   
      
      }

  });

}

</script>
@endsection
