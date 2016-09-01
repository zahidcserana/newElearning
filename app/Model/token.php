<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;		
class token extends Model
{
	protected $table = 'token';
	protected $fillable = ['id','member_id','type','token','status','validity'];
	protected $primaryKey = 'id';
	public $timestamps = false;

	public function GetLogInInfo($email, $password)
	{
	    return DB::table($this->table)->where('email', $email)->where('password', $password)->first();
	}


	public function CheckActive($token,$status)
	{
	      return DB::table($this->table)->where('token', $token)->where('status', $status)->get();
	}
	
	public function StatusUpdate($token,$status)
	{
	      return DB::table($this->table)->where('token', $token)->update(['status' => $status]);
	}
	public function CheckToken($token)
	{
		 return DB::table($this->table)->where('token', $token)->first();	
	}
	public function StatusCheck($memberId)
	{
		return DB::table($this->table)->where('member_id', $memberId)->where('status', 'active')->first();	
	}
	
	
}