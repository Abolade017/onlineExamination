<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }
    public function store(Request $request){

       $validated= request()->validate([
            'name'=> 'required|max:255|min:8',
            'username'=> 'required|max:255|min:3|unique:users,username',
            'email'=>'required|email|max:255',
            'password'=>'required|max:255|min:8'

        ]);
        // $validated['password']=bcrypt($validated['password']);
         User::create($validated);
         return redirect('/')->with('success', 'You have been registered');
    }
}
