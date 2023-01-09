@extends('admin.client.client')
@section('title')
    {{ $title }}
@endsection


@section('header')
    @include('admin.client.header')
@endsection
@section('content')
<div class="row" style="padding-top: 20px">
    <div class="col-1">
    </div>
    <div class="col-3">
        @include('admin.form.product.infor')
    </div>
    <div class="col-7">
        <table class="table" border="2px">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Họ</th>
                <th scope="col">Giá</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xoá</th>
                <h1 style="text-align: center">Danh sách sản phẩm</h1>
                <div class="row">
                    <div class="col-4">
                        <b>Bộ Lọc :</b>
                        <br>

                        <form action="" method="get">
                            <select  class ="form-control" name ="family">
                                <option value="">Tất Cả Các Họ</option>
                                @if (!empty(getAllProducts()))
                                @foreach (getAllProducts() as $item)
                                    <option value="{{ $item->family }}">{{ $item->family }}</option>
                                @endforeach
                            @endif
                            </select>
                            <button class="submit">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <b style="text-align: center">Số lượng sản phẩm : {{ $countProducts }}</b>
              </tr>
            </thead>
            <tbody>
                @if(!empty($ListProducts))
                    @foreach ( $ListProducts as $key => $value )
                    <tr>

                        <td>{{ $value ->id }}</td>
                        <td>{{ $value ->name }}</td>
                        <td>{{ $value ->family }}</td>
                        <td>{{ $value->price }}</td>

                        <td>
                            <a href="{{ url('admin/product/edit/'.$value->id) }}">Sửa</a>
                        <td>
                            <a onclick="return confirm('Do you want delete this product ?')" href="{{ url('admin/product/delete/'.$value->id) }}">Xoá</a>
                        </td>

                    </tr>
                    @endforeach
                @else
                    <p>Không có dữ liệu</p>
                @endif


            </tbody>
    </div>
</div>
@endsection

@section('footer')
    @include('admin.client.footer')
@endsection
