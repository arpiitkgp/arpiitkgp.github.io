<!DOCTYPE html>
<html>
  <head>
    <title>People</title>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <style type="text/css">
    #nav{background-color: #AAAAAA;}
    #footer{background-color: #AAAAAA;}

    </style>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper" id="nav">
        <div class="row">
          <div class="col s11 offset-s1">
            <a href="#" class="brand-logo offset-s1 ">Logo</a></div>
            <div class="col s1 l1"><a href="#" data-activates="slide-out" class="button-collapse">Menu</a></div>
            <div class="col s6 offset-s4">
              <ul id="slide-out" class="side-nav"> <li><a href="About_us.html">About Us</a></li>
              <li><a href="Academics.html">Academics</a></li>
              <li><a href="Activities.html">Activities</a></li>
              <li><a href="People.html">People</a></li>
              <li><a href="Gallery.html">Gallery</a></li>
              <li><a href="Research.html">Research</a></li>
              <li><a href="Magazine.html">Magazine</a></li></ul>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="About_us.html">About Us</a></li>
                <li><a href="Academics.html">Academics</a></li>
                <li><a href="Activities.html">Activities</a></li>
                <li><a href="People.html">People</a></li>
                <li><a href="Gallery.html">Gallery</a></li>
                <li><a href="Research.html">Research</a></li>
                <li><a href="Magazine.html">Magazine</a></li>

              </ul></div>
            </div></div>
          </nav>
<div class="row"></div>
<div class="container"><div class="row"><img class="materialboxed col s12 "  src="images/People.jpg"></div></div>
<div class="container"><div class="row"><div class="col m4 l4 s4"><h4>PEOPLE</h4></div></div></div>
          <div class="container"><div class="row"><div class="col m4 l3 s4"><div class="collection">
            <div class="row">

              <a href="#!" class="collection-item" id="acad1">Student</a></div>
              <div class="row">   <a href="#!" id="acad2" class="collection-item">Faculty</a></div>
              <div class="row"><a href="#!" id="acad3" class="collection-item">Staff</a></div>
              <div class="row"><a href="#!" id="acad4" class="collection-item">Alumni</a></div>
            </div></div>
<div id="main" class="col m8 l9 s8">
<?php
error_reporting(0);
$user=$_COOKIE['var'];
$year=$_COOKIE['year'];
mysql_connect("localhost","root","");
mysql_select_db("arch");
$result=mysql_query("SELECT * from $year where id='$user'")
  or die("fuck off".mysql_error());
  $rower= mysql_fetch_array($result);

    echo "</br>Name : ".$rower['name'];
    if($rower['phn']!=''){
      echo "<br> Phone :
      ".$rower['phn'];}
       if($rower['img']!=''){
      echo '<img id="img" src="data:image/jpg;base64,'.base64_encode( $rower['img'] ).'"/>';}
      if($rower['link']!=''){
      echo "<br> Linkdn Link : <a href='
      ".$rower['link']."'>".$rower['name']."</a>";}
      if($rower['embed']!=''){
      echo "<br> PORTFOLIO<br>
      ".$rower['embed'];}

      ?>




</div>



</div>



            </div></div>
            <footer class="page-footer" id="footer">
              <div class="container">
                <div class="row">

<ul id="nav-mobile" class="col s12">
                <li><a href="Site_Map.html" class="waves-effect waves-teal btn-flat center col s3">Site Map</a></li>
                <li><a href="Council.html" class="waves-effect waves-teal btn-flat center col s3">Council</a></li>
                <li><a href="Web_Team.html" class="waves-effect waves-teal btn-flat center col s3">Web Team</a></li>
                <li><a href="People.html" class="waves-effect waves-teal btn-flat center col s3">People</a></li>
              </ul>



                </div>
                <div class="row">
                  <div class="col l6 s12">
                    <div class="col l2 "><img class="materialboxed" height="150" src="images/Logo.png"></div>
                    <div class="col l6 offset-l2 offset-s2"><h5>IIT Kharagpur</h5></div>





                  </div>
                  <div class="col l2 s12 right">
      <div style="overflow:hidden;width:150px;height:150px;resize:none;max-width:100%;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=IIT+kharagpur,+Kharagpur,+West+Bengal,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embed-map-code" href="https://www.hostingreviews.website/compare/hostgator-vs-dreamhost" id="get-map-data">dreamhost vs hostgator</a><style>#embed-map-canvas img{max-width:none!important;background:none!important;}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=4966d4bb-5751-e6e3-ae5c-7543ec6e3516&c=embed-map-code&u=1469546650" defer="defer" async="async"></script>
                  </div>
                </div>
              </div>
              <div class="footer-copyright">
                <div class="container">
                  © 2014 Copyright Text
                  <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
              </div>
            </footer>

            <script type="text/javascript"> $(".button-collapse").sideNav();
$( "#acad1" ).click(function() {
 $("#main").load("People/ppl.php");
});
$( "#acad2" ).click(function() {
 $("#main").load("People/fac.php");
});
$( "#acad3" ).click(function() {
 $("#main").load("People/Staff.php");
});
$( "#acad4" ).click(function() {
 $("#main").load("People/Alumni.php");
});

















            </script>
          </body>
        </html><?php
error_reporting(0);
$user=$_COOKIE['var'];
$year=$_COOKIE['year'];
mysql_connect("localhost","root","");
mysql_select_db("arch");
$result=mysql_query("SELECT * from $year where id='$user'")
  or die("fuck off".mysql_error());
  $rower= mysql_fetch_array($result);

    echo "</br>Name : ".$rower['name'];
    if($rower['phn']!=''){
      echo "<br> Phone :
      ".$rower['phn'];}
       if($rower['img']!=''){
      echo '<img id="img" src="data:image/jpg;base64,'.base64_encode( $rower['img'] ).'"/>';}
      if($rower['link']!=''){
      echo "<br> Linkdn Link : <a href='
      ".$rower['link']."'>".$rower['name']."</a>";}
      if($rower['embed']!=''){
      echo "<br> PORTFOLIO<br>
      ".$rower['embed'];}

      ?>
