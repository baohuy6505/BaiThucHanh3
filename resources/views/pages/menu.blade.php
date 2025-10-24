@php
$categories = ['Coffee', 'Tea', 'Bakery'];
@endphp

@extends('layouts.app')

@section('title', 'Menu')

@section('content')
<section id="menu">
  <div class="container">
    <h2 class="menu__title">MENU</h2>

    @foreach($categories as $category)
      <div class="menu__box">
        <h3 class="menu__box-title">{{ strtoupper($category) }}</h3>
        <div class="row">
          @foreach($drinks as $drink)
            @if($drink['category'] == $category)
              <div class="col-md-4 col-12">
                <div class="menu__card">
                  <div class="menu__image">
                    <img src="{{$drink['image']}}" alt="" class="menu__img" />
                  </div>
                  <div class="menu__content">
                    <h3 class="menu__card-title">{{$drink['name']}}</h3>
                    <p class="menu__card-price"> {{ number_format($drink['price'], 0, ',', '.') }} ₫</p>
                    <p class="menu__card-desc">{{$drink['description']}}</p>
                  </div>
                  <a href="{{ route('detail', ['id' => $drink['id']]) }}" class="menu__card-link">Xem thêm</a>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    @endforeach

  </div>
</section>
@endsection
