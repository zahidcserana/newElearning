<?php
  $asset = asset('/');
?>
@extends('master')
@section('content')
<link href="{{$asset}}css/table.css" rel="stylesheet" type="text/css" />
	<div align="center">
	<h2 class="test" ><a href="{{route('new_lecture')}} ">Add new</a></h2>
		<table><br /><br />
			<thead>
				<th>LECTURE NO</th>
				<th>COURSE ID</th>
				<th>TITLE</th>
				<th>VIEW</th>
				
			</thead>
			<tbody>
				@foreach ($lectureList as $lecture)
				<tr>
					<td>{{$lecture->id}}</td>
					<td>{{$lecture->course_id}}</td>
					<td>{{$lecture->title}}</td>
					
					<td><h2 class="test" ><a href=" {{route('lecture_edit',['id'=>$lecture->id])}} ">edit</a></h2> </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop