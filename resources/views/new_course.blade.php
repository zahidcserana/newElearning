@extends('master')
@section('content')
 <div align="center">
 	<form action="{{route('new_course')}} " method="post">
 	{!! csrf_field() !!}
 		<table>
 		<tr>
 			<td>Course Id:</td>
 			<td><input type="text" name="course_id" id="course_id"> </td>
 		</tr>
 		<tr>
 			<td>Course Title:</td>
 			<td><input type="text" name="course_title" id="course_title"> </td>
 		</tr>
 		<tr>
 			<td>Course Credit:</td>
 			<td><input type="text" name="course_credit" id="course_credit"> </td>
 		</tr>
 		
 		</table>
 		<input type="submit" name="submit" value="submit">
 	</form>
 </div>
@stop