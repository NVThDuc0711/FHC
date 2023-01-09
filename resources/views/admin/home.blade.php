@extends('admin.client.client')
@section('title')
    {{ $title }}
@endsection


@section('header')
    @include('admin.client.header')
@endsection
@section('content')
    <div class="row" style="padding-top: 20px">
        <div class="col-3" style="margin-left: 5px">
            @include('admin.form.infor')
        </div>
        <div class="col-8">
            <h1 style="text-align: center">Danh Sách Khách Hàng</h1>
            <form action="" method="get">
                <b>Bộ Lọc</b>
                <br>
                <b>Giá : </b>
                <input name="total_bill_larger" type="form-control" placeholder="Lớn Hơn ...  ">
                <input name="total_bill_less" type="form-control" placeholder="Nhỏ Hơn ...  ">
                <button type="submit">Tìm Kiếm</button>
            </form>

            <hr>
            <b>Số lượng hoá đơn : {{ $countCustomer }}</b>
            <hr>
            <b>Tổng doanh thu : {{ $total }}</b>
            <br>
            <table class="table" border="2px">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Chi Tiết Hoá Đơn</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Tổng Tiền</th>
                    <th scope="col">Thời gian(năm,tháng,ngày)</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                  </tr>
                </thead>
                <tbody>
                    @if(!empty($userList))
                        @foreach ( $userList as $key => $value )
                        <tr>

                            <td>{{ $value->id}}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->bill }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ $value->total_bill }}</td>
                            <td>{{ $value->create_at  }}</td>
                            <td>
                                <a href="{{ url('admin/edit/'.$value->id )}}">Edit</a>
                            <td>
                                <a onclick="return confirm('Do you want delete this user ?')" href="{{ url('admin/delete/'.$value->id )}}">Delete</a>
                            </td>

                        </tr>
                        @endforeach
                    @else
                        <td>Không có dữ liệu</td>
                    @endif
                </tbody>
        </div>
    </div>
@endsection

@section('footer')
    @include('admin.client.footer')
@endsection
