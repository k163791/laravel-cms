@extends('layouts.app')

@section('content')
  @include('admin.includes.errors')
  <div class="card">
    <div class="card-header"> Update Tag: {{ $tag->tag }} </div>
    <div class="card-body">
      <form class="" action="{{ route('tag.update', ['id' => $tag->id ]) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="tag" class="form-control" value=" {{ $tag->tag }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
    </div>
  </div>
@stop
