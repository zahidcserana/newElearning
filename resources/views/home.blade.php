<?php
  $asset = asset('/');
?>
@extends('master')
@section('content')
<div id="bodyPan">
  <div id="leftPan">
    <h2>Zahid <span> E-Learning</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cras sit amet neque a mauris semper sagittis. Sed facilisis turpis in elit. Nunc purus augue, ornare sed, bibendum vie</p>
    <p>Sed eros tellus, blandit in, tempus a, imperdiet at, ante. Phasellus pede. Mauris mauris nibh, euismod nec, sagittis imperdiet, nonummy at, dui. Integer sem sapien, faucibus it amet, tristique eu, blandit sit amet, massa. Nam lacinia. Proin ut velit id mauris luctus vestibulum. Aenean condimentum. Donec iaculis volutpat augue. Nulla facilisi. Praesen orci eget nisl faucibus interdum. </p>
    <div id="leftblockonePan">
      <h3>latest <span>blogs</span></h3>
      <h4><span>1.</span>kavin johnes</h4>
      <p><span>Lorem ipsum dolor sit amet, consectetuer</span> adipiscing elit. Cras sit amet neque a mauris semper sagittis. Sed facilisis turpis in elit. Nunc purus augue, ornare sed, bibendum vie</p>
      <div id="leftblockoneLinkPan">
        <ul>
          <li class="comments">comments</li>
          <li class="more"><a href="#">more</a></li>
        </ul>
      </div>
      <p class="border"><img src="images/blank.gif" alt="" /></p>
      <h4><span>2.</span>henry richard</h4>
      <p><span>Lorem ipsum dolor sit amet, consectetuer</span> adipiscing elit. Cras sit amet neque a mauris semper sagittis. Sed facilisis turpis in elit. Nunc purus augue, ornare sed, bibendum vie</p>
      <div id="leftblockoneLinktwoPan">
        <ul>
          <li class="comments">comments</li>
          <li class="more"><a href="#">more</a></li>
        </ul>
      </div>
    </div>
    <div id="leftblocktwoPan">
      <h3>new <span>books</span></h3>
      <ul>
        <li class="bookname">Proin ut velit id</li>
        <li class="price">$20</li>
        <li class="bookname">mauris luctus</li>
        <li class="price">$20</li>
        <li class="bookname">vestibulum. Aenea</li>
        <li class="price">$25</li>
        <li class="bookname">condimentum.</li>
        <li class="price">$20</li>
        <li class="bookname">Donec iaculis</li>
        <li class="price">$35</li>
        <li class="bookname">volutpat augue.</li>
        <li class="price">$30</li>
        <li class="bookname">Proin ut velit id</li>
        <li class="price">$29</li>
        <li class="bookname">mauris luctus</li>
        <li class="price">$40</li>
        <li class="bookname">vestibulum. Ae</li>
        <li class="price">$25</li>
        <li class="bookname">condimentum.</li>
        <li class="price">$20</li>
        <li class="bookname">Donec iaculis</li>
        <li class="price">$20</li>
        <li class="bookname">volutpat augue.</li>
        <li class="price">$20</li>
      </ul>
      <p>discount upto <br />
        <span>valid upto 05th june 2007</span></p>
    </div>
  </div>
  <div id="rightPan">
    
    <h3>more links</h3>
    <ul>
      <li><a href="#">www.braintech.com</a></li>
      <li><a href="#">www.brainmod.com</a></li>
      <li><a href="#">www.braintech2.com</a></li>
      <li><a href="#">www.modedu.com</a></li>
      <li><a href="#">www.modtech3.com</a></li>
      <li><a href="#">www.university.com</a></li>
    </ul>
    <div id="rightform2Pan">
      <form action="#" method="get" class="form2">
        <h2>search</h2>
        <label>www.</label>
        <input name="" type="text" />
        <select name="select">
          <option>.com</option>
          <option>.org</option>
        </select>
        <input name="search" type="submit"  class="search" id="search" value="SEARCH"/>
      </form>
    </div>
  </div>
</div>
@stop