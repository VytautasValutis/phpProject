@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 ">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Add client</h1>
        </div>
            <div class="card-body">
                <form action="{{route('clients-store')}}" method="post">
                    <div class="mb-3">
                        <label class="form-label">Client name</label>
                        <input type="text" class="form-control" name="name">
                        <div class="form-text">Add client name here</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Client surname</label>
                        <input type="text" class="form-control" name="surname">
                        <div class="form-text">Add client surname here</div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="tt" name="tt">
                        <label class="form-check-label" for="tt">Has TikTok account</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection