<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use App\Models\HotelBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class HotelController extends Controller
{
    public function index(Request $request)
    { 

        $hotels = Hotel::latest()->get();
        // return $offices;
        if ($request->ajax()) {
            return DataTables::of($hotels)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $html = '';
                    $html .= '<div class="btn-group">';
                    $html .= '<button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light  waves-effect" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span> </button>';
                    $html .= '<ul class="dropdown-menu">';
                    $html .= '<li><a href="' . route('hotel.destroy', $row->id) . '" id="delete_btn">Delete</a></li>';
                    $html .= '<li><a href="' . route('hotel.edit', $row->id) . '" id="edit_btn">Edit</a></li>';
                    if ($row->status == 1) {
                        $html .= '<li><a href="' . route('hotel.deactive', $row->id) . '" id="deactive_btn">De-Active</a></li>';
                    } else {
                        $html .= '<li><a href="' . route('hotel.active', $row->id) . '" id="active_btn">Active</a></li>';
                    }
                    $html .= '</ul>';
                    $html .= '</div>';
                    return $html;
                })
                ->editColumn('image', function ($row) {
                    if ($row->image != null) {
                        return "<img src='" . asset('upload/hotel_images/' . $row->image) . "' height='40'/>";
                    }else{
                        return
                        "<img src='" . asset('upload/hotel_images/no_image.jpg') . "' height='40'/>";
                    }

                    })
                ->editColumn('status', function ($row) {
                    $html = '';
                    if ($row->status == 1) {
                        $html .= '<button class="btn btn-info waves-effect waves-light m-b-5"> <span>Active</span> </button>';
                    } else {
                        $html .= '<button class="btn btn-danger waves-effect waves-light m-b-5"> <span>De-Active</span> </button>';
                    }
                    return $html;
                })
                ->rawColumns(['action', 'status','image'])
                ->make(true);
        }

        return view('backend.hotel.index');
    }

    public static function getImageUrl($request)
    {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/hotel_images'), $imageName);
        return $imageName;
    }

    public function store(HotelRequest $request)
    {
        $data = new Hotel();
        $data->name = $request->name;
        $data->status = $request->status;
        $data->seat = $request->seat;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->capacity = $request->capacity;
        $data->image = self::getImageUrl($request);
        $data->save();
        return response()->json('Hotel Store Successfully');
    }
}
