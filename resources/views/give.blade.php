@extends('layouts.web')

@section('content')
<section class="ftco-section bg-light" >
	<div class="container-xl" style="margin-top:-20px">
	<div class="row justify-content-center">
	<div class="col-md-12 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000">
	
	<div class="interaction-section">
	<div class="cardinfo">
	<center><h4 class="mb-4"><b>Give</b></h4></center>
	
		</div>

	</div>
	</div>	
    <div class="col-md-4 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000" style="margin-top:-70px;">
	
	<div class="interaction-section">
	<div class="cardinfo">
    <div class="card-headerprogram">
    <img src="{{ asset('v2/img/M-PESA.png')}}" style="width:100;height:50px;" alt="M-PESA"> M-PESA
        </div>
        <div class="card-bodyprogram">
            <div class="detailsprogram" style="color:#000">
            <form>
            @csrf
					<label for="name">Amount:</label>
					<input type="number" id="amount" name="amount" required class="form-control">
					
					<br>   
					<button type="submit" class="subscribe-btn">Submit</button>
			</form>
            <p><b>You'll get a notification on your mobile device prompting you to verify the giving.</b></p>
            </div>
        </div>
		</div>

	</div>
	</div>	
    <div class="col-md-4 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000" style="margin-top:-70px;">
	
	<div class="interaction-section">
	<div class="cardinfo">
    <div class="card-headerprogram">
    <img src="{{ asset('v2/img/paypal.png')}}" style="width:30%;height:40px;" alt="PAYPAL"> PayPal
        </div>
        <div class="card-bodyprogram">
            <div class="detailsprogram" style="color:#000">

            <a href="https://www.paypal.com/myaccount/transfer/homepage" target="_blank"><b>Proceed to your Paypal Account</b></a>
           <br>
           <br>
            <p><b>Our PayPal ID:</b>  info@wvc-church.org</p>
        </div>
        </div>
		</div>

	</div>
	</div>	
    <div class="col-md-4 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000" style="margin-top:-70px;">
	
	<div class="interaction-section">
	<div class="cardinfo">
    <div class="card-headerprogram">
    <img src="{{ asset('v2/img/credit.png')}}" style="width:20%;height:40px;" alt="PAYPAL">Credit/Debit Card
        </div>
        <div class="card-bodyprogram">
            <div class="detailsprogram" style="color:#000">
            <form>
            @csrf
					<label for="name">Name On Card:</label>
					<input type="text" id="amount" name="amount" required class="form-control">
					
                    <label for="name">Card Number:</label>
					<input type="text" id="amount" name="amount" required class="form-control">
                    <div class="row">
                        <div class="col-md-6">
                        <label for="name">Date:</label>
					    <input type="date" id="paydate" name="paydate" required class="form-control">
                        </div>
                        <div class="col-md-6">
                        <label for="name">CVC:</label>
				    	<input type="number" id="cvc" name="cvc" required class="form-control">
                        </div>

                    </div>
                    
					
					<br>   
					<button type="submit" class="subscribe-btn">Submit</button>
			</form>
            <p><b>All Credit and Debit cards are accepted.</b></p>
            </div>
        </div>
		</div>

	</div>
	</div>	
	
	
	</div>
	</div>
	</section>

@endsection
