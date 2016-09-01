<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;		
class user extends Model
{
	protected $table = 'users';
	protected $fillable = ['id','user_name','email','password','if_teacher','if_student'];
	protected $primaryKey = 'id';
	public $timestamps = false;

	public function GetLogInInfo($email, $password)
	{
	    return DB::table($this->table)->where('email', $email)->where('password', $password)->first();
	}

/*
	public function GetAllUser()
	{
	      return DB::table($this->table)->get();
	}
	
	public function UserEmailCheck($email)
	{
	      return DB::table($this->table)->where('email', $email)->get();
	}
	public function PasswordChange($id,$password)
	{
		 return DB::table($this->table)->where('id', $id)->update(['password'=>$password]);	
	}
	
	*/
}