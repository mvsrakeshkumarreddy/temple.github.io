<!DOCTYPE html>
<html style="background-color: maroon;">
    <head>
<meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Kandhamangalam is a village near Komal in Kuttalam Taluk in Nagapattinam District of Tamilnadu State, India.It is about 15 Kms from Mayiladuthurai and is located in the banks of Veeracholan river alias Kalyana Cauvery.Thiruvarur, Sirkazhi, Therizhandur (birth place of Tamil poet Kambar), Vaitheeswaran koil are some of the nearby places from Kandhamangalam.">
  <meta name="keywords" content="Temples in Kandamangalam,Kandamangalam,Skandha Ayyanar Temple,Shiva Temple,Prasanna Maha Ganapathi Temple,Mayuranathaswami Temple, Mayiladuthurai, Navagragham Temples ( Around 25 KM radius), Pandurangan Temple, Govindhapuram, Sri Sri Maha periyava Thabhovanam, Govindhapuram, Sri Sri Bodhendra Saraswathi Swamigal Mutt">
  <meta name="author" content="mvsrakeshkumarreddy">
      
        <title>About</title>
<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/flash.css">
    <link href="css/app1.css" rel="stylesheet">
    
                        <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>


    </head>
    <body ng-app="rakeshApp" ng-controller="studentController">
    <div class="wow bounceInLeft">
<!--
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



    <ul class="nav nav-pills">
                    <li class="nav nav-pills"><a href="/"><i style="color: orange;font-size: 20px; font-family: serif; ">HOME</i></a></li>
                    <li class="nav nav-pills"><a href="/announcements"><i style="color: orange;font-size: 20px; font-family: serif;">ANNOUNCEMENTS</i></a></li>
                    <li class="nav nav-pills"><a href="/gallery"><i style="color: orange;font-size: 20px; font-family: serif;">GALLERY</i></a></li>
                    <li class="nav nav-pills"><a href="/about"><i style="color: orange;font-size: 20px; font-family: serif;">ABOUT</i></a></li>
                    <li class="nav nav-pills"><a href="/contact"><i style="color: orange;font-size: 20px; font-family: serif;">CONTACT</i></a></li>
                    <li class="nav nav-pills"><a href="/map"><i style="color: orange;font-size: 20px; font-family: serif;">MAP</i></a></li>

        @if(\Auth::check())
    <li class="nav nav-pills navbar-right">
        {{link_to_route('logout','LOGOUT')}}
    </li>

    @else
    <li class="nav nav-pills navbar-right">
        {{link_to_route('login','LOGIN')}}
    </li>
    <li class="nav nav-pills navbar-right">
        {{link_to_route('users.create','REGISTER')}}
    </li>
    @endif
    </ul>
  

    </div>
        </div>
    </nav>
    -->
      <nav>
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu<img src="logo.png" style="width: 250px;height: 99px;border-radius: 18px;"></i></a>
      <ul class="left hide-on-med-and-down">
      <li class="nav nav-pills"><a href="/" style="text-decoration: none;"><img src="logo.png" style="width: 250px;height: 99px;border-radius: 18px;"></a></li>
        <li class="nav nav-pills"><a href="/" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif; ">HOME</p></a></li>
                    <li class="nav nav-pills"><a href="/announcements" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">ANNOUNCEMENTS</p></a></li>
                    <li class="nav nav-pills"><a href="/gallery" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">GALLERY</p></a></li>
                    <li class="nav nav-pills"><a href="/about" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">ABOUT</p></a></li>
                    <li class="nav nav-pills"><a href="/contact" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">CONTACT</p></a></li>
                    <li class="nav nav-pills"><a href="/map" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">MAP</p></a></li>
                    <li class="nav nav-pills"><a href="/experience" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">EXPERIENCE</p></a></li>
                    <li ng-show="false" class="nav nav-pills"><a class="waves-effect waves-light btn" href="#modal1color" style="font-weight: normal;font-family: serif;"><i class="material-icons left">settings_brightness</i>Color</a></li>
</ul>
<ul class="right hide-on-med-and-down">
    
   @if(\Auth::check())
   <li class="nav nav-pills navbar-right" style="padding-right: 15px;"><a href="/logout" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">LOGOUT</p></a></li>
   <li class="nav nav-pills navbar-right"><a class="waves-effect waves-light btn" href="#modal1" style="font-weight: normal;font-family: serif;"><i class="material-icons left">redeem</i>Donate</a></li>
   <!--
    <li class="nav nav-pills navbar-right" style="font-size: 18px;">
        {{link_to_route('logout','LOGOUT')}}
    </li>
