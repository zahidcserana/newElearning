<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\course;
use App\Http\Requests;
use Session;

class CourseController extends Controller
{
	public function CourseView()
	{
		$courseViewObj = new course;
		$courseView = $courseViewObj->GetCourseList();
		if (!$courseView) {
			$msg = 'No course added!';
			return redirect()->route('message',['message'=>$msg]);
		}
		return view('course_view',['courseView'=>$courseView]);
	}
	public function NewCourse()
	{
		
		return view('new_course');
	}
	public function AddCourse(Request $request)
	{
		$userId = Session::get('userId');
		
		$courseId = $request->course_id;
		$courseTitle = $request->course_title;
		$courseCredit = $request->course_credit;

		$courseInput = array(
			'course_id'=> $courseId,
			'title'=> $courseTitle,
			'credit'=> $courseCredit,
			'supervisor_id'=> $userId
			);
		$courseAdd = course::create($courseInput);
		return redirect()->route('course_view');

	}
	public function EditCourse($id)
	{
		$courseDetailsObj = new course;
		$courseDetails = $courseDetailsObj->GetCourseDetails($id);

		return view('course_details',['id'=>$id ,'courseDetails'=>$courseDetails]);
	}
	public function CourseEdit(Request $request)
	{
		$id = $request->id;
		$courseId = $request->course_id;
		$courseTitle = $request->course_title;
		$courseCredit = $request->course_credit;
		$courseSupervisor = $request->supervisor;
		
		$courseObj = new course;
		$courseEdit = $courseObj->UpdateCourse($id,$courseId,$courseTitle,$courseCredit,$courseSupervisor);
		if ($courseEdit) {
			$msg = 'Course Successfully Edited!';
			return redirect()->route('message',['message'=>$msg]);
		}
	}
}

