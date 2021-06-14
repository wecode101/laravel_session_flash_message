<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function createUser(Request $request){

        $name = $request->input('name');

        $email = $request->input('email');

        $password = Hash::make($request->input('password'));

        //best practice is to create a repository for models
        User::create(['name' => $name, 'email' => $email, 'password' => $password]);

        //this is where the flash message is created using session helper.
        session()->flash('message', 'User created successfully.');

        return redirect('/');
    }
}
