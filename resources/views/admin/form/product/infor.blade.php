<form method="post">
    @csrf

    <div class="mb-3">
        <label for="exampleInputName1" class="form-label">Tên : </label>
        <input type="text" name ="name"class="form-control" placeholder="Nhập tên ..." >
        @error('name')
        <p style="color: red">{{  $message }}</p>
        @enderror
      </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Họ : </label>
      <input type="text" name ="family"class="form-control" placeholder="Nhập họ ... " >
        @error('family')
           <p style="color: red">{{  $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Giá : </label>
        <input type="text" name ="price"class="form-control" placeholder="Nhập giá ..." >
        @error('price')
            <p style="color: red">{{  $message }}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
  </form>
