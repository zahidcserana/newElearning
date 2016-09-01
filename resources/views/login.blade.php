@extends('master')
@section('content')
<div id="bodyPan">
  <div id="leftPan">
    <div id="rightPan">
        @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
        @endif
        <form action="{{route('login')}} " method="post" class="form1">
       	  {!! csrf_field() !!}
          <h2>member login</h2>
          <label>Email:</label>
          <input type="text" name="email" id="email" />
          <label>Passward:</label>
          <input type="password"  name="password" id="password" />
          <label class="label1">a resistered member?</label>
          <input name="GO" type="submit" class="botton" id="GO" value="GO" />
        </form>
    </div>
  </div>
</div>
@stop
