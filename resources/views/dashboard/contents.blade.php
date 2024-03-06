
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">


    <button class="btn btn-success">Video Contents</button>

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
                                <h5 class="modal-title" id="exampleModalLabel">Add Content</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form id="videodetails">
                            <input type="hidden" name="_token" required="required" value="{{ csrf_token() }}">
                                <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="formGroupExampleInput">Video URL</label>
                                <input type="text" class="form-control" id="videourl" name="videourl" placeholder="Video URL">
                                </div>
                                </div>
                                <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Video Title</label>
                                    <input type="text" class="form-control" id="videotitle" name="videotitle" placeholder="Video Title">
                                </div>
                                </div>
                                <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Video Description</label>
                                    <input type="text" class="form-control" id="videodesc" name="videodesc" placeholder="Video Description">
                                </div>
                                </div>
                                <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Venue</label>
                                    <input type="text" class="form-control" id="videovenue" name="videovenue" placeholder="Venue">
                                </div>
                                </div>
                                <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Language</label>
                                    <select  class="form-control" id="videolanguage" name="videolanguage">
                                    <option value="English">English</option>
                                    <option value="Kiswahili">Kiswahili</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Live</label>
                                    <select  class="form-control" id="videolive" name="videolive">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Preacher</label>
                                    <select  class="form-control" id="pastor_id" name="pastor_id">
                                    <option value="1">John</option>
                                    <option value="2">Peter</option>
                                    <option value="3">Mwangi</option>
                                    </select>
                                </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
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

@foreach($contents as $content)
<div class="col-md-4">
<div class="card">
    <div class="video-container">
        <!-- Replace 'your-video-url' with the actual video URL -->
        <x-embed width="" height="" class="img img-property" url="{{$content -> url}}" frameborder="0" allowfullscreen/>
	
    </div>
    <div class="card-content">
        <h4>{{$content -> title}}</h4>
        <p>Venue: {{$content -> location}}</p>
        <div class="metadata">
            <span class="icon">📅</span> Date of Update: January 1, 2024
        </div>
        <div class="metadata">
            <span class="icon">👀</span> No. of Viewers: 1000
        </div>
        <div class="metadata">
            <span class="icon">👍</span> Likes: 500
            <span class="icon">🔁</span> Shares: 100
        </div>
        <div class="action-buttons">
               <!-- Button trigger modal activatecontent -->
          @if($content -> status == 0)
          <a href="#" class="btn btn-success" onclick= "activatecontent({{$content -> id}})">Activate </a>
            @else
            <a href="#" class="btn btn-danger" onclick= "deactivatecontent({{$content -> id}})">Deactivate</a>
            
            @endif
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalupdate" onclick= "getcontentdata({{$content -> id}})">
                    <span class="glyphicon glyphicon-edit"></span>
                    </button>
                  
                    
        </div>
    </div>
  
   
</div>
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
