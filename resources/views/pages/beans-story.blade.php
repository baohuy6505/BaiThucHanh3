@extends('layouts.app')  {{-- Kế thừa layout cha --}}

@section('title', 'Câu chuyện hạt cà phê')  {{-- Chèn tiêu đề riêng --}}

@section('content')  {{-- Phần thân được “đổ” vào @yield('content') --}}
     <section id="bean">
      <div class="container">
        <h2 class="bean__title">beans-story</h2>
        <div class="bean__body">
         @foreach($beans as $bean)
          <div class="bean__box">
            <img src="{{$bean['image']}}" alt="" class="bean__img" />

            <div class="bean__box-content">
              <h3 class="bean__box-title">Tên: {{$bean['name']}}</h3>
              <p class="bean__origin">Nguồn gốc: {{$bean['origin']}}</p>
              <p class="bean__note">
                Hương vị: {{$bean['notes']}}
              </p>
            </div>
          </div>
         @endforeach
        </div>
      </div>
    </section>
@endsection