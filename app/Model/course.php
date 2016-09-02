<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use DB;
use Mockery\CountValidator\Exception;
use Validator;		
class course extends Model
{
	protected $table = 'courses';
	protected $fillable = ['id','course_id','title','credit','supervisor_id'];
	protected $primaryKey = 'id';
	public $timestamps = false;

	public function GetCourseList()
	{
	      return DB::table($this->table)->get();
	}
	public function GetCourseDetails($id)
	{
		 return DB::table($this->table)->where('id', $id)->first();	
	}
	public function UpdateCourse($id,$courseId,$courseTitle,$courseCredit,$courseSupervisor)
	{
		 return DB::table($this->table)->where('id', $id)->update(['course_id'=>$courseId,'title'=>$courseTitle,'credit'=>$courseCredit,'supervisor_id'=>$courseSupervisor]);	
	}

/*
	
	
	public function UserEmailCheck($email)
	{
	      return DB::table($this->table)->where('email', $email)->get();
	}
	
	
	*/
}