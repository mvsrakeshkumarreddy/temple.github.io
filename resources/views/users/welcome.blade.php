@extends('layouts.master1')

@section('content')
<hr>
<h3 style="text-align: center;font-family: cursive; font-size: 30px">welcome {{\Auth::user()->name}}</h3>

<hr>


@endsection