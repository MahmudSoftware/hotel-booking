<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\HotelBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function index(){
             
        $hotels = Hotel::orderBy('id','DESC')->get();
        return view('frontend.home.home',compact('hotels'));
    }

    public function book($id){
        // dd($id);
        $hotel = Hotel::find($id);
      
        return view('frontend.book.book',compact('hotel'));
    }

    public function submitBook(Request $request){
             
        // dd($request->all());

        $bookingHotel = new HotelBooking();
        $bookingHotel->seat  = $request->seat;
        $bookingHotel->user_id  = Auth::user()->id;
        $bookingHotel->hotel_id  = $request->hotelId;
        $bookingHotel->to = $request->to;
        $bookingHotel->from = $request->from;
        $bookingHotel->save();

        return redirect('/');
    }
}
