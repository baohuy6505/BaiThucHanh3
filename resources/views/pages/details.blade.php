@extends('layouts.app')  {{-- Kế thừa layout cha --}}

@section('title', 'Giới thiệu')  {{-- Chèn tiêu đề riêng --}}

@section('content')  {{-- Phần thân được “đổ” vào @yield('content') --}}
<div class="container my-5">
        <!-- Product Details -->
        <div class="row mb-5">
            <!-- Product Image -->
            <div class="col-12 col-md-6 mb-4">
                <div class="product-image-container">
                  <img src="{{ asset('img/tvlatte.jpeg') }}" alt="Trà Chanh Dây Vũ Trụ" class="product-image img-fluid">                </div>
            </div>

            <!-- Product Info -->
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
             <div>
                     <div class="category-badge mb-3">
                    <i class="fas fa-leaf me-1"></i>Tea
                </div>
                
                <h1 class="display-5 fw-bold text-dark mb-3">Trà Chanh Dây Vũ Trụ</h1>
                
                <!-- Rating -->
                <div class="d-flex align-items-center mb-3">
                    <div class="star-rating me-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <span class="text-muted">(4.8/5 - 127 đánh giá)</span>
                </div>

                <!-- Price -->
                <div class="price-badge">49.000₫</div>

                <!-- Description -->
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-info-circle me-2 text-success"></i>Mô tả sản phẩm</h5>
                        <p class="card-text text-muted">
                            Trà chanh dây thanh mát, mang vị chua nhẹ và hương thơm tự nhiên. 
                            Được pha chế từ những lá trà tươi ngon nhất, kết hợp với chanh dây 
                            tự nhiên tạo nên hương vị độc đáo và sảng khoái.
                        </p>
                    </div>
                </div>
             </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
@endsection
{{-- CSS nhẹ cho trang detail --}}
<style>
    body {
        box-sizing: border-box;
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .product-image-container {
        background: linear-gradient(135deg, #fff3cd, #ffeaa7);
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-image {
        max-width: 100%;
        height: auto;
        border-radius: 15px;
        object-fit: cover;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .product-image:hover {
        transform: scale(1.03);
    }

    .price-badge {
        background: linear-gradient(135deg, #dc3545, #c82333);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 25px;
        font-weight: bold;
        font-size: 1.5rem;
        display: inline-block;
        margin: 1rem 0;
    }

    .category-badge {
        background: #6f42c1;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .star-rating {
        color: #ffc107;
        font-size: 1.2rem;
    }
</style>