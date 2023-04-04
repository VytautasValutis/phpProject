@extends('sum.index')

@section('title', 'CALCULATOR')

@section('main')

<form action="" method="post">
<h1>

<input type="text" name="X"> + <input type="text" name="Y">

</h1>

<button type="submit">CALC</button>
@csrf

</form>

@endsection