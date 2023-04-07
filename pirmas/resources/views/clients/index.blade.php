@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8 ">
    <div class="card mt-5">
        <div class="card-header">
            <h1>Clients list</h1>
        </div>
            <div class="card-body">
                <ul class="list-group">
                  @foreach($clients as $client)
                  <li class="list-group-item">
                    <div class="client-line">
                    <div class="client-info">
                      {{ $client->name }}
                      {{ $client->surname }}
                      <span>{{ $client->tt ? 'TIK TOK' : 'FB' }}</span>
                    </div>
                    <div class="buttons">
                      <a href="{{route('clients-show', $client)}}" class="btn btn-info">Show</a>
                      <a href="{{route('clients-edit', $client)}}" class="btn btn-success">Edit</a>
                      <form action="#" method="post">
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                    </div>
                  </li>  
                  @endforeach
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection