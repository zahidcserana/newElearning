<?php
  $asset = asset('/');
?>
@section('validate')
@parent
<script src="{{$asset}}js/jquery.min.js"></script>
<script src="{{$asset}}js/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {

  $("#signupForm").validate({
      rules: {
          username: "required",
          username: {
              required: true,
              minlength: 2
          },
          password: {
              required: true,
              minlength: 5
          },
          confirm_password: {
              required: true,
              minlength: 5,
              equalTo: "#password"
          },
          email: {
              required: true,
              email: true
          },
      },
      messages: {
          name: "Please enter your firstname",
          name: {
              required: "Please enter a username",
              minlength: "Your username must consist of at least 2 characters"
          },
          password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 5 characters long"
          },
          confirm_password: {
              required: "Please provide a password",
              minlength: "Your password must be at least 5 characters long",
              equalTo: "Please enter the same password as above"
          },
          email: "Please enter a valid email address",
      }
  });
});
</script>
@stop
@extends('master')
@section('content')
<div align="center">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <form id="signupForm" action="{{route('registration')}} " method="post" class="
      form1">
     	  {!! csrf_field() !!}
        <br/><h3>Registration form</h3><br />
        <table>
            <tr>
              <td><div>User Name:</div></td>
              <td><div><input type="text" name="username" id="username" /></div></td>
            </tr>
            <tr>
              <td><div>Email:</div></td>
              <td><div><input type="text" name="email" id="email" /></div></td>
            </tr>
            <tr>
              <td><div>Passward:</div></td>
              <td><div><input type="password"  name="password" id="password" /></div></td>
            </tr>
            <tr>
              <td><div>Confirm Passward:</div></td>
              <td><div><input type="password"  name="confirm_password" id="confirm_password" /></div></td>
            </tr>
            <tr>
              <td><div>Position:</div></td>
              <td><div>
              <select  name="position" id="position">
              <option selected disabled>Choose here</option>
              <option value="1">teacher</option>
              <option value="2">student</option>
              </select>
              </div></td>
            </tr>
           
        </table>
        <div>
        <input name="GO" type="submit" class="botton" id="GO" value="GO" />
        </div>
      </form>
</div>
@stop