-->
    @else
    <li class="nav nav-pills navbar-right" style="padding-right: 15px;"><a href="/login" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">LOGIN</p></a></li>
    <li class="nav nav-pills navbar-right" ng-show="false"><a href="users/create" style="text-decoration: none;"><p style="color: white;font-size: 18px; font-family: serif;">REGISTER</p></a></li>
    <li class="nav nav-pills navbar-right"><a class="waves-effect waves-light btn" href="#modal1" style="font-weight: normal;font-family: serif;"><i class="material-icons left">redeem</i>Donate</a></li>
    <!--
    <li class="nav nav-pills navbar-right" style="font-size: 20px;">
        {{link_to_route('login','LOGIN')}}
    </li>
    <li class="nav nav-pills navbar-right" style="font-size: 20px;">
        {{link_to_route('users.create','REGISTER')}}
    </li>
    -->
    @endif

      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li class="nav nav-pills"><a href="/" style="text-decoration: none;"><img src="logo.png" style="width: 250px;height: 99px;border-radius: 18px;"></a></li>
      <br>
        <li class="nav nav-pills"><a href="/" style="text-decoration: none;"><p style="color: orange;font-size: 20px; font-family: serif; ">HOME</p></a></li>
                    <li class="nav nav-pills"><a href="/announcements" style="text-decoration: none;"><p style="color: orange;font-size: 20px; font-family: serif;">ANNOUNCEMENTS</p></a></li>
                    <li class="nav nav-pills"><a href="/gallery" style="text-decoration: none;"><p style="color: orange;font-size: 20px; font-family: serif;">GALLERY</p></a></li>
                    <li class="nav nav-pills"><a href="/about" style="text-decoration: none;"><p style="color: orange;font-size: 20px; font-family: serif;">ABOUT</p></a></li>
                    <li class="nav nav-pills"><a href="/contact" style="text-decoration: none;"><p style="color: orange;font-size: 20px; font-family: serif;">CONTACT</p></a></li>
                    <li class="nav nav-pills"><a href="/map" style="text-decoration: none;"><p style="color: orange;font-size: 20px; font-family: serif;">MAP</p></a></li>
                     <li class="nav nav-pills"><a href="/experience" style="text-decoration: none;"><p style="color: orange;font-size: 20px; font-family: serif;">EXPERIENCE</p></a></li>
                     <li class="nav nav-pills"><a class="modal-trigger waves-effect waves-light btn" href="#modal1color">Color<i class="material-icons">settings_brightness</i></a></li>

                     @if(\Auth::check())
   <li class="nav nav-pills"><a href="/logout" style="text-decoration: none;"><p style="color: black;font-size: 20px; font-family: serif;">LOGOUT</p></a></li>
   <li class="nav nav-pills navbar-right"><a class="modal-trigger waves-effect waves-light btn" href="#modal1">Donate<i class="material-icons">redeem</i></a></li>
   <!--
    <li class="nav nav-pills navbar-right" style="font-size: 20px;">
        {{link_to_route('logout','LOGOUT')}}
    </li>
-->
    @else
    <li class="nav nav-pills"><a href="/login" style="text-decoration: none;"><p style="color: black;font-size: 20px; font-family: serif;">LOGIN</p></a></li>
    <li class="nav nav-pills" ng-show="false"><a href="users/create" style="text-decoration: none;"><p style="color: black;font-size: 20px; font-family: serif;">REGISTER</p></a></li>
    <li class="nav nav-pills navbar-right"><a class="modal-trigger waves-effect waves-light btn" href="#modal1">Donate<i class="material-icons">redeem</i></a></li>
    <!--
    <li class="nav nav-pills navbar-right" style="font-size: 20px;">
        {{link_to_route('login','LOGIN')}}
    </li>
    <li class="nav nav-pills navbar-right" style="font-size: 20px;">
        {{link_to_route('users.create','REGISTER')}}
    </li>
    -->
    @endif
      </ul>
    </div>
  </nav>
   <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h2 style="font-family: serif;color: orange;">Donate</h2>
      <hr>
      <p style="color: orange;font-weight: normal;font-size: 25px;font-family: serif;">We are accepting donations for the below Activities..</p>
      <hr>
      <p style="color: #3498DB;font-weight: normal;font-size: 18px;font-family: serif;">1) Monthly Anusha Nakshathra Pooja.( Includes Kho Pooja, Avahanthi Homam, Upanishath Parayanam , Maha Periyava Purappadu & Annadhanam) </p>
