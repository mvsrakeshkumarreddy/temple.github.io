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
        <title>Map</title>
<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/flash.css">
    <link href="css/app1.css" rel="stylesheet">
    
                        <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>


    </head>
    <body ng-app="rakeshApp" ng-controller="studentController">
    <div class="wow bounceInLeft" data-wow-duration="2s">
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
    <div class="wow bounceInDown">
            <div class="container">
            <div class="content">
            <div class="title">
            <hr>
                <h3 style="text-align: center;font-size:50px;vertical-align: middle;color: #3498DB;font-weight: normal;font-family: serif;">Maps</h3>
                <hr>
        </div>
        <div align="center" class="wow flipInY" data-wow-duration="2s">
        <h4 style="text-align: center;font-size:18px;vertical-align: middle;color: orange;font-weight: normal;font-family: serif;">Kandhamangalam</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31331.877720490353!2d79.58210715410759!3d11.002212848780369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a552523d57727fb%3A0xc5de58995884ef18!2sTamil+Nadu+609805!5e0!3m2!1sen!2sin!4v1495476660999" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div align="center" class="wow flipInX" data-wow-duration="2s">
        <h4 style="text-align: center;font-size:18px;vertical-align: middle;color: orange;font-weight: normal;font-family: serif;">Perumal Koil</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9359.416285116216!2d79.5935467850518!3d11.019636910472823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x268ed4de02a18c3d!2sPerumal+Kovil!5e0!3m2!1sen!2sin!4v1495476920532" width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
       
        </div>
        <div align="center" class="wow flipInX" data-wow-duration="2s">
          <h4 style="text-align: center;font-size:18px;vertical-align: middle;color: orange;font-weight: normal;font-family: serif;">Mayuranathar Temple</h4>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.2418676516363!2d79.65275021533155!3d11.095343092105624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a55214a112842ab%3A0x230c3c9f9d1e5372!2sMayuranathar+Temple!5e0!3m2!1sen!2sin!4v1495477113881" width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
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
