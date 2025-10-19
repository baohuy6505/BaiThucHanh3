
{{-- resources/views/layouts/header.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top" style="min-height: 70px">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">
      ☕ T3 Roastery Coffee
    </a>

    {{-- Nút thu gọn khi trên mobile --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- Menu --}}
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{$activePage == '/' ? 'active' : ''}}" href="{{ route('/')}}">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$activePage == 'menu' ? 'active' : ''}}" href="{{ route('menu')}}">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$activePage == 'about' ? 'active' : ''}}" href="{{ route('about')}}">Giới thiệu</a>
        </li>
            <li class="nav-item">
          <a class="nav-link {{$activePage == 'beansStory' ? 'active' : ''}}" href="{{ route('beansStory')}}">Câu chuyện Hạt cà phê</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{$activePage == 'contact' ? 'active' : ''}}" href="{{ route('contact')}}">Liên hệ</a>
        </li>
      </ul>

      {{-- <div class="d-flex ms-lg-3">
        <a href="/login" class="btn btn-outline-light me-2">Đăng nhập</a>
        <a href="/register" class="btn btn-warning">Đăng ký</a>
      </div> --}}
    </div>
  </div>
</nav>   