<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;		
class lecture extends Model
{
	protected $table = 'lectures';
	protected $fillable = ['id','course_id','title','content'];
	protected $primaryKey = 'id';
	public $timestamps = false;

	public function GetAllLecture()
	{
	      return DB::table($this->table)->get();
	}
	public function GetLectureDetails($id)
	{
		 return DB::table($this->table)->where('id', $id)->first();	
	}
	public function UpdateLecture($id,$courseId,$courseTitle,$content)
	{
		 return DB::table($this->table)->where('id', $id)->update(['course_id'=>$courseId,'title'=>$courseTitle,'content'=>$content]);	
	}

/*
	
	
	public function UserEmailCheck($email)
	{
	      return DB::table($this->table)->where('email', $email)->get();
	}
	
	
	*/
}