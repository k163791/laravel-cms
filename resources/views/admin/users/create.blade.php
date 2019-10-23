@extends('layouts.app')

@section('content')
  @if(count($errors) > 0)
    <ul class="list-group">
      @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">{{ $error }}</li>
      @endforeach
    </ul>
  @endif
  <div class="card">
    <div class="card-header"> Create a new user </div>
    <div class="card-body">
      <form class="" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">User</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Add User</button>
        </div>
      </form>
    </div>
  </div>
@stop
