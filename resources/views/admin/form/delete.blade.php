@extends('admin.client.client')
@section('title')
    {{ $title }}
@endsection
@section('header')
    @include('admin.client.header')
@endsection
@section('content')
<form method="post">
    @csrf


    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email Address</label>
      <input type="text" name ="email"class="form-control" placeholder="Input Your Email ... " >
        @error('email')
        <p style="color: red">{{  $message }}</p>
        @enderror
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Delete This User</button>
  </form>

@endsection

@section('footer')
    @include('admin.client.footer')
@endsection

