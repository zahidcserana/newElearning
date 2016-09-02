<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\lecture;
use App\Http\Requests;
use Session;

class LectureController extends Controller
{
	public function LectureView()
	{
		$lectureObj = new lecture;
	    	$lectureList = $lectureObj->GetAllLecture();
	    	if (!$lectureList) 
	    	{
			$msg = 'No lecture uploded!';
			return redirect()->route('message',['message'=>$msg]);
		}
			return view('lecture_list',['lectureList'=>$lectureList]);

	}
	public function NewLecture()
	{
		
		return view('new_lecture');
	}
	public function AddLecture(Request $request)
	{
		$userId = Session::get('userId');
		
		$courseId = $request->course_id;
		$courseTitle = $request->course_title;
		$courseContent = $request->course_content;

		$lectureInput = array(
			'course_id'=> $courseId,
			'title'=> $courseTitle,
			'content'=> $courseContent
			);
		$lectureAdd = lecture::create($lectureInput);
		return redirect()->route('lecture_view');

	}
	public function EditLecture($id)
	{
		$lectureDetailsObj = new lecture;
		$lectureDetails = $lectureDetailsObj->GetLectureDetails($id);

		return view('lecture_details',['id'=>$id ,'lectureDetails'=>$lectureDetails]);
	}
	public function LectureEdit(Request $request)
	{
		$id = $request->id;
		$courseId = $request->course_id;
		$courseTitle = $request->course_title;
		$content = $request->content;
		
		$lectureObj = new lecture;
		$lectureEdit = $lectureObj->UpdateLecture($id,$courseId,$courseTitle,$content);
		if ($lectureEdit) {
			$msg = 'Course Successfully Edited!';
			return redirect()->route('message',['message'=>$msg]);
		}
	}
}


	

