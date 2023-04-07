@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 ">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Edit client</h1>
        </div>
            <div class="card-body">
                <form action="{{route('clients-update', $client)}}" method="post">
                    <div class="mb-3">
                        <label class="form-label">Client name</label>
                        <input type="text" class="form-control" name="name" value="{{ $client->name }}">
                        <div class="form-text">Add client name here</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Client surname</label>
                        <input type="text" class="form-control" name="surname" value="{{ $client->surname }}">
                        <div class="form-text">Add client surname here</div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="tt" name="tt" value = "{{ $client->tt ? 'checked' : '' }}">
                        <label class="form-check-label" for="tt">Has TikTok account</label>
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