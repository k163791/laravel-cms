@extends('layouts.app')

@section('content')
@include('admin.includes.errors')
  <div class="card">
    <div class="card-header"> Create a new category </div>
    <div class="card-body">
      <form class="" action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@stop
