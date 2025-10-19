@extends('layouts.app')  {{-- Kế thừa layout cha --}}

@section('title', 'Giới thiệu')  {{-- Chèn tiêu đề riêng --}}

@section('content')  {{-- Phần thân được “đổ” vào @yield('content') --}}
 <section id="about">
      <div class="container">
        <h2 class="about__title">ABOUT</h2>
        <div class="about__body row">
           <div class="col-md-6 col-12 mb-4 mb-md-0">
    <img src="./img/about.jpg" alt="About Us" class="img-fluid rounded shadow about__img" />
  </div>
           <div class="col-md-6 col-12">
             <div class="about__content">
            <div class="about__content-title">The Gemini Roastery</div>
            <p class="about__desc">
              Từ những hạt cà phê chọn lọc, được trồng trên những cao nguyên
              ngập nắng và gió, mỗi ly café không chỉ là thức uống mà còn là một
              câu chuyện đầy cảm hứng về thiên nhiên, con người và thời gian.
              Những hạt café trải qua quá trình thu hoạch tỉ mỉ, được rang xay
              bởi những nghệ nhân giàu tâm huyết, để mang đến hương thơm nồng
              nàn, vị đắng dịu và dư vị ngọt ngào, tạo nên trải nghiệm khó quên
              trong từng ngụm. Trong không gian ấm áp của quán, từng ly café kể
              về hành trình của niềm đam mê, tình yêu và sự chăm chút tỉ mỉ. Đây
              là nơi bạn có thể tạm gác lại bộn bề cuộc sống, nhâm nhi hương vị
              đậm đà, lắng nghe câu chuyện của đất trời, và tìm thấy cảm hứng,
              sự bình yên và năng lượng để bắt đầu một ngày mới. Café không chỉ
              là thức uống – đó là nghệ thuật, là khoảnh khắc, là kết nối giữa
              con người với thiên nhiên và chính bản thân mình
            </p>
          </div>
           </div>
        </div>
      </div>
    </section>    
@endsection