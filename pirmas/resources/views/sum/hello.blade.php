@extends('sum.index')

@section('title', 'hello')
@section('main')

@if($rez > 100)

<h1 style="color: crimson;">

@else

<h1 style="color: skyblue;">

@endif

SUMA: {{$rez}} 
</h1>

@endsection