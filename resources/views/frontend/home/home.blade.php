@php
use Carbon\Carbon;
@endphp
	@extends('frontend.master')
	@section('content')
	<!--TOP SECTION-->
	<div class="inn-body-section pad-bot-55">
	    <div class="container">
	        <div class="row">
	            <div class="page-head">
	                <h2>Room Types</h2>
	                <div class="head-title">
	                    <div class="hl-1"></div>
	                    <div class="hl-2"></div>
	                    <div class="hl-3"></div>
	                </div>
	                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
	            </div>
          
				@foreach ($hotels as $hotel)
				<div class="room">
	                <div class="ribbon ribbon-top-left"><span>Featured</span>
	                </div>
	                <!--ROOM IMAGE-->
	                <div class="r1 r-com"><img src="{{ asset('upload/hotel_images/'.$hotel->image) }}" alt="" />
	                </div>
	                <!--ROOM RATING-->
	                <div class="r2 r-com">
	                    <h4>{{ $hotel->name }}</h4>
	                    <div class="r2-ratt"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <img src="images/h-trip.png" alt="" /> <span>Excellent 4.5 / 5</span> </div>
	                    <ul>

							<p style="display: none;">{{ $hotelBokkings =  App\Models\HotelBooking::where('hotel_id',$hotel->id)->where('to','>',Carbon::now())->get(); }}</p>
                        
                           <p style="display: none;"> {{ $totalBooking =  $hotelBokkings->sum('seat') }}</p>

	                        <li>Avlable Seat : {{ $hotel->seat - $totalBooking }}</li>
	                        
	                        <li></li>
	                        <li></li>
	                    </ul>
	                </div>
	                <!--ROOM AMINITIES-->
	                <div class="r3 r-com">
	                   {!! $hotel->description  !!}
	                </div>
	                <!--ROOM PRICE-->
	                <div class="r4 r-com">
	                    <p>Price for 1 night</p>
	                    <p><span class="room-price-1">{{ $hotel->price }}</span> 
	                    </p>
	                    <p>Non Refundable</p>
	                </div>
	                <!--ROOM BOOKING BUTTON-->
	                <div class="r5 r-com">
						@if($totalBooking >0 || $totalBooking == null)
	                    <div class="r2-available">Available</div>
						@else
	                    <div class="text-danger">Booked</div>
						@endif
						@if($totalBooking >0 || $totalBooking == null)
	                    <p>Price for 1 night</p> <a href="{{ route('book',$hotel->id) }}" class="inn-room-book">Book Now</a>
						@else

						@endif
	                </div>
	            </div>
				@endforeach
	            <!--ROOM SECTION-->
	            
	            <!--END ROOM SECTION-->
	            <!--ROOM SECTION-->
	        
	            <!--ROOM SECTION-->
	        
	            <!--END ROOM SECTION-->
	        </div>
	    </div>
	</div>

	@endsection
