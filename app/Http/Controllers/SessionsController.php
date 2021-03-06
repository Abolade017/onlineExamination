<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {

        // dd(request()->all());

        //validate the user
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($validated);

        //attemp to authenticate and log in the user
        if (auth()->attempt($validated)) {
            //session fixation
            session()->regenerate();
            //redirect the user to the home page
            return redirect('/')->with('success', 'you are logged in');
        }
        // authentication failed
        throw ValidationException::withMessages(['email' => 'your email cannot be found']);
        // return back()
        // ->withInput()
        // ->withErrors(['email'=>'your email cannot be verified']);

    }
    public function destroy()
    {

        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
