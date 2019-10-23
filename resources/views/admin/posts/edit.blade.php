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
    <div class="card-header"> Edit post: {{ $post->title }} </div>
    <div class="card-body">
      <form class="" action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
          <label for="featured">Featured image</label>
          <input type="file" name="featured" class="form-control">
        </div>
        <div class="form-group">
          <label for="category">Select a Category</label>
          <select class="form-control" name="category_id" id="category">
            @foreach($categories as $category)
              <option value="{{ $category->id }}"
                  @if($post->category->id == $category->id)
                    selected
                  @endif
                >
                {{ $category->name }}</option>

            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tags">Select Tags</label>
          @foreach($tags as $tag)
          <div class="checkbox">
            <label for=""> <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
              @foreach($post->tags as $t)
                @if($tag->id == $t->id)
                  checked
                @endif
              @endforeach
              >
              {{ $tag->tag }}
            </label>
          </div>
          @endforeach
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" id="" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update Post</button>
        </div>
      </form>
    </div>
  </div>
@stop
