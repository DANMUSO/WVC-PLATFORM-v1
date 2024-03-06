@extends('layouts.web')

@section('content')
<section class="slider-hero">
<div class="overlay"></div>
<div class="hero-slider">
<div class="item">
<div class="work">
<div class="img d-flex align-items-center js-fullheight" style="background-image: url({{ asset('v2/img/s-1.jpg')}});">
<div class="container-xl">

	<center>
		<h4 style="color:#fff">“We Preach Christ Crucified, The Power And Wisdom of God”
		<br>
		1Cor 1 :23-24</h4>
	
	</center>
</div>
</div>
</div>
</div>
<div class="item">
<div class="work">
<div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image: url({{ asset('v2/img/s-2.jpg')}});">
<div class="container-xl">

	<center><h4 style="color:#fff">“We Preach Christ Crucified, The Power And Wisdom of God”
		<br>
		1Cor 1 :23-24</h4></center>
</div>
</div>
</div>
</div>
<div class="item">
<div class="work">
<div class="img d-flex align-items-center justify-content-center js-fullheight" style="background-image: url({{ asset('v2/img/s-3.jpg')}});">
<div class="container-xl">

	<center><h4 style="color:#fff">“We Preach Christ Crucified, The Power And Wisdom of God”
		<br>
		1Cor 1 :23-24</h4></center>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
<div class="container">
<div class="row">
	
<div class="col-md-12">
<div class="ftco-search d-flex justify-content-center">

<div class="row">
	
<div class="col-md-12 nav-link-wrap d-flex justify-content-center">
<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0" role="tab" aria-controls="v-pills-0" aria-selected="true">Online</a>
<a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="false">TV</a>
<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Radio</a>

</div>
</div>
<div class="col-md-12 tab-wrap">
<div class="tab-content" id="v-pills-tabContent">
<div class="tab-pane fade show active" id="v-pills-0" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">

<div class="row g-0">

	<center><h4>Online Programs</h4></center>
	<div class="events-container">
		@foreach($programs as $program)
		<a href="{{ url('programs')}}">
    <div class="event-card" style="--bg-color: #3498db;">
      <div class="event-front">
        <div class="event-date">{{ \Carbon\Carbon::parse($program -> eventdate)->format('M d') }}</div>
		<div class="event-title">{{$program -> title}}</div>
		<div class="event-title">{{$program -> venue}}</div>
      </div>
      <div class="event-back" style="--bg-color: #2ecc71;">
        <div class="event-title">{{$program -> title}}</div>
		<div class="event-title">{{$program -> venue}}</div>
        <div class="event-date">{{ \Carbon\Carbon::parse($program -> eventdate)->format('M d') }}</div>
      </div>
    </div>
	</a>
	@endforeach
	
  </div>

</div>
</div>
<div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-performance-tab">
	<form action="#" class="search-property-1">
	<div class="row g-0">
		<center><h4>TV Programs</h4></center>
	
		<div class="events-container">
    <div class="event-card" style="--bg-color: #3498db;">
      <div class="event-front">
        <div class="event-date">Jan 15</div>
        <div class="event-title">Event Title One</div>
      </div>
      <div class="event-back" style="--bg-color: #2ecc71;">
        <div class="event-title">Event Title One</div>
        <div class="event-date">Jan 15</div>
      </div>
    </div>
    
    <div class="event-card" style="--bg-color: #e74c3c;">
      <div class="event-front">
        <div class="event-date">Jan 20</div>
        <div class="event-title">Event Title Two</div>
      </div>
      <div class="event-back" style="--bg-color: #f39c12;">
        <div class="event-title">Event Title Two</div>
        <div class="event-date">Jan 20</div>
      </div>
    </div>
    
    <div class="event-card" style="--bg-color: #2ecc71;">
      <div class="event-front">
        <div class="event-date">Jan 25</div>
        <div class="event-title">Event Title Three</div>
      </div>
      <div class="event-back" style="--bg-color: #3498db;">
        <div class="event-title">Event Title Three</div>
        <div class="event-date">Jan 25</div>
      </div>
    </div>
    
    <div class="event-card" style="--bg-color: #f39c12;">
      <div class="event-front">
        <div class="event-date">Jan 30</div>
        <div class="event-title">Event Title Four</div>
      </div>
      <div class="event-back" style="--bg-color: #e74c3c;">
        <div class="event-title">Event Title Four</div>
        <div class="event-date">Jan 30</div>
      </div>
    </div>
  </div>
	</div>
	</form>
	</div>
<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">

