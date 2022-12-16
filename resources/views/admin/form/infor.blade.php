<form method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Tên khách hàng : </label>
        <input type="text" name ="name"class="form-control" placeholder="Nhập Tên Khách Hàng ..." >
        @error('name')
        <p style="color: red">{{  $message }}</p>
        @enderror
      </div>

    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Số điện thoại : </label>
        <input type="text" name ="phone"class="form-control" placeholder="Nhập Số Điện Thoại ..." >
        @error('phone')
        <p style="color: red">{{  $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Chi Tiết Hoá Đơn : </label>
        <input type="text" name ="bill"class="form-control" placeholder="Nhập Chi Tiết Hoá Đơn ..." >
        @error('bill')
        <p style="color: red">{{  $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Địa chỉ : </label>
        <input type="text" name ="address"class="form-control" placeholder="Nhập Địa Chỉ ... " >
        @error('address')
            <p style="color: red">{{  $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tổng Tiền : </label>
        <input type="text" name ="total_bill"class="form-control" placeholder="Nhập Tổng Tiền ... " >
        @error('total_bill')
            <p style="color: red">{{  $message }}</p>
        @enderror
    </div>


    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Thêm Hoá Đơn</button>
  </form>
