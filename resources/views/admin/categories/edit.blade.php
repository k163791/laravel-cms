@extends('layouts.app')

@section('content')
  @include('admin.includes.errors')
  <div class="card">
    <div class="card-header"> Update category: {{ $category->name }} </div>
    <div class="card-body">
      <form class="" action="{{ route('category.update', ['id' => $category->id ]) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" value=" {{ $category->name }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
@stop
