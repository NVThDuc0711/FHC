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
    <div class="row">
        <div class="col-4" style="padding-top: 20px ; padding-left:50px">
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Tên Khách Hàng</label>
                <input type="text" name ="name"class="form-control" placeholder="Input Your Name ..." value ="{{ old('name') ?? $userDetail->name }}">
                @error('name')
                <p style="color: red">{{  $message }}</p>
                @enderror
              </div>

              <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Số điện thoại : </label>
                <input type="text" name ="phone"class="form-control" placeholder="Nhập Số Điện Thoại ..." value="{{ old('phone') ?? $userDetail->phone }}" >
                @error('phone')
                <p style="color: red">{{  $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Chi Tiết Hoá Đơn : </label>
                <input type="text" name ="bill"class="form-control" placeholder="Nhập Chi Tiết Hoá Đơn ..." value ="{{ old('bill') ?? $userDetail->bill }}" >
                @error('bill')
                <p style="color: red">{{  $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Địa chỉ : </label>
                <input type="text" name ="address"class="form-control" placeholder="Nhập Địa Chỉ ... " value="{{ old('address') ?? $userDetail->address }}">
                @error('address')
                    <p style="color: red">{{  $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tổng Tiền : </label>
                <input type="text" name ="total_bill"class="form-control" placeholder="Nhập Tổng Tiền ... " value="{{ old('total_bill') ?? $userDetail->total_bill }}" >
                @error('total_bill')
                    <p style="color: red">{{  $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Thời gian</label>
                <input type="text" name ="create_at"class="form-control" placeholder="Nhập Thời Gian ... " value="{{ old('create_at') ?? $userDetail->create_at }}" >
                @error('create_at')
                    <p style="color: red">{{  $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Cập Nhật</button>
          </form>
        </div>
    </div>

@endsection

@section('footer')
    @include('admin.client.footer')
@endsection




