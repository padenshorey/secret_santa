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

        request()->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email'],
            'exceptions' => ['sometimes']
        ]);

        //Participant::create(request(['firstName', 'lastName', 'email', 'exceptions']));

        $participant = new Participant();
        $participant->firstName = request('firstName');
        $participant->lastName = request('lastName');
        $participant->email = request('email');
        $participant->exceptions = request('exceptions', false);

        $participant->save();

        return redirect('/admin');
    }
}
