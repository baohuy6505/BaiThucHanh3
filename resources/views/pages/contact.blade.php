@extends('layouts.app')  {{-- Kế thừa layout cha --}}

@section('title', 'Liên hệ')  {{-- Chèn tiêu đề riêng --}}

@section('content')  {{-- Phần thân được “đổ” vào @yield('content') --}}
      <section class="container my-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6 col-12 p-0">
           {{-- <div class="contact__content"> --}}
        <div class="contact__info h-100 text-white fs-5">
                <h2 class="contact__title">CONTACT</h2>
          <p class="contact__address contact__info-gr">
            🏢 123 Fashion Street, Ho Chi Minh City, Vietnam
          </p>
          <p class="contact__phone contact__info-gr">📞+84 123 456 789</p>
          <p class="contact__email contact__info-gr">
            📧 support@yourbrand.com
          </p>
          <p class="contact__hours contact__info-gr">
            🕒 Mon – Sat: 9:00 AM – 8:00 PM
          </p>
          <div class="footer__social-icons">
            <a class="footer__social-face footer__social-item" href="#"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
            <a class="footer__social-ins footer__social-item" href="#"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a class="footer__social-tik footer__social-item" href="#"
              ><i class="fa-brands fa-tiktok"></i
            ></a>
          </div>
        </div>
         </div>
        <div class="col-md-6 col-12 p-0">
          <form class="contact__form" action="#">
          <label class="contact__form-label" for="name">Your Name</label>
          <input
            class="contact__form-inp"
            type="text"
            id="name"
            name="name"
            required
          />

          <label class="contact__form-label" for="email">Your Email</label>
          <input
            class="contact__form-inp"
            type="email"
            id="email"
            name="email"
            required
          />

          <label class="contact__form-label" for="message">Message</label>
          <textarea
            class="contact__form-inp"
            id="message"
            name="message"
            rows="5"
            required
          ></textarea>
          <button class="contact__form-btn" type="submit">Send Message</button>
        </form>
        </div>
      {{-- </div> --}}
       
      </div>
    </section>
@endsection