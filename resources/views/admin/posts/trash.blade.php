@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">
    Trashed Posts
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <thead>
        <th>Image</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Restore</th>
        <th>Delete</th>
      </thead>
      <tbody>
        @if($posts->count() > 0)
          @foreach($posts as $post)
            <tr>
              <td> <img src="{{$post->featured}}" alt="{{ $post->title }}" width="100px" height="50px"> </td>
              <td>{{ $post->title }}</td>
              <td> <a href="#" class="btn btn-info">
                <i class="fa fa-edit"></i>
              </a> </td>
              <td> <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-success">
                Restore
              </a> </td>
              <td> <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger">
                Delete
              </a> </td>
            </tr>
          @endforeach
        @else
        <tr>
          <th colspan="5" class="text-center">Trash is empty</th>
        </tr>
        @endif
      </tbody>
    </table>
  </div>
</div>
@stop
