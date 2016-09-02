<?php
  $asset = asset('/');
?>
@extends('master')
@section('content')
<link href="{{$asset}}css/table.css" rel="stylesheet" type="text/css" />
	<div align="center">
	<h2 class="test" ><a href="{{route('new_course')}} ">Add new</a></h2>
		<table><br /><br />
			<thead>
				<th>COURSE ID</th>
				<th>TITLE</th>
				<th>CREDIT</th>
				<th>ACTION</th>
			</thead>
			<tbody>
				@foreach ($courseView as $course)
				<tr>
					<td>{{$course->course_id}}</td>
					<td>{{$course->title}}</td>
					<td>{{$course->credit}}</td>
					<td><h2 class="test" ><a href=" {{route('course_edit',['id'=>$course->id])}} ">edit</a></h2> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop