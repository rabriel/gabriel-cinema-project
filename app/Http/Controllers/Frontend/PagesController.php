<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Film;
use App\Models\User;
use App\Http\Requests\UserRegisterRequest;
use App\Models\Showtime;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        //Get Current Showing Films
        $showing = Film::all();

        return view('frontend.index', compact('showing'));
    }

    public function view($id)
    {

        //Get Current Showing Film Details
        $film = Film::where('id', $id)->first();

        return view('frontend.view', compact('film'));

    }

    public  function register(UserRegisterRequest $request){

        $input = $request->all();

        //Hash Password
        $input['password'] = bcrypt($request->get('password'));

        //Create User
        User::create($input);

        return redirect(route('frontend.index'))->with('success', 'Registration Successful');
    }
}
