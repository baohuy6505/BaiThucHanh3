@extends('layouts.app')  {{-- Kế thừa layout cha --}}

@section('title', 'Trang chủ')  {{-- Chèn tiêu đề riêng --}}

@section('content')  {{-- Phần thân được “đổ” vào @yield('content') --}}
     <section id="hero">
      <div class="container">
        <div class="hero__content">
          <h2 class="hero__title">
            Thưởng thức hương vị – Khơi nguồn năng lượng!
          </h2>
          <p class="hero__subtitle">
            Ly café đậm đà, khơi nguồn cảm hứng mỗi ngày.
          </p>
          <a href="" class="hero__btn">Xem thêm</a>
        </div>
      </div>
    </section>
    <section id="featured">
      <div class="container">
        <h2 class="featured__title">Nổi bật</h2>
        <div class="featured__list-card row">
@foreach($drinks as $drink)
<div class="col-md-4 col-12">
    <div class="featured__card">
        <div class="featured__image">
            <img src="./img/tvlatte.jpeg" alt="" class="featured__img" />
        </div>
        <div class="featured__content">
            <h3 class="featured__card-title">{{ $drink['name'] }}</h3>
            <p class="featured__card-price"> {{ number_format($drink['price'], 0, ',', '.') }} ₫</p>
            <p class="featured__card-desc">{{ $drink['description'] }}</p>
        </div>
        <a href="{{ route('detail', ['id' => $drink['id']]) }}" class="featured__card-link">Xem thêm</a>
    </div>
</div>
@endforeach
        </div>
      </div>
    </section>
@endsection