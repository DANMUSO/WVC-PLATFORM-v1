@extends('layouts.web')

@section('content')
<section class="ftco-section bg-light" >
	<div class="container-xl" style="margin-top:-20px">
    <div class="row justify-content-center">
	<div class="col-md-12 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000">
	
	<div class="interaction-section">
	<div class="cardinfo">
	<center><h4 class="mb-4"><b>Church Upcoming Programs</b></h4></center>
	
		</div>

	</div>
	</div>	

    @foreach($programs as $program)
    <div class="col-md-4 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000" style="margin-top:-70px;">
	
	<div class="interaction-section">
	<div class="cardinfo">
    <div class="card-headerprogram">
        {{ $program -> title}}
        </div>
        <div class="card-bodyprogram">
            <div class="detailsprogram" style="color:#000">
                <p><strong><b>Date:</b></strong>  {{ $program -> eventdate}}</p>
                <p><strong><b>Description:</b></strong>  {{ $program -> description}}</p>
                <p><strong><b>Venue:</b></strong>  {{ $program -> venue}}</p>
				<p><strong><b><a href=" {{ $program -> programdirection}}" target="_blank">Direction</a></b></strong></p>
            </div>
        </div>
		</div>

	</div>
    <br>
	</div>	
    @endforeach
 
    
	</div>

	</div>
	</section>

@endsection
