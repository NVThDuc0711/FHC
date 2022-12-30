<form method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Tên khách hàng : </label>
        <input type="text" name ="name"class="form-control" placeholder="Nhập Tên Khách Hàng ..." value="{{ old('name') }}">
        @error('name')
        <p style="color: red">{{  $message }}</p>
        @enderror
      </div>

    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Số điện thoại : </label>
        <input type="text" name ="phone"class="form-control" placeholder="Nhập Số Điện Thoại ..." value="{{ old('phone') }}" >
        @error('phone')
        <p style="color: red">{{  $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Chi Tiết Hoá Đơn : </label>
        <input type="text" name ="bill"class="form-control" placeholder="Nhập Chi Tiết Hoá Đơn ..." value="{{ old('bill') }}" >
        @error('bill')
        <p style="color: red">{{  $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Địa chỉ : </label>
        <input type="text" name ="address"class="form-control" placeholder="Nhập Địa Chỉ ... " value="{{ old('address') }}">
        @error('address')
            <p style="color: red">{{  $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tổng Tiền : </label>
        <input type="text" name ="total_bill"class="form-control" placeholder="Nhập Tổng Tiền ... " value="{{ old('total_bill') }}" >
        @error('total_bill')
            <p style="color: red">{{  $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Thời gian</label>
        <input type="text" name ="create_at"class="form-control" placeholder="Nhập Thời Gian ... " value="{{ old('create_at') }}" >
        @error('create_at')
            <p style="color: red">{{  $message }}</p>
        @enderror
    </div>


    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Thêm Hoá Đơn</button>
  </form>
