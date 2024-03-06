
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">


    <button class="btn btn-success">Prayers</button>

</div>
<div class="col-md-4 col-md-4">



</div>
<div class="col-md-4 col-md-4">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaladd">
  <span class="glyphicon glyphicon-add">Add</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Prayer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</div>
</div>  
<br>
<div class="row">
<div class="col-md-12 col-md-12 col-sm-12 col-xs-12 tabledata">

        <br>
        @foreach($prayers as $prayer)
        <div class="col-md-4">
            <div class="testimony-card">
                <i class="fas fa-praying-hands requests-icon"></i>
                <div class="testimony-content">
                  <br>
                    <p class="testimony-text">"{{$prayer -> message}}"</p>
                </div>
                <div class="testimony-author"><i class="fas fa-phone"></i></span>&nbsp&nbsp&nbsp {{$prayer -> phone}}</div>
                
                <div class="time-posted"><i class="fas fa-envelope"></i></span>&nbsp&nbsp&nbsp {{$prayer -> email}}</div>
                <div class="time-posted"><i class="fas fa-calendar"></i></span>&nbsp&nbsp&nbsp {{ \Carbon\Carbon::parse($prayer -> created_at)->format('F j, Y g:i A') }}</div>
                <div class="action-buttons">
                    <button class="approve-btn"><i class="fas fa-phone"></i> Call</button>
                    <button class="reject-btn"><i class="fas fa-envelope"></i> Email</button>
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
</div>
@endsection