<form action="#" class="search-property-1">
<div class="row g-0">

	<center><h4>Radio Programs</h4></center>

	<div class="events-container">
		<a href="#">
    <div class="event-card" style="--bg-color: #3498db;">
      <div class="event-front">
        <div class="event-date">Jan 15</div>
        <div class="event-title">Event Title One</div>
      </div>
      <div class="event-back" style="--bg-color: #2ecc71;">
        <div class="event-title">Event Title One</div>
        <div class="event-date">Jan 15</div>
      </div>
    </div>
    </a>
    <div class="event-card" style="--bg-color: #e74c3c;">
      <div class="event-front">
        <div class="event-date">Jan 20</div>
        <div class="event-title">Event Title Two</div>
      </div>
      <div class="event-back" style="--bg-color: #f39c12;">
        <div class="event-title">Event Title Two</div>
        <div class="event-date">Jan 20</div>
      </div>
    </div>
    
    <div class="event-card" style="--bg-color: #2ecc71;">
      <div class="event-front">
        <div class="event-date">Jan 25</div>
        <div class="event-title">Event Title Three</div>
      </div>
      <div class="event-back" style="--bg-color: #3498db;">
        <div class="event-title">Event Title Three</div>
        <div class="event-date">Jan 25</div>
      </div>
    </div>
    
    <div class="event-card" style="--bg-color: #f39c12;">
      <div class="event-front">
        <div class="event-date">Jan 30</div>
        <div class="event-title">Event Title Four</div>
      </div>
      <div class="event-back" style="--bg-color: #e74c3c;">
        <div class="event-title">Event Title Four</div>
        <div class="event-date">Jan 30</div>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="ftco-section bg-light" >
	<div class="container-xl" style="margin-top:-100px">
	<div class="row justify-content-center">
	<div class="col-md-12 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000">
	<h4 class="mb-4"><b><u>Current Sermons</u></b></h4>
	<hr style="border-top: 5px dashed red;  margin-top:-20px">
	</div>
	</div>
	<div class="row" style="margin-top:-60px">
	
	@foreach($contents as $content)
	<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
		
	<div class="property-wrap">
	
		@if($content ->live == 'Yes')
		<div class="git-live-label"><img src="{{ asset('v1/images/live.gif')}}" class="orig-price" style="width:100%; height:80px"/> </div>
		@else
		

		@endif



	<a href="{{ url('sermons/'. $content -> id)}}" class="img img-property">
	<x-embed width="100%" height="800px" class="img img-property" url="{{ $content -> url}}" frameborder="0" allowfullscreen/>
	
	<p class="price"><span class="orig-price">{{ $content -> title}}</span></p>
    </a>
	<div class="text">
	<div class="list-team d-flex align-items-center mb-4">
	
	<div class="d-flex align-items-center">
	<div class="img" style="background-image: url({{ asset('v1/images/ApostleMukadi.JPG')}});"></div>
	</div>
	<h3 class="ml-2">Apostle Mukadi</h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<span class="fa fa-star fa-xs" style="color: orange;"></span>
	<span class="fa fa-star" style="color: orange;"></span>
	<span class="fa fa-star"  style="color: orange;"></span>
	<span class="fa fa-star" style="color: orange;"></span>
	<span class="fa fa-star" style="color: orange;"></span>
	</div>
	<h3><a href="{{ url('sermons/'.$content -> id)}}">{{ $content -> language}}</a></h3>
	<span class="location"><i class="ion-ios-pin"></i> <b>{{ $content -> location}}</b> <span >&nbsp&nbsp&nbsp<svg class="svg-icon" style="width: 1em; color:red; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M511.6 224c-160.8 0-287.6 101.2-439.2 266.6-11 12.2-11.2 30.4-0.2 42.6C202 676.6 316.4 800 511.6 800c192.8 0 337.4-155.4 440.2-268 10.6-11.6 11.2-29.2 1-41.4C848 363.6 703 224 511.6 224z m8.8 467.8c-106 4.8-193.2-82.4-188.2-188.2 4.2-92.4 79-167.2 171.4-171.4 106-4.8 193.2 82.4 188.2 188.2-4.2 92.4-79 167.2-171.4 171.4z"  /><path d="M512 418c0-12 2.2-23.4 6.2-33.8-2 0-4-0.2-6.2-0.2-73.8 0-133.2 62.8-127.6 137.8 4.8 62.6 55.2 113 117.8 117.8 75 5.6 137.8-53.8 137.8-127.6 0-2.6-0.2-5.2-0.2-7.8-11.2 5-23.4 7.8-36.4 7.8-50.4 0-91.4-42.2-91.4-94z"  /></svg>  <b>1.1k</b></span></span>
	
	</div>
	</div>
	</div>
    @endforeach

	</div>
	</div>
	</section>



<section class="ftco-section testimony-section bg-light">
<div class="container-xl" style="margin-top:-230px">
<div class="row justify-content-center pb-4">
<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
<h2 class="mb-3">Testimonies</h2>
</div>
</div>

<div class="row">
<div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
<div class="carousel-testimony">
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img"></div>
<div class="pl-3 tx">
<p class="name">Mercy Jebiwott</p>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" ></div>
<div class="pl-3 tx">
<p class="name">Olive Mwangangi</p>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img"></div>
<div class="pl-3 tx">
<p class="name">John Kitwara</p>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap">
<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
<div class="text">
<p class="mb-4 msg">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" ></div>
<div class="pl-3 tx">
<p class="name">Dickson Kipterege</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
