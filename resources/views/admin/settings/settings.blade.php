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
    <div class="card-header"> Edit Blog Settings </div>
    <div class="card-body">
      <form class="" action="{{ route('settings.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="site_name">Site Name</label>
          <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
        </div>
        <div class="form-group">
          <label for="contact_phone">Contact Phone</label>
          <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
        </div>
        <div class="form-group">
          <label for="contact_email">Contact Email</label>
          <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Update Settings</button>
        </div>
      </form>
    </div>
  </div>
@stop
