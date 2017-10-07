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
        <title>Gallery</title>
<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/flash.css">
    <link href="css/app1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/wow.animate.css">
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
    <div class="wow flipInX" data-wow-duration="2s">
            <div class="container">
            <div class="content">
            <div class="title">
            <hr>
                <h3 style="text-align: center;font-size:50px;vertical-align: middle;color: #3498DB;font-weight: normal;font-family: serif;">welcome to gallery </h3>

          <hr>
          <div class="carousel" ng-show="false">
            
            @foreach($user as $users)

               <a class="carousel-item" href="{{$users->name}}"><img src="{{$users->name}}"></a>

            @endforeach

            @foreach($usergal as $usersgal)

            <a class="carousel-item" href="{{$usersgal->imagename}}"><img src="{{$usersgal->imagename}}"></a>

            @endforeach
            @foreach($userlin as $userslin)

            <a class="carousel-item" href="{{$userslin->imagelink}}"><img src="{{$userslin->imagelink}}"></a>

            @endforeach
          <hr>
          </div>
                  
                   <ul class="nav nav-pills" ng-init="tab = 1" style="margin: 0 auto;width:  250px;">
    <li style="vertical-align: middle;"><a href ng-click="tab = 1" style="color: #3498DB;font-size: 18px;font-family: serif;">PHOTOS</a></li>
    <li style="vertical-align: middle;"><a href ng-click="tab = 2" style="color: #3498DB;font-size: 18px;font-family: serif;">VIDEOS</a></li>
  </ul>
               
        </div>
   
        <hr>
     <div ng-show="tab === 1">
        @if(Auth::check())

<div style="text-align: center;">
                <label><strong style="font-weight: normal;">Upload Image</strong></label>
             
              <p>
      <input type="checkbox" class="filled-in" id="filled-in-box" ng-model="imageupload" ng-disabled="imagedisabled" ng-click="checkboxcheck()"/>
      <label for="filled-in-box" style="font-size: 15px;">Upload by Image</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" class="filled-in" id="filled-in-box1" ng-model="linkupload" ng-disabled="linkdisabled" ng-click="checkboxcheck()" />
      <label for="filled-in-box1" style="font-size: 15px;">Upload by Link</label>
    </p>

                   </div>
                            <form action="gallery" method="post" enctype="multipart/form-data" id="galleryform" ng-show="imageupload">
                   
                  

 <div class="file-field input-field">
      <div class="btn">
        <span style="padding-top: 33px;">Image</span>
        <input type="file" name="galleryimage" required="required">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload Images">
      </div>
    </div>
    
    <div style="text-align: center;">
      
    <button class="btn waves-effect waves-light" type="submit" name="submit" value="submit">Submit
    <i class="material-icons right">send</i>
  </button>
    </div>
     <input type="hidden" name="username"  value="{{\Auth::user()->name}}">
                               
                <input type="hidden" value="{{csrf_token()}}" name="_token">

                </form>
                <form action="imagelinkupload" method="post" enctype="multipart/form-data" id="linkform" ng-show="linkupload">
                  
                   <div style="text-align: center;" class="input-field">
                   <label for="title">Image Link</label>
                <input type="text" name="imagelink" required="required">
                   </div>



                  <div style="text-align: center;">
                    <button class="btn waves-effect waves-light" type="submit" name="submit" value="submit">Submit
                   <i class="material-icons right">send</i>
                 </button>
                   </div>
                   <input type="hidden" name="username"  value="{{\Auth::user()->name}}">
                   <input type="hidden" value="{{csrf_token()}}" name="_token">

                </form>


        @endif
        <div style="text-align: center;">
                <label><strong style="font-weight: normal;">Images</strong></label>
             
              <p>
      <input type="checkbox" class="filled-in" id="filled-in-box2" ng-model="imageshow" ng-disabled="imagedisabled1" ng-click="checkboxcheck1()"/>
      <label for="filled-in-box2" style="font-size: 15px;">Images</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="checkbox" class="filled-in" id="filled-in-box3" ng-model="linkshow" ng-disabled="linkdisabled1" ng-click="checkboxcheck1()" />
      <label for="filled-in-box3" style="font-size: 15px;">Links</label>
    </p>

                   </div>
                   <div ng-show="imageshow">
                     
        @foreach($user as $users)
        <a href="{{$users->name}}">
        <img src="{{$users->name}}" alt="" width="auto" height="auto" style="max-height: 20%;max-width: 20%;">
        </a>
        @endforeach

        @foreach($usergal as $usersgal)
        <a href="{{$usersgal->imagename}}">
          <img src="{{$usersgal->imagename}}" alt="" width="auto" height="auto" style="max-height: 20%;max-width: 20%;">
        </a>
        @endforeach
                   </div>
<div ng-show="linkshow">
  <ul class="collection with-header">
        <li class="collection-header"><h4>Links</h4></li>
   @foreach($userlin as $userslin)
         <li class="collection-item"><a href="{{$userslin->imagelink}}">
          {{$userslin->imagelink}}
        </a></li>
        @endforeach
      </ul>
</div>

        </div>
        <div ng-show="tab ===2">
          @if(Auth::check())
          <hr>
           <form action="videoaddition" method="post" id="videoform">

<div style="text-align: center;">
                <label><strong style="font-weight: normal;">Upload Video</strong></label>
                   </div>
                   <div style="text-align: center;" class="input-field">
                   <label for="title">Video Link</label>
                <input type="text" name="videolink" required="required">
                   </div>

    <div style="text-align: center;">
      
    <button class="btn waves-effect waves-light" type="submit" name="submit" value="submit">Submit
    <i class="material-icons right">send</i>
  </button>
    </div>

                <input type="hidden" value="{{csrf_token()}}" name="_token">

                </form>
                @endif
                <hr>
                <div align="center">
                  
                @foreach($uservid as $usersvid)
              
              <iframe width="auto" height="auto" src="{{$usersvid->videolink}}"  frameborder="0" allowfullscreen>
</iframe>
         

          @endforeach
                </div>
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

$scope.isAtTop=true;

$scope.navigatechange=function(){

if (isAtTop) 
{
  $scope.navigate="#top";
  $scope.isAtTop=false;
}
else
{
  $scope.navigate="#bottom";
  $scope.isAtTop=true;
}


};

$scope.checkboxcheck=function(){

if($scope.imageupload)
{
 // $scope.linkupload=false;
  $scope.linkdisabled=true;
}
if(!$scope.imageupload)
{
  $scope.linkdisabled=false;
}
if($scope.linkupload)
{
  $scope.imagedisabled=true;
  //$scope.imageupload=false;
}
if(!$scope.linkupload)
{
  $scope.imagedisabled=false;
}


};

$scope.checkboxcheck1=function(){

if($scope.imageshow)
{
 // $scope.linkshow=false;
  $scope.linkdisabled1=true;
}
if(!$scope.imageshow)
{
  $scope.linkdisabled1=false;
}
if($scope.linkshow)
{
  $scope.imagedisabled1=true;
  //$scope.imageshow=false;
}
if(!$scope.linkshow)
{
  $scope.imagedisabled1=false;
}


};



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

    $(document).ready(function(){
      $('.carousel').carousel();
    });

</script>

<script src="js/pace.js"></script>


    </body>
</html>
