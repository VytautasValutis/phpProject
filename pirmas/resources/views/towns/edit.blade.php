@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 ">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Edit Towns</h1>
        </div>
            <div class="card-body">
                <form action="{{route('towns-update', $town)}}" method="post">
                    <div class="mb-3">
                        <label class="form-label">town name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', $town->name) }}">
                        <div class="form-text">Please add town name here</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @csrf
                    @method('put')
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection