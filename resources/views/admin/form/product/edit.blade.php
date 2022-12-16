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
        <label for="exampleInputName1" class="form-label">Name</label>
        <input type="text" name ="name"class="form-control" placeholder="Input Your Name ..." value="{{ old('name') ?? $productDetail->name }}">
        @error('name')
        <p style="color: red">{{  $message }}</p>
        @enderror
      </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Famiy</label>
      <input type="text" name ="family"class="form-control" placeholder="Input Your Email ... " value="{{ old('family') ?? $productDetail->family }}">
        @error('family')
           <p style="color: red">{{  $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Price</label>
        <input type="text" name ="price"class="form-control" placeholder="Input Your Address ... " value="{{ old('price') ?? $productDetail->price }}">
        @error('price')
            <p style="color: red">{{  $message }}</p>
        @enderror
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
  </form>

@endsection
