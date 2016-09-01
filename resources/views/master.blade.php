<?php
  $asset = asset('/');
?>                     
<!DOCTYPE html>
<html>
<head>
<title>Zahid E-Learning Center</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="{{$asset}}css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="topPan"> <a href="#"><img src="{{$asset}}images/logo.jpg" title="Zahid E-Learning Center" alt="E-Learning" width="219" height="58" border="0"  class="logo"/></a>
  <div id="topimagePan"><img src="{{$asset}}images/blank.gif" alt="" /></div>
  <ul>
    <li><a href="{{route('home')}}">home</a></li>
    <li><a href="#">about us</a></li>
    <li><a href="{{route('registration')}}">registration</a></li>
    <li><a href="#">logout</a></li>
    <li><a href="#">course</a></li>
    <li><a href="#">contact</a></li>
  </ul>
</div>
  @yield('content')


<br /><br />
<div id="footerPan">
  <ul>
    <li><a href="#">home</a>|</li>
    <li><a href="#">about us</a>|</li>
    <li><a href="#">support</a>|</li>
    <li><a href="#">solutions</a>|</li>
    <li><a href="#">books</a>|</li>
    <li><a href="#">contact</a></li>
  </ul>
  <p class="copyright">©braintech. all right reserved.</p>
  <div id="footerPanhtml"><a href="http://validator.w3.org/check?uri=referer">HTML</a></div>
  <div id="footerPancss"><a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a></div>
  <ul class="templateworld">
    <li>design by:</li>
    <li><a href="http://www.templateworld.com">Template World</a></li>
  </ul>
</div>
@yield('validate')
</body>
</html>
