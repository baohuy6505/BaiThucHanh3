<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $drink = [
    [
        'id' => 1,
        'name' => 'Tinh Vân Latte',
        'category' => 'Coffee',
        'price' => '55000',
        'description' => 'Latte ngọt ngào kết hợp cùng với lớp bọt sữa mịn như mây.',
        'image' => 'img/tvlatte.jpeg'
    ],
    [
        'id' => 2,
        'name' => 'Hố Đen Americano',
        'category' => 'Coffee',
        'price' => '45000',
        'description' => 'Americano đậm đà, mạnh mẽ đánh thức mọi giác quan.',
        'image' => 'img/2.jpg'
    ],
    [
        'id' => 3,
        'name' => 'Vũ Trụ Cold Brew',
        'category' => 'Coffee',
        'price' => '60000',
        'description' => 'Cold brew ủ lạnh 24 giờ, mang hương vị của cả vũ trụ.',
        'image' => 'img/3.png'
    ],
    [
        'id' => 4,
        'name' => 'Dải Ngân Hà Macchiato',
        'category' => 'Coffee',
        'price' => '58000',
        'description' => 'Sự kết hợp hoàn hảo giữa espresso và vệt sữa trắng.',
        'image' => 'img/4.webp'
    ],
    [
        'id' => 5,
        'name' => 'Trà Chanh Dây Vũ Trụ',
        'category' => 'Tea',
        'price' => '49000',
        'description' => 'Trà chanh dây thanh mát, mang vị chua nhẹ và hương thơm tự nhiên.',
        'image' => 'img/5.jpg'
    ],
    [
        'id' => 6,
        'name' => 'Trà Chanh Thiên Hà',
        'category' => 'Tea',
        'price' => '45000',
        'description' => 'Trà chanh tươi kết hợp cùng mật ong dịu nhẹ, sảng khoái và dễ chịu.',
        'image' => 'img/6.jpg'
    ],
    [
        'id' => 7,
        'name' => 'Trà Hoa Cúc Sao Mai',
        'category' => 'Tea',
        'price' => '52000',
        'description' => 'Trà hoa cúc thơm dịu giúp thư giãn, mang lại cảm giác bình yên.',
        'image' => 'img/7.jpg'
    ],
    [
        'id' => 8,
        'name' => 'Trà Sữa Thiên Hà',
        'category' => 'Tea',
        'price' => '55000',
        'description' => 'Trà đen đậm vị kết hợp sữa tươi và trân châu mềm dai.',
        'image' => 'img/8.png'
    ],
    [
        'id' => 9,
        'name' => 'Bánh Mây Matcha',
        'category' => 'Bakery',
        'price' => '65000',
        'description' => 'Bánh bông lan vị matcha thơm nhẹ, béo ngậy lớp kem tươi.',
        'image' => 'img/9.jpg'
    ],
    [
        'id' => 10,
        'name' => 'Bánh Sao Kim Socola',
        'category' => 'Bakery',
        'price' => '70000',
        'description' => 'Bánh socola đậm đà, phủ lớp ganache mịn như nhung.',
        'image' => 'img/10.jpg'
    ],
    [
        'id' => 11,
        'name' => 'Bánh Dâu Thiên Tinh',
        'category' => 'Bakery',
        'price' => '68000',
        'description' => 'Bánh kem dâu tây tươi ngọt ngào, cân bằng vị chua nhẹ.',
        'image' => 'img/11.jpg'
    ],
    [
        'id' => 12,
        'name' => 'Croissant Ánh Dương',
        'category' => 'Bakery',
        'price' => '55000',
        'description' => 'Bánh croissant bơ Pháp, giòn rụm và tan ngay trong miệng.',
        'image' => 'img/12.jpg'
    ],
];

    protected $bean = [
    [
        'id' => 1,
        'name' => 'Hạt Sao Chổi (Ethiopia)',
        'origin' => 'Yirgacheffe, Ethiopia',
        'notes' => 'Hương hoa nhài, vị chua thanh của quả mọng.',
        'image' => 'img/B1.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Hạt Thiên Thạch (Colombia)',
        'origin' => 'Huila, Colombia',
        'notes' => 'Vị ngọt caramel, sô cô la và một chút hương cam.',
        'image' => 'img/b2.jpg'
    ],
    [
        'id' => 3,
        'name' => 'Hạt Sao Bắc Đẩu (Brazil)',
        'origin' => 'Minas Gerais, Brazil',
        'notes' => 'Hương vị cân bằng giữa chocolate, hạt dẻ và caramel nhẹ.',
        'image' => 'img/B3.jpg'
    ],
    [
        'id' => 4,
        'name' => 'Hạt Ánh Trăng (Vietnam)',
        'origin' => 'Đà Lạt, Việt Nam',
        'notes' => 'Vị đậm đà truyền thống, hậu vị đắng nhẹ và hương cacao.',
        'image' => 'img/B4.webp'
    ],
    [
        'id' => 5,
        'name' => 'Hạt Tinh Vân Xanh (Kenya)',
        'origin' => 'Nyeri, Kenya',
        'notes' => 'Vị chua táo đỏ, hương hoa quả tươi và vị ngọt đậm ở hậu vị.',
        'image' => 'img/B5.jpg'
    ],
    [
        'id' => 6,
        'name' => 'Hạt Sao Băng (Guatemala)',
        'origin' => 'Antigua, Guatemala',
        'notes' => 'Mùi thơm mật ong, chocolate đen và cam quýt.',
        'image' => 'img/B6.jpg'
    ],
];

}
