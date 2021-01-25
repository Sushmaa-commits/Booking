@extends('layouts.frontend')
@section('title', 'Home')
@section('content')
<div class="intro">
    <div class="wrap">
        <div class="textwidget">
            <h1 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">Need to Book HIACE To Travel?</h1>
            <h2 class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">You've come to the right
                place.</h2>
			  
				@auth
			<div class="actions">
                <a href="#booking" title="Make a booking" class="btn large color wow fadeInRight anchor" style="visibility: visible; animation-name: fadeInRight;">Make
                    a booking</a>
			</div>
			@endauth
        </div>
    </div>
</div>

<!-- //Intro -->
		@auth
			@include('includes.reservationform')
		@endauth
		<!-- Services iconic -->
		<div class="services iconic white">
			<div class="wrap">
				<div class="row">
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon  icon-themeenergy_savings"></span></span>
						<h3>Fixed rates</h3>
						<p>Rates are fixed here as according to the distances you travel.No bargaining is allowed.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".2s">
						<span class="circle"><span class="icon icon-themeenergy_lockpad"></span></span>
						<h3>Reliable transfers</h3>
						<p>We provide you reliable service of tranfers.You can travel safely and there will be no any problem.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_open-wallet"></span></span>
						<h3>No booking fees</h3>
						<p>We dont take any charges while you are booking micro for travel.You can book free of cost.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn">
						<span class="circle"><span class="icon icon-themeenergy_heart"></span></span>
						<h3>Free cancellation</h3>
						<p>Free cancellation can be done but you should inform us as early as possible.</p>
					</div>
					<!-- //Item -->
					
					<!-- Item -->
					<div class="one-third wow fadeIn" data-wow-delay=".4s">
						<span class="circle"><span class="icon icon-themeenergy_call"></span></span>
						<h3> customer service</h3>
						<p>You can call us at 8 am to 8pm, or you can mail or send us messages any time,we will be available there any time.</p>
					</div>
					<!-- //Item -->
				
				</div>
			</div>
		</div>
     
@endsection
