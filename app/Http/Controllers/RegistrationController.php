<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    protected function index(){
    	return view('auth.registration');
    }

    protected function create(Request $Request){

    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|string|email|max:250|unique:users',
    		'password' => 'required|min:8|diglts:1'
    	]);

    	User::create([
    		'name' => $request->get('name'),
    		'email' => $request->get('email'),
    		'password' => bcrypt($request->get('password'))
    	]);

    	return redirect('galery');
    }
}
