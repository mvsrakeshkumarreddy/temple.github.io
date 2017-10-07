@extends('layouts.master1')

@section('content')




@if(\Auth::check())
		<div class="title" style="font-size: 20px;text-align: center;color: #2ECC71">welcome <strong>{{\Auth::user()->name}}</strong></div><br>
        <div class="title" style="font-size: 20px;text-align: center;color: #2ECC71">your email id is <strong>{{\Auth::user()->email}}</strong></div><br>
        <div class="title" style="font-size: 20px;text-align: center;color: #2ECC71">your mobile no is <strong>{{\Auth::user()->mobileno}}</strong></div>

@else
<br>
<br>
<div class="title" style="font-size: 40px;text-align: center;color:#3498DB;font-family: cursive;">Login</div>

<hr>
@if(count($errors))
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>  {{ $error  }}  </li>
		@endforeach
	</ul>
</div>
@endif

{!! Form::open(array('route'=>'handleLogin'))!!}
<div class="container">
	<div class="col s12 m6 offset-m3">
		
<div class="input-field">
	{!! Form::label('email') !!}
	{!! Form::text('email',null,array('class'=>'form-control'))!!}
</div>
	</div>
<br>
<div class="input-field">
	{!! Form::label('password')!!}
	{!! Form::password('password',array('class'=>'form-control'))!!}
</div>
<div align="center">
	
{!! Form::token()!!}
{!!Form::submit(null,array('class'=>'btn waves-effect waves-light'))!!}

{!!Form::close()!!}
</div>
</div>
<br>
<div class="container">
	<div class="col s12 m6 offset-m3">
		
<ul class="nav nav-pills" ng-show="false"><li nav nav-pills>{{link_to_route('users.create','New User?.. Register')}}</li></ul>
	</div>

</div>
<br>

@endif
@endsection