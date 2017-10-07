<!DOCTYPE html>
<html>
<head>
	<title>Laravel infinite scroll pagination</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
</head>
<body>

<h2>infinite scroll</h2>

@foreach($mypost as $myposts)

<h4>{{$myposts->id}}</h4>
<h5>{{$myposts->title}}</h5>
<h6>{{$myposts->name}}</h6>
<img src="{{$myposts->name}}" width="20%" height="20%">



@endforeach

<img src="http://2.bp.blogspot.com/-AiMo9ROALds/VKh7A6uPCII/AAAAAAAArTE/DWVd7bUJzG0/s1600/Lavanya-Tripathi-glamorous-photos-013.JPG">

{!!$mypost->render()!!}



</body>
</html>
