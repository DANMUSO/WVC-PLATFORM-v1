@extends('layouts.web')

@section('content')
<section class="ftco-section bg-light" >
	<div class="container-xl" style="margin-top:-20px">
    <div class="row justify-content-center">
	<div class="col-md-12 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000">
	
	<div class="interaction-section">
	<div class="cardinfo">
	<center><h4 class="mb-4"><b>Testimonies</b></h4></center>
	
		</div>

	</div>
	</div>
    @foreach($audio as $audio)	



   
    <div class="col-md-4 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000" style="margin-top:-70px;">
	
	<div class="interaction-section">
	<div class="cardinfo">
    <div class="card-headerprogram">
        Title: {{ $audio -> title }} | Lang: {{ $audio -> language }}
        </div>
        <div class="audio-container">
                <!-- Image background -->
                <img src="{{ asset('v2/img/audio.png')}}" alt="Background Image" class="background-image">

                <!-- Audio player -->
                <audio controls>
                    <source src="{{ asset('audio/'.$audio -> audio)}}" type="audio/mp3">
                    Your browser does not support the audio element.
                </audio>

                
            </div>
            <a href="{{ asset('audio/'.$audio->audio) }}" download="{{ $audio->audio }}">
                    Download
                </a>
		</div>

	</div>
	</div>	
   @endforeach
 	
	</div>

	</div>
	</section>

@endsection