<p style="color: #3498DB;font-weight: normal;font-size: 18px;font-family: serif;">2) Kho Dhanam</p>
<p style="color: #3498DB;font-weight: normal;font-size: 18px;font-family: serif;">3) Vaidhigha Expenses.</p>
      <hr>
      <p style="color: black;font-family: serif;font-size: 18px;font-weight: normal;">Are you ready to Donate???</p>
    </div>
    <div class="modal-footer">
      <a href="#modaldonation" style="text-align: center;font-weight: normal;font-size: 15px;font-family: serif;" class="modal-action modal-close waves-effect waves-green btn-flat">Donate</a>
    </div>
  </div>


<div id="modaldonation" class="modal modal-fixed-footer">
  <div class="modal-content">

  <h2 style="color: orange;font-family: serif;">Account Details</h2>
  <hr>

  <p style="color: black;font-family: serif;font-weight: normal;font-size: 18px;">Ac No: 3600707277</p>
  <p style="color: black;font-family: serif;font-weight: normal;font-size: 18px;">NAME : K Mahalakshmi</p>
  <p style="color: black;font-family: serif;font-weight: normal;font-size: 18px;">IFSC : CBIN0280896</p>
  <p style="color: black;font-family: serif;font-weight: normal;font-size: 18px;">BANK : Central Bank of India, Mayiladhuthurai Branch</p>

  </div>
</div>
    </div>
    <div class="wow bounceInDown" data-wow-duration="2s">
            <div class="container">
            <div class="content">
            <div class="title">
            <hr>
                <h3 style="text-align: center;font-size:50px;vertical-align: middle;color: #3498DB;font-weight: normal;font-family: serif;">About Us</h3>
        </div>
        </div>
        <hr>
        <div class="wow bounceInLeft" data-wow-duration="2s">
        <h2 style="color: orange;text-align: center;text-decoration-line: underline;">Kandhamangalam:</h2>
       <!--
        <ul>
          <li>Kandhamangalam is a village near Komal in Kuttalam Taluk in Nagapattinam District of Tamilnadu State, India.</li>
          <li>It is about 15 Kms from Mayiladurai and is located in the banks of Veeracholan river alias Kalyana Cauvery.</li>
          <li>Thiruvarur, Sirkazhi, Therizhandur (birth place of Tamil poet Kambar), Vaitheeswaran koil are some of the nearby places from Kandhamangalam.</li>
      
        </ul>
      -->
          <p style="color: #3498DB;font-family: serif;font-weight: normal;font-size: 18px;">Kandhamangalam is a village near Komal in Kuttalam Taluk in Nagapattinam District of Tamilnadu State, India.It is about 15 Kms from Mayiladuthurai and is located in the banks of Veeracholan river alias Kalyana Cauvery.Thiruvarur, Sirkazhi, Therizhandur (birth place of Tamil poet Kambar), Vaitheeswaran koil are some of the nearby places from Kandhamangalam.</p>
        </div>
        <hr>
        <div class="wow bounceInRight" data-wow-duration="2s">
        <h2 style="color: orange;text-align: center;text-decoration-line: underline;">Temples in Kandamangalam:</h2>
        <div style="text-align: left;width: 300px;margin: 0 auto;">
          
        <ol style="list-style-type: circle; vertical-align: middle;">

        <li  style="color: #3498DB;font-family: serif;font-weight: normal;font-size: 18px;">Prasanna Maha Ganapathi Temple</li>
        <li  style="color: #3498DB;font-family: serif;font-weight: normal;font-size: 18px;">Skandha Ayyanar Temple</li>
        <li  style="color: #3498DB;font-family: serif;font-weight: normal;font-size: 18px;">Shiva Temple</li>
          
        </ol>
        </div>
        <hr>
          
        </div>

        <div class="wow bounceInLeft" data-wow-duration="2s">
          <h2 style="color: orange;text-align: center;text-decoration-line: underline;">Kumbabishekam and Installation of Statue of Shri Chandrasekarendra Saraswathi Swamigal:</h2>
          <p  style="color: #3498DB;font-family: serif;font-weight: normal;font-size: 18px;"><q>Kumbabishekam</q> was performed for the Prasanna Maha Ganapathi Temple and the Skanda Ayyanar Temple on 01-May- 2017.</p>
          <p  style="color: #3498DB;font-family: serif;font-weight: normal;font-size: 18px;">Along with the Kumbabishekam, the statue of Shri Kamakoti Peetam, Jagadguru Shri Chandrasekarendra Saraswathi Swamigal was also installed with grandeur and with his blessings.</p>
        </div>
