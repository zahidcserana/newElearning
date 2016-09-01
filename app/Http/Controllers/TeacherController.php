<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeacherController extends Controller
{
    public function LoginForm()
    {
    	return view('login_form');
    }
    public function Home()
    {
    	return view('home');
    }
}
