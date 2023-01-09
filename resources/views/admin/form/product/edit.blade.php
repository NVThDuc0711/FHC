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
    <div class="row" style="padding-top: 20px ; padding-left:50px">
        <div class="col-4" >
            <h1 style="text-align:center">Cập nhật thông tin sản phẩm</h1>
            <hr>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Tên : </label>
                <input type="text" name ="name"class="form-control" placeholder="Nhập Tên ..." value="{{ old('name') ?? $productDetail->name }}">
                @error('name')
                <p style="color: red">{{  $message }}</p>
                @enderror
              </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Họ : </label>
              <input type="text" name ="family"class="form-control" placeholder="Nhập Họ ... " value="{{ old('family') ?? $productDetail->family }}">
                @error('family')
                   <p style="color: red">{{  $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Giá : </label>
                <input type="text" name ="price"class="form-control" placeholder="Nhập Giá ... " value="{{ old('price') ?? $productDetail->price }}">
                @error('price')
                    <p style="color: red">{{  $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật</button>
          </form>

        </div>
        <div class="col-4">
            <h1 style="text-align:center">Thông tin sản phẩm</h1>
            <hr>
            <p>Tên : {{ $productDetail->name }}</p>
            <p>Họ : {{ $productDetail->family }}</p>
            <p>Giá : {{ $productDetail->price }}</p>
        </div>
    </div>


@endsection
