@extends('master')
@section('content')
<div align="center">
      <form id="course_edit" action="{{route('edit_course')}} " method="POST" class="
      form1">
     	  {!! csrf_field() !!}
        <br/><h3>Course Details</h3><br />
        <table>
          <input type="hidden" name="id" value=" {{$id}} ">
            <tr>
              <td><div>Course Id:</div></td>
              <td><div><input type="text" name="course_id" id="course_id" value=" {{$courseDetails->course_id}} " /></div></td>
            </tr>
            <tr>
              <td><div>Course Title:</div></td>
              <td><div><input type="text" name="course_title" id="course_title" value=" {{$courseDetails->title}} " /></div></td>
            </tr>
            <tr>
              <td><div>Credit:</div></td>
              <td><div><input type="text"  name="course_credit" id="course_credit"  value=" {{$courseDetails->credit}} " /></div></td>
            </tr>
            <tr>
              <td><div>Co-ordinator Id:</div></td>
              <td><div><input type="text"  name="supervisor" id="supervisor"  value=" {{$courseDetails->supervisor_id}} " /></div></td>
            </tr>
        </table>
        <div>
        <input name="GO" type="submit" class="botton" id="GO" value="submit" />
        </div>
      </form>
</div>
@stop

