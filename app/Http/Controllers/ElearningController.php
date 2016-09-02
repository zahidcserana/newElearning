<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\user;
use App\Model\token;
use Session;
use Validator;

class ElearningController extends Controller
{
	public function Home()
	{
		return view('home');
	}
	public function LoginForm()
	{
		return view('login');
	}
	public function Login(Request $request)
	{
		$email = $request->email;
		$password = $request->password;
		$password = md5($password);
		$registerCheckObj = new user;
		$registerCheck = $registerCheckObj->GetLogInInfo($email, $password);
		
		$rules = [
	          'email'             =>  'required|email',
	          'password'          =>  'required'
	      ];
            $allInput = $request->all();

            $validator = Validator::make($allInput,$rules);


		if ($validator->fails()) 
		{
			return redirect()->route('user_login')
					     ->withErrors($validator)
					     ->withInput();
		}
	 	if (!$registerCheck) 
		{
			return redirect()->route('user_login')
			        	     ->withErrors('Email or Password no exist!')
			        	     ->withInput();
		}
		$userId = $registerCheck->id;
		$statusCheckingObj = new token;
		$statusChecking = $statusCheckingObj->StatusCheck($userId);
		if ($registerCheck && !$statusChecking) {
			$msg = 'Sorry! Your acount has not been activated yet.';
			return redirect()->route('message',['message'=>$msg]);
		}
		else
		{
			Session::put('userId' , $userId);
			return redirect()->route('home');
		}

	}
	public function RegistrationForm()
	{
		return view('signup');
	}
	public function Registration(Request $request)
	{
		$rules = [
		  'username'              =>  'required',
		  'email'             =>  'required|email|unique:users',
		  'password'          =>  'required|min:6',
		  'confirm_password'  =>  'required|same:password'
		];
        	$allInput = $request->all();

        	$validator = Validator::make($allInput,$rules);

		if ($validator->fails()) 
		{
		return redirect()->route('registration')
		            ->withErrors($validator)
		            ->withInput();
		}
		$username = $request->username;
		$email = $request->email;
		$position = $request->position;
		$password = $request->password;
		$password = md5($password);
		if ($position==1) {
			$teacher = 1;
			$student = 0;
		}
		else
		{
			$teacher = 0;
			$student = 1;

		}
		$inputRegister = array(
			'user_name'=> $username,
			'email'=> $email,
			'password'=> $password,
			'if_teacher'=> $teacher,
			'if_student'=> $student
			);
		$InsertToUsers = user::create($inputRegister);
		$lastInsertedId= $InsertToUsers->id;
		$token = md5(uniqid(rand()));
      	$validity = date('Y-m-d H:i:s', strtotime('+1 day', time()));
        	$type = 'email_valid';
        	$status = 'pending';
		$inputToken = array(
			'member_id'=> $lastInsertedId,
			'type'=> $type,
			'token'=> $token,
			'status'=> $status,
			'validity'=>$validity
			);
		$InsertToToken = token::create($inputToken);
		return $url = route('confirm', ['token' => $token]);

		//$msg = 'Welcome in our E-learning center!';
		//return redirect()->route('message',['message'=>$msg]);
	}
	public function Message($msg)
	{
		return view('message',['message'=>$msg]);
	}
	public function Confirmation($token)
	{
		$status = 'active';
		$tokenCheckingObj = new token;
		$tokenChecking = $tokenCheckingObj->CheckToken($token);
		$activeness = $tokenCheckingObj->CheckActive($token,$status);
		if (!$tokenChecking) {
			$msg = 'Sorry! Invalid token.';
			return redirect()->route('message',['message'=>$msg]);
		}
		else if ($activeness) {
			$msg = 'Sorry! Already used.';
			return redirect()->route('message',['message'=>$msg]);
		}
		else
		{
			$tokenCheckingObj->StatusUpdate($token,$status);
			$msg = 'Welcome! In our E-learning center.';
			return redirect()->route('message',['message'=>$msg]);
		}
	}
}
