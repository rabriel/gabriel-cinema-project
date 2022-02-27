<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBookingRequest;
use App\Models\Booking;
use App\Models\Film;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
        //Get Current Users Booked Films
        $booked = Booking::where('user_id', Auth::user()->id)->get();

        return view('backend.index', compact('booked'));
    }

    public function view($id)
    {

        //Get Current Users Booked Film Details

        $booked = Booking::where('id', $id)->first();

        return view('backend.view', compact('booked'));

    }

    public  function postBooking(CreateBookingRequest $request){

        $input = $request->all();

        //Generate Booking Reference
        $input['booking_reference'] = strtoupper(Str::random(8));

        //Create Booking
        Booking::create($input);

        return redirect(route('backend.index'))->with('success', 'Booking Successful');
    }

}
