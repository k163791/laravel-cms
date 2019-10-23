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
    <div class="card-header"> Edit your profile </div>
    <div class="card-body">
      <form class="" action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">User</label>
          <input type="text" name="name" class="form-control" value="{{  $user->name }}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" value="" class="form-control">
        </div>
        <div class="">
          <label for="avatar">Upload new avatar</label>
          <input type="file" name="avatar" value="" class="form-control">
        </div>
        <div class="form-group">
          <label for="facebook">Facebook link</label>
          <input type="text" name="facebook" value="" class="form-control" value="{{ $user->profile->facebook }}">
        </div>
        <div class="form-group">
          <label for="youtube">Youtube link</label>
          <input type="text" name="youtube" value="" class="form-control" value="{{ $user->profile->youtube }}">
        </div>
        <div class="form-group">
          <label for="about">About you</label>
          <textarea name="about" id="about" class="form-control" rows="6" cols="6">{{ $user->profile->about }}</textarea>
        </div>

        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-success">Update Profile</button>
          </div>

        </div>
      </form>
    </div>
  </div>
@stop
