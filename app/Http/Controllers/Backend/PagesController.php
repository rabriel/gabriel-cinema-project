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
use Carbon\Carbon;

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

    public function postBooking(CreateBookingRequest $request)
    {
        $input = $request->all();
        //dd($input);
        //Total Number of Seats Available for The Show
        $show_capacity = 30;
        //Total Booked Seats on The Show
        $current_bookings = Booking::select('tickets')->where('film_id',  $request->get('film_id'))->where('show_time', $request->get('show_time'))->sum('tickets');

        //Total Seats Booked + Requested Tickets
        $seats_available = $request->get('tickets') + $current_bookings;

        if ($seats_available <= $show_capacity) {
            //generate booking reference
            $input['booking_reference'] = strtoupper(Str::random(8));
            //Create Booking
            Booking::create($input);
            return redirect(route('backend.index'))->with('success', 'Booking Successful');
        } else {
            $available_ticket = Booking::select('tickets')->where('film_id', $request->get('film_id'))->sum('tickets');
            $total_remaining = 30 - $available_ticket;
            $message = "Remaining Available Tickets: " . $total_remaining;
            return redirect(route('backend.index'))->with('error', 'Show is Fully Booked')->with('message', $message);
        }
    }

    public function cancelBooking(Request $request, $id)
    {

        $booking = $request->all();

        //Cancel a Film Booking
        $booking = Booking::findorfail($id);


        //Get Show Start Time
        $show_start = Booking::where('id', $id)->pluck('show_time')->first();

        //Add 1 Hour Difference to the Current Time
        $current_time = Carbon::now()->addHours(1);

        //If Current Time is 1 Hour Greater Than The Start Time / Cancellation is Not Allowed
        if ($current_time->toDateTimeString() > $show_start) {
            return redirect(route('backend.index'))->with('error', 'You can only CANCEL your booking 1 hour before commencement');

        } else {
            $booking->delete();
            return redirect(route('backend.index'))->with('success', 'Booking Cancellation Successful');
        }


    }
}
