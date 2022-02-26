<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Film;
use App\Models\Showtime;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $showing = Film::all();

        return view('frontend.index', compact('showing'));
    }

    public function view($id)
    {

        $film = Film::where('id', $id)->first();



        return view('frontend.view', compact('film'));

    }

}
