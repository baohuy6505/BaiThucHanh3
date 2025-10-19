@extends('layouts.app')  {{-- Kế thừa layout cha --}}

@section('title', 'Câu chuyện hạt cà phê')  {{-- Chèn tiêu đề riêng --}}

@section('content')  {{-- Phần thân được “đổ” vào @yield('content') --}}
     <section id="bean">
      <div class="container">
        <h2 class="bean__title">beans-story</h2>
        <div class="bean__body">
          <div class="bean__box">
            <img src="./img/hatsaochoi.jpg" alt="" class="bean__img" />

            <div class="bean__box-content">
              <h3 class="bean__box-title">Tên: Hạt Sao Chổi (Ethiopia)</h3>
              <p class="bean__origin">Nguồn gốc: Yirgacheffe, Ethiopia</p>
              <p class="bean__note">
                Hương vị: Hương hoa nhài, vị chua thanh của quả mọng.
              </p>
            </div>
          </div>

          <div class="bean__box">
            <img src="./img/hatsaochoi.jpg" alt="" class="bean__img" />

            <div class="bean__box-content">
              <h3 class="bean__box-title">Tên: Hạt Sao Chổi (Ethiopia)</h3>
              <p class="bean__origin">Nguồn gốc: Yirgacheffe, Ethiopia</p>
              <p class="bean__note">
                Hương vị: Hương hoa nhài, vị chua thanh của quả mọng.
              </p>
            </div>
          </div>

          <div class="bean__box">
            <img src="./img/hatsaochoi.jpg" alt="" class="bean__img" />

            <div class="bean__box-content">
              <h3 class="bean__box-title">Tên: Hạt Sao Chổi (Ethiopia)</h3>
              <p class="bean__origin">Nguồn gốc: Yirgacheffe, Ethiopia</p>
              <p class="bean__note">
                Hương vị: Hương hoa nhài, vị chua thanh của quả mọng.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection