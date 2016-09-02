@extends('master')
@section('content')
<div align="center">
      <form id="lecture_edit" action="{{route('edit_lecture')}} " method="POST" class="
      form1">
     	  {!! csrf_field() !!}
        <br/><h3>Lecture Details</h3><br />
        <table>
          <input type="hidden" name="id" value=" {{$id}} ">
            <tr>
              <td><div>Course Id:</div></td>
              <td><div><input type="text" name="course_id" id="course_id" value=" {{$lectureDetails->course_id}} " /></div></td>
            </tr>
            <tr>
              <td><div>Course Title:</div></td>
              <td><div><input type="text" name="course_title" id="course_title" value=" {{$lectureDetails->title}} " /></div></td>
            </tr>
            <tr>
              <td><div>Content:</div></td>
              <td><div><input type="text"  name="content" id="content"  value=" {{$lectureDetails->content}} " /></div></td>
            </tr>
        </table>
        <div>
        <input name="GO" type="submit" class="botton" id="GO" value="submit" />
        </div>
      </form>
</div>
@stop

