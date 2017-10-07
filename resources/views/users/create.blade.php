@extends('layouts.master')

@section('content')

<div class="title" style="font-size: 40px;text-align: center;color:#3498DB">Register</div>
@if(count($errors))
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
{!! Form::open(array('route'=>'users.store'))  !!}
<div class="form-group">
	{!!Form::label('name','Username')!!}
	{!!Form::text('name',null,array('class'=>'form-control'))!!}
</div>
<div class="form-group">
	{!!Form::label('email')!!}
	{!!Form::text('email',null,array('class'=>'form-control'))!!}
</div>
<div class="form-group">
	{!!Form::label('mobileno')!!}
	{!!Form::text('mobileno',null,array('class'=>'form-control'))!!}
</div>
<div class="form-group">
	{!!Form::label('password')!!}
	{!!Form::password('password',array('class'=>'form-control'))!!}
</div>
{!!Form::token()!!}
{!!Form::submit(null,array('class'=>'btn btndefault'))!!}
{!!Form::close()!!}
<br>
<ul class="nav nav-pills"><li class="nav nav-pills">{{link_to_route('login','Already Registered... Login')}}</li></ul>


@endsection