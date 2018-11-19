<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participant;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function admin()
    {
        $participants = Participant::all();
        return view('admin', compact('participants'));
    }

    public function store()
    {
        $participant = new Participant();

        $participant->firstName = request('first_name');
        $participant->lastName = request('last_name');
        $participant->email = request('email');
        $participant->exceptions = request('exceptions');

        $participant->save();

        return redirect('/admin');
    }
}
