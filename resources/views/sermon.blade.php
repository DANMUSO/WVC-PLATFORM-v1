@extends('layouts.web')

@section('content')
<section class="ftco-section bg-light" >
	<div class="container-xl" style="margin-top:-10px">
	<div class="row justify-content-center">
	<div class="col-md-12 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000">

	<hr style="border-top: 5px dashed red;  margin-top:-20px">
	</div>
	</div>
	<div class="row" style="margin-top:-60px">
	<div class="col-md-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
	<div class="property-wrap">
	
    <x-embed width="100%" height="500px" url="{{ $content[0]->url}}" frameborder="0" allowfullscreen/>

        <div class="text">
		<div class="interaction-section">
		<div class="cardinfo">
		
			<div class="row">
				<div class="col-md-6">
				<h5>{{ $content[0]->title}}</h5>
		<br>
				<div class="user-info">
					<img src="{{ asset('v1/images/ApostleMukadi.JPG')}}" alt="User Photo">
					<div class="text-info">
						<h2>Apostle Mukadi</h2>
						<hr>
						
					</div>
				</div>
				</div>
				<div class="col-md-5">
					<br>
				<a href=""> 
				<button class="like-btn">
				<svg fill="#000000" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
<g>
	<path d="M498.323,297.032c0-7.992-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
		c0-27.037-21.996-49.032-49.032-49.032H330.206c11.434-29.24,17.665-64.728,17.665-101.419c0-23.266-18.928-42.194-42.194-42.194
		s-42.193,18.928-42.193,42.194c0,83.161-58.012,145.389-144.355,154.844c-0.592,0.065-1.159,0.197-1.7,0.38
		C111.752,235.129,104.235,232,96,232H32c-17.645,0-32,14.355-32,32v152c0,17.645,14.355,32,32,32h64
		c9.763,0,18.513-4.4,24.388-11.315c20.473,2.987,33.744,9.534,46.568,15.882c16.484,8.158,33.53,16.595,63.496,16.595h191.484
		c27.037,0,49.032-21.996,49.032-49.032c0-7.991-1.901-15.683-5.553-22.635c12.034-9.18,19.23-23.438,19.23-38.914
		c0-7.991-1.901-15.683-5.553-22.635C491.126,326.766,498.323,312.507,498.323,297.032z M465.561,325.727H452c-4.418,0-8,3.582-8,8
		s3.582,8,8,8h11.958c3.061,5.1,4.687,10.847,4.687,16.854c0,12.106-6.56,23.096-17.163,28.919h-14.548c-4.418,0-8,3.582-8,8
		s3.582,8,8,8h13.481c2.973,5.044,4.553,10.71,4.553,16.629c0,18.214-14.818,33.032-33.032,33.032H230.452
		c-26.223,0-40.207-6.921-56.398-14.935c-12.358-6.117-26.235-12.961-46.56-16.594c0.326-1.83,0.506-3.71,0.506-5.632V295
		c0-4.418-3.582-8-8-8s-8,3.582-8,8v121c0,8.822-7.178,16-16,16H32c-8.822,0-16-7.178-16-16V264c0-8.822,7.178-16,16-16h64
		c8.822,0,16,7.178,16,16c0,4.418,3.582,8,8,8s8-3.582,8-8c0-3.105-0.453-6.105-1.282-8.947
		c44.778-6.106,82.817-25.325,110.284-55.813c27.395-30.408,42.481-70.967,42.481-114.208c0-14.443,11.75-26.194,26.193-26.194
		c14.443,0,26.194,11.75,26.194,26.194c0,39.305-7.464,76.964-21.018,106.04c-1.867,4.004-0.134,8.764,3.871,10.631
		c1.304,0.608,2.687,0.828,4.025,0.719c0.201,0.015,0.401,0.031,0.605,0.031h143.613c18.214,0,33.032,14.818,33.032,33.032
		c0,11.798-6.228,22.539-16.359,28.469h-14.975c-4.418,0-8,3.582-8,8s3.582,8,8,8h12.835c3.149,5.155,4.822,10.984,4.822,17.079
		C482.323,308.985,475.927,319.848,465.561,325.727z"/>
</g>
</svg></button>
				</a> &nbsp &nbsp &nbsp<a href=""> 
				<button class="share-btn">
				<svg fill="#000000" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 458.624 458.624" xml:space="preserve">
<g>
	<g>
		<path d="M339.588,314.529c-14.215,0-27.456,4.133-38.621,11.239l-112.682-78.67c1.809-6.315,2.798-12.976,2.798-19.871
			c0-6.896-0.989-13.557-2.798-19.871l109.64-76.547c11.764,8.356,26.133,13.286,41.662,13.286c39.79,0,72.047-32.257,72.047-72.047
			C411.634,32.258,379.378,0,339.588,0c-39.79,0-72.047,32.257-72.047,72.047c0,5.255,0.578,10.373,1.646,15.308l-112.424,78.491
			c-10.974-6.759-23.892-10.666-37.727-10.666c-39.79,0-72.047,32.257-72.047,72.047s32.256,72.047,72.047,72.047
			c13.834,0,26.753-3.907,37.727-10.666l113.292,79.097c-1.629,6.017-2.514,12.34-2.514,18.872c0,39.79,32.257,72.047,72.047,72.047
			c39.79,0,72.047-32.257,72.047-72.047C411.635,346.787,379.378,314.529,339.588,314.529z"/>
	</g>
