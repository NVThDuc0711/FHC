<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ Route('admin.home') }}">Food Home Crayfish </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav" style="padding-left: 800px">
          <a class="nav-link active" aria-current="page" href="{{ Route('admin.home') }}">Trang Chủ</a>
          <a class="nav-link" href="{{ Route('admin.product.list') }}">Cửa Hàng</a>
          <a class="nav-link" href="{{ Route('admin.about') }}">Giới Thiệu</a>
          <a class="nav-link" href="{{ Route('admin.contact') }}">Liên Hệ</a>
        </div>
      </div>
    </div>
  </nav>
