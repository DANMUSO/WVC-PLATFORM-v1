
@extends('layouts.app')

@section('content')
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="breadcome-list">
<div class="row cardheader">

<div class="col-md-4 col-md-4">


    <button class="btn btn-success">Testimonies</button>

</div>
<div class="col-md-4 col-md-4">



</div>
<div class="col-md-4 col-md-4">



</div>
</div>  
<br>
<div class="row">
<div class="col-md-12 col-md-12 col-sm-12 col-xs-12 tabledata">

<br>
@foreach($testimonies as $testimony)
<div class="col-md-4">
            <div class="testimony-card">
                <i class="fas fa-comment chat-icon"></i>
                <div class="testimony-content">
                  <br>
                    <p class="testimony-text">"{{$testimony -> message}}"</p>
                </div>
                <div class="testimony-author">Name: {{$testimony -> name}}</div>
                <div class="testimony-author"><i class="fas fa-phone"></i>&nbsp&nbsp&nbsp {{$testimony -> phone}}</div>
                <div class="testimony-author"><i class="fas fa-envelope"></i>&nbsp&nbsp&nbsp {{$testimony -> email}}</div>
                <div class="time-posted"><i class="fas fa-calendar"></i>&nbsp&nbsp&nbsp {{ \Carbon\Carbon::parse($testimony -> created_at)->format('F j, Y g:i A') }}</div>
                <div class="action-buttons">
                    <button class="approve-btn">Approve</button>
                    <button class="reject-btn">Reject</button>
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