</g>
</svg>
				</button>
				</a>&nbsp &nbsp &nbsp<a href=""><button class="subscribe-btn">Subscribe</button> </a>
				</div>
			</div>
      
		
		
    </div>

  </div>
	</div>
	</div>
	</div>


	
	<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
    <div class="col-md-12" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
	<br>
  <div class="cardinfo">
    <div class="card-content">
      
	  <div class="card-headerprogram">
	  <h5>Giving</h5>
    </div>
	  <hr>
      <div class="button-container">
       
	  <a href="{{ url('give')}}" target="_blank">
		<button><img src="{{ asset('v2/img/M-PESA.png')}}" style="width:100;height:50px;" alt="M-PESA"></button>
		
        <button><img src="{{ asset('v2/img/paypal.png')}}" style="width:100%;height:40px;" alt="PAYPAL"></button>
    
		<button><img src="{{ asset('v2/img/credit.png')}}" style="width:100%;height:40px;" alt="CARD"></button>
    </a>
	</div>
    </div>
  </div>
  <br>
  <div class="cardinfo">
    <div class="card-content">
	<div class="card-headerprogram">
	<h5>Live Testimonies</h5>
    </div>
      
	  <div class="scrolling-div">
        <div class="content">
		<div class="item">
		<br><br>	<br><br>
		<div class="testimony-wrap">
		<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
		<div class="text">
		
		<p class="mb-4 msg">This parable tells the story of a son who leaves his father's house, squanders his inheritance, and returns humbly seeking forgiveness. It illustrates the depth of God's love and mercy, portraying the joy in heaven when a lost soul repents and returns to God.</p>
		<div class="d-flex align-items-center">
		<div class="mb-4 tx">
		<p class="name">Beatrice Achieng</p>
		</div>
		</div>
		</div>
		</div>
		</div>
		<hr>
		<br>
		<div class="item">
		<div class="testimony-wrap">
		<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
		<div class="text">
		<p class="mb-4 msg">Jesus raises Lazarus, who had been dead for four days, back to life. This miraculous event demonstrates Jesus' power over death, foreshadowing His own resurrection and offering hope for eternal life to those who believe.</p>
		<div class="d-flex align-items-center">
		<div class="pl-3 tx">
		<p class="name">Beatrice Achieng</p>
		</div>
		</div>
		</div>
		</div>
		</div>
		<hr>
		<br>
		<div class="item">
		<div class="testimony-wrap">
		<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
		<div class="text">
		<p class="mb-4 msg">God transformed me after listening to Apostle, during Crossover service.</p>
		<div class="d-flex align-items-center">
		<div class="pl-3 tx">
		<p class="name">Patrick Mutua</p>
		</div>
		</div>
		</div>
		</div>
		</div>
        </div>
    </div>
    </div>
  </div>
<br>
  <div class="cardinfo">
    <div class="card-content">

      <h5>Send your Testimony or Prayer Request</h5>
	  <hr>
	  <div class="card-headerprogram">
	  <button class="collapsible" onclick="toggleContent()">Click to submit</button>
      </div>
	  
		<div class="contentc">
		
		<form method="POST" action="{{ route('visitordetails') }}">
		<input type="hidden" name="_token" required="required" value="{{ csrf_token() }}">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required class="form-control">
		<label for="phone_no">Phone Number:</label>
        <input type="text" id="phone_no" name="phone_no" required class="form-control">
		<label for="phone_no">Email:</label>
        <input type="text" id="email" name="email" required class="form-control">
        <label for="email">Request Type:</label>
		<select id="requesttyp" name="requesttyp" required class="form-control">
			<option value="Prayers">Prayers</option>
			<option value="Testimony">Testimony</option>
		</select>
       
		<label for="email">Prayer/Testimony:</label>
        <textarea id="message" name="message" rows="6" required  class="form-control"></textarea>
        <br>   
        <button class="btn btn-primary">Submit</button>
    </form>

</div>

<script>
    function toggleContent() {
        var content = document.querySelector('.contentc');
        content.style.display === 'none' ? content.style.display = 'block' : content.style.display = 'none';
    }
</script>
        </div>
    </div>
  </div>
			</div>

		<div class="12">
		<h4 class="mb-4"><b><u>Reccommedations</u></b></h4>
        <hr style="border-top: 5px dashed red;  margin-top:-20px">
		</div>	

		@foreach($contents as $content)
			<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
				
			<div class="property-wrap">
			
			<div class="git-live-label"><img src="{{ asset('v1/images/live.gif')}}" class="orig-price" style="width:100%; height:80px"/> </div>
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
	</div>
	</section>

@endsection