<hr>
        <div class="wow bounceInRight" data-wow-duration="2s">
          <h2 style="color: orange;text-align: center;text-decoration: underline;">Please do visit the Temple to get Maha periyava blessings</h2>
          <img src="mooll.png" style="margin-left: auto;margin-right: auto;display: block;">
        </div>

        </div>

        </div>
        
        
<hr>



<input type="color" id="colorChoicenav" style="visibility: hidden;">    
<input type="color" id="colorChoicefooter" style="visibility: hidden;">


   <!-- Modal Structure -->
  <div id="modal1color" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h2 style="color: orange;">Want a Colorful Look ???</h2>
      <hr>
      <p style="color:#3498DB;font-weight: normal;font-family: serif;font-size: 20px;">You can change the color of the Navigation bar and the Footer if you want a colorful look</p>
      <hr>
      <p style="color:orangered;font-weight: normal;font-family: serif;font-size: 20px;">So What do you want to change?</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat "><label for="colorChoicenav">Navbar</label></a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat "><label for="colorChoicefooter">Footer</label></a>
    </div>
  </div>




  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h4 class="white-text">Temples Nearby</h4>
                <p class="black-text text-lighten-4" style="font-weight:normal;font-size: 15px;color" ng-show="false">Temples Nearby</p>
                
                <ol style="list-style-type: circle;color: yellow;font-size: 15px;">
                  <li>Mayuranathaswami Temple, Mayiladuthurai</li>
                  <li>Navagragham Temples ( Around 25 KM radius)</li>
                  <li>Pandurangan Temple, Govindhapuram</li>
                  <li>Sri Sri Maha periyava Thabhovanam, Govindhapuram</li>
                  <li>Sri Sri Bodhendra Saraswathi Swamigal Mutt</li>
                </ol>
             
              </div>
              <div class="col l4 offset-l2 s12">
                <h4 class="white-text">Links</h4>
                <ul>
                  <li><a class="yellow-text text-lighten-2" href="/">HOME</a></li>
                  <li><a class="yellow-text text-lighten-2" href="announcements">ANNOUNCEMENTS</a></li>
                  <li><a class="yellow-text text-lighten-2" href="gallery">GALLERY</a></li>
                  <li><a class="yellow-text text-lighten-2" href="about">ABOUT</a></li>
                  <li><a class="yellow-text text-lighten-2" href="contact">CONTACT</a></li>
                  <li><a class="yellow-text text-lighten-2" href="map">MAP</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright" id="bottom">
            <div class="container">
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        <a href="#top">
        <i class="material-icons" style="position: fixed;right: 20px;bottom: 50px;font-size: 40px;">navigation</i>
        </a>
        <a href="#bottom">
        <i class="material-icons" style="position: fixed;right: 20px;bottom: 10px;font-size: 40px;  -moz-transform: scale(1, -1);-webkit-transform: scale(1, -1);-o-transform: scale(1, -1);-ms-transform: scale(1, -1);transform: scale(1, -1);">navigation</i>
        </a>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


 <script>
         var rakeshApp = angular.module('rakeshApp', []);
rakeshApp.controller('studentController',function($scope)
{

});

         </script>

   <script type="text/javascript" src="js/materialize.min.js"></script>
<script>
      $(".button-collapse").sideNav();

            $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

</script>

<script>
    $("#colorChoicefooter").change(function(){
  $("footer").css('background', $(this).val());
});

    $("#colorChoicenav").change(function(){
  $("div .nav-wrapper").css('background', $(this).val());
});
</script>
<script src="js/pace.js"></script>

    </body>
</html>
