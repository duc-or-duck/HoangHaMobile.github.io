<!DOCTYPE html>
<html>

<head>
    <title>Danh sách Sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="./dienthoai.css">
    <link rel="stylesheet" href="./js-css/custom/header.css">
    <link rel="stylesheet" href="./js-css/custom/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php require "header.html" ?>
    <section>
        <div id="slider-container">
            <div id="slider">
                <div class="slide"><img src="./img/banner/banner-02.jpg" alt="Slide 1"></div>
                <div class="slide"><img src="./img/banner/hotsale-dien-thoai-vivo-1200x200.jpg" alt="Slide 2"></div>
                <div class="slide"><img src="./img/banner/infinix-note-30-5g-01.jpg" alt="Slide 3"></div>
                <div class="slide"><img src="./img/banner/web-htc-wildfire-e3-lite-01.jpg" alt="Slide 3"></div>
                <div class="slide"><img src="./img/banner/web-v29e-03.jpg" alt="Slide 3"></div>
            </div>

            <div class="button-container">
                <button class="button-left" onclick="prevSlide()">
                    <i class="fa-solid fa-caret-left" style="color: #ffffff;"></i>
                </button>
                <button class="button-right" onclick="nextSlide()">
                    <i class="fa-solid fa-caret-right" style="color: #ffffff;"></i>
                </button>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <ol class="breadcrumb" itemscope="" itemtype="">
                <li itemprop="itemListElement" itemscope="" itemtype="">
                    <a itemprop="item" href=""><span itemprop="name" content="Trang chủ"><i class="fa-solid fa-house" title="Trang chủ"></i> Trang chủ</span></a>
                    <meta itemprop="position" content="1">
                </li>

                <li itemprop="itemListElement" itemscope="" itemtype="">
                    <i class="fa fa-angle-right"></i> <a itemprop="item" href="./dienthoai.php" title="Điện thoại di động giá tốt, chính hãng - Hoàng Hà Mobile" class="actived"><span itemprop="name" content="Điện thoại">Điện thoại</span></a>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="product-filters2">
                <div class="left">
                    <strong class="label">Lọc danh sách:</strong>
                    <div class="facet">
                        <label><a href="">Danh mục <i class="icon-rightar"></i></a></label>
                        <div class="sub">
                            <ul>
                                <li><a href="">Apple</a></li>
                                <li><a href="">Samsung</a></li>
                                <li><a href="">Xiaomi</a></li>
                                <li><a href="">OPPO</a></li>
                                <li><a href="">TECNO</a></li>
                                <li><a href="">Nokia</a></li>
                                <li><a href="">realme</a></li>
                                <li><a href="">Vivo</a></li>
                                <li><a href="">HONOR</a></li>
                                <li><a href="">HTC</a></li>
                                <li><a href="">Infinix</a></li>
                                <li><a href="">ROG</a></li>
                                <li><a href="">Nubia</a></li>
                                <li><a href="">XOR</a></li>
                                <li><a href="">Masstel</a></li>
                                <li><a href="">TCL</a></li>
                                <li><a href="">Itel</a></li>
                                <li><a href="">Mới - tin đồn</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="facet">
                        <label>
                            <a href="">Thương hiệu <i class="icon-rightar"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="">Samsung <i class=" total">(27)</i></a></li>
                                <li><a href="">Apple <i class=" total">(28)</i></a></li>
                                <li><a href="">Xiaomi <i class=" total">(19)</i></a></li>
                                <li><a href="">Oppo <i class=" total">(16)</i></a></li>
                                <li><a href="">TECNO <i class=" total">(11)</i></a></li>
                                <li><a href="">Vivo <i class=" total">(17)</i></a></li>
                                <li><a href="">Nokia <i class=" total">(13)</i></a></li>
                                <li><a href="">realme <i class=" total">(13)</i></a></li>
                                <li><a href="">TCL <i class=" total">(7)</i></a></li>
                                <li><a href="">HONOR <i class=" total">(5)</i></a></li>
                                <li><a href="">Infinix <i class=" total">(5)</i></a></li>
                                <li><a href="">Itel <i class=" total">(4)</i></a></li>
                                <li><a href="">Nubia <i class=" total">(4)</i></a></li>
                                <li><a href="">XOR <i class=" total">(3)</i></a></li>
                                <li><a href="">HTC <i class=" total">(1)</i></a></li>
                                <li><a href="">Philips <i class=" total">(1)</i></a></li>
                                <li><a href="">Asus <i class=" total">(1)</i></a></li>
                                <li><a href="">Huawei <i class=" total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="">Giá <i class="icon-rightar"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="">Dưới 1 triệu <i class=" total">(14)</i></a></li>
                                <li><a href="">1 đến 2 triệu <i class=" total">(15)</i></a></li>
                                <li><a href="">2 đến 3 triệu <i class=" total">(22)</i></a></li>
                                <li><a href="">3 đến 4 triệu <i class=" total">(20)</i></a></li>
                                <li><a href="">4 đến 5 triệu <i class=" total">(15)</i></a></li>
                                <li><a href="">5 đến 6 triệu <i class=" total">(5)</i></a></li>
                                <li><a href="">6 đến 8 triệu <i class=" total">(17)</i></a></li>
                                <li><a href="">8 đến 10 triệu <i class=" total">(6)</i></a></li>
                                <li><a href="">10 đến 12 triệu <i class=" total">(7)</i></a></li>
                                <li><a href="">12 đến 15 triệu <i class=" total">(5)</i></a></li>
                                <li><a href="">15 đến 20 triệu <i class=" total">(11)</i></a></li>
                                <li><a href="">20 đến 100 triệu <i class=" total">(32)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="">Bluetooth <i class="icon-rightar"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="">v5.0 <i class=" total">(22)</i></a></li>
                                <li><a href="">Bluetooth 5.3 <i class=" total">(17)</i></a></li>
                                <li><a href="">v5.3 <i class=" total">(14)</i></a></li>
                                <li><a href="">A2DP <i class=" total">(12)</i></a></li>
                                <li><a href="">Bluetooth 5.0 <i class=" total">(11)</i></a></li>
                                <li><a href="">Có <i class=" total">(11)</i></a></li>
                                <li><a href="">v5.1 <i class=" total">(10)</i></a></li>
                                <li><a href="">LE <i class=" total">(9)</i></a></li>
                                <li><a href="">Bluetooth 5.2 <i class=" total">(7)</i></a></li>
                                <li><a href="">v4.2 <i class=" total">(7)</i></a></li>
                                <li><a href="">v5.2 <i class=" total">(5)</i></a></li>
                                <li><a href="">Có hỗ trợ <i class=" total">(3)</i></a></li>
                                <li><a href="">5.0 <i class=" total">(2)</i></a></li>
                                <li><a href="">5.3 <i class=" total">(2)</i></a></li>
                                <li><a href="">Bluetooth 4.2 <i class=" total">(2)</i></a></li>
                                <li><a href="">Bluetooth 5.1 <i class=" total">(2)</i></a></li>
                                <li><a href="">Bluetooth v5.3 <i class=" total">(2)</i></a></li>
                                <li><a href="">Bluetooth v5.3, Bluetooth Low Energy <i class=" total">(2)</i></a></li>
                                <li><a href="">5,2 <i class=" total">(1)</i></a></li>
                                <li><a href="">5.1 <i class=" total">(1)</i></a></li>
                                <li><a href="">5.2 <i class=" total">(1)</i></a></li>
                                <li><a href="">5.2, A2DP, LE, aptX HD, aptX thích ứng <i class=" total">(1)</i></a></li>
                                <li><a href="">5.3, A2DP, LE <i class=" total">(1)</i></a></li>
                                <li><a href="">BT5.1, hỗ trợ BLE、SBC、AAC、LDAC、APTX、APTX HD <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth v5.2 <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth 5.2, Support Bluetooth Low Energy, SBC, AAC, LDAC, aptX, aptX HD are supported. <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth 5.4 <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth v5.0 <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth v5.1 <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth v5.2 <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth® 5.3 (HFP + A2DP + AVRCP + HID + PAN + OPP), hỗ trợ Qualcomm® aptX™ Adaptive và aptX™ Lossless <i class=" total">(1)</i></a></li>
                                <li><a href="">Bluetooth™ 4.2 <i class=" total">(1)</i></a></li>
                                <li><a href="">Có, V5.1 <i class=" total">(1)</i></a></li>
                                <li><a href="">Hỗ trợ Bluetooth 5.3 <i class=" total">(1)</i></a></li>
                                <li><a href="">V4.2 <i class=" total">(1)</i></a></li>
                                <li><a href="">v4.3 <i class=" total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="">Độ phân giải <i class="icon-rightar"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="">5 MP <i class="total">(14)</i></a></li>
                                <li><a href="">HD+ (720 x 1600 Pixels) <i class="total">(14)</i></a></li>
                                <li><a href="">12 MP <i class="total">(13)</i></a></li>
                                <li><a href="">8 MP <i class="total">(13)</i></a></li>
                                <li><a href="">Camera trước TrueDepth 12MP, khẩu độ ƒ/1.9 <i class="total">(13)</i></a></li>
                                <li><a href="">8MP <i class="total">(12)</i></a></li>
                                <li><a href="">2 camera 12 MP <i class="total">(11)</i></a></li>
                                <li><a href="">12MP <i class="total">(10)</i></a></li>
                                <li><a href="">1179 x 2556 <i class="total">(7)</i></a></li>
                                <li><a href="">Chính: 48MP, khẩu độ ƒ/1.78 <i class="total">(7)</i></a></li>
                                <li><a href="">Telephoto: 12MP, khẩu độ ƒ/2.8 <i class="total">(7)</i></a></li>
                                <li><a href="">Ultra Wide: 12MP, khẩu độ ƒ/2.2 <i class="total">(7)</i></a></li>
                                <li><a href="">1290 x 2796 <i class="total">(6)</i></a></li>
                                <li><a href="">Chính: 48MP, khẩu độ ƒ/1.6 <i class="total">(6)</i></a></li>
                                <li><a href="">Cảm biến chính 50MP <i class="total">(6)</i></a></li>
                                <li><a href="">Ultra Wide: 12MP, khẩu độ ƒ/2.4 <i class="total">(6)</i></a></li>
                                <li><a href="">16 MP <i class="total">(5)</i></a></li>
                                <li><a href="">2340 x 1080 (Màn hình phẳng FHD+) <i class="total">(5)</i></a></li>
                                <li><a href="">32MP <i class="total">(5)</i></a></li>
                                <li><a href="">HD+ (720 x 1612) <i class="total">(5)</i></a></li>
                                <li><a href="">1170 x 2532 Pixels <i class="total">(4)</i></a></li>
                                <li><a href="">32 MP <i class="total">(4)</i></a></li>
                                <li><a href="">5MP <i class="total">(4)</i></a></li>
                                <li><a href="">8MP f/2.0 <i class="total">(4)</i></a></li>
                                <li><a href="">Camera chiều sâu 2MP f/2.4 <i class="total">(4)</i></a></li>
                                <li><a href="">Camera chính 50MP f/1.8 <i class="total">(4)</i></a></li>
                                <li><a href="">Chính 13 MP &amp; Phụ 2 MP <i class="total">(4)</i></a></li>
                                <li><a href="">Chính 50 MP &amp; Phụ 2 MP, 2 MP <i class="total">(4)</i></a></li>
                                <li><a href="">FHD+ (1080 x 2460) <i class="total">(4)</i></a></li>
                                <li><a href="">Full HD+ (1080 x 2400 Pixels) <i class="total">(4)</i></a></li>
                                <li><a href="">10 MP <i class="total">(3)</i></a></li>
                                <li><a href="">1080x2400 <i class="total">(3)</i></a></li>
                                <li><a href="">128*160 <i class="total">(3)</i></a></li>
                                <li><a href="">1600 × 720 (HD+) <i class="total">(3)</i></a></li>
                                <li><a href="">16MP <i class="total">(3)</i></a></li>
                                <li><a href="">200MP x 12MP x 10MP x 10MP <i class="total">(3)</i></a></li>
                                <li><a href="">2MP (F2.4) <i class="total">(3)</i></a></li>
                                <li><a href="">3088 x 1440 (Edge Quad HD+) <i class="total">(3)</i></a></li>
                                <li><a href="">50MP x 12MP x 10MP <i class="total">(3)</i></a></li>
                                <li><a href="">5MP F2.4 (Cận cảnh) <i class="total">(3)</i></a></li>
                                <li><a href="">Camera chiều sâu 0.08 MP <i class="total">(3)</i></a></li>
                                <li><a href="">Chính 48 MP &amp; Phụ 12 MP, 12 MP <i class="total">(3)</i></a></li>
                                <li><a href="">Chính 50 MP &amp; Phụ 2 MP <i class="total">(3)</i></a></li>
                                <li><a href="">Cảm biến chiều sâu <i class="total">(3)</i></a></li>
                                <li><a href="">Cảm biến macro 2MP f/2.4 <i class="total">(3)</i></a></li>
                                <li><a href="">FHD+ (1080 x 2400) <i class="total">(3)</i></a></li>
                                <li><a href="">HD+ (720 x 1600) <i class="total">(3)</i></a></li>
                                <li><a href="">HD+ (720 x 1612 Pixels) <i class="total">(3)</i></a></li>
                                <li><a href="">QVGA (240 x 320 Pixels) <i class="total">(3)</i></a></li>
                                <li><a href="">0.3 MP <i class="total">(2)</i></a></li>
                                <li><a href="">10 MP &amp; 4 MP <i class="total">(2)</i></a></li>
                                <li><a href="">1080 x 2040 Pixel <i class="total">(2)</i></a></li>
                                <li><a href="">1080 x 2400 (FHD+) <i class="total">(2)</i></a></li>
                                <li><a href="">1080x2460 <i class="total">(2)</i></a></li>
                                <li><a href="">12 MP (2Camera) <i class="total">(2)</i></a></li>
                                <li><a href="">12MP F2.2 (Siêu Rộng) <i class="total">(2)</i></a></li>
                                <li><a href="">13MP f/2.45 <i class="total">(2)</i></a></li>
                                <li><a href="">16MP f/2.4 <i class="total">(2)</i></a></li>
                                <li><a href="">16MP, f/2.0 <i class="total">(2)</i></a></li>
                                <li><a href="">2796 x 1290 Pixels <i class="total">(2)</i></a></li>
                                <li><a href="">32 MP f/2.5 <i class="total">(2)</i></a></li>
                                <li><a href="">32MP F2.2 <i class="total">(2)</i></a></li>
                                <li><a href="">32MP; f/2.4; FOV 89°; ống kính 5P lens, không hỗ trợ AF hay OIS <i class="total">(2)</i></a></li>
                                <li><a href="">50 MP + 12 MP + 10 MP <i class="total">(2)</i></a></li>
                                <li><a href="">50MP (F1.8) AF <i class="total">(2)</i></a></li>
                                <li><a href="">50MP F1.8 OIS (Rộng) <i class="total">(2)</i></a></li>
                                <li><a href="">50MP x 12MP x 10 MP <i class="total">(2)</i></a></li>
                                <li><a href="">50MP x 2MP x 2MP <i class="total">(2)</i></a></li>
                                <li><a href="">5MP f/2.2 <i class="total">(2)</i></a></li>
                                <li><a href="">64MP x 8MP x 2MP <i class="total">(2)</i></a></li>
                                <li><a href="">720 x 1612 (HD+) <i class="total">(2)</i></a></li>
                                <li><a href="">720 × 1612 <i class="total">(2)</i></a></li>
                                <li><a href="">8 MP, f/2.0 <i class="total">(2)</i></a></li>
                                <li><a href="">8.0 MP <i class="total">(2)</i></a></li>
                                <li><a href="">828 x 1792 Pixels <i class="total">(2)</i></a></li>
                                <li><a href="">8MP (F2.2) <i class="total">(2)</i></a></li>
                                <li><a href="">Camera 50 MP (f/1.8) <i class="total">(2)</i></a></li>
                                <li><a href="">Camera Chính 50MP f/1.8 <i class="total">(2)</i></a></li>
                                <li><a href="">Camera Cận cảnh 2MP f/2.4 <i class="total">(2)</i></a></li>
                                <li><a href="">Camera Góc siêu rộng 8MP f/2.2, Góc Rộng 120° <i class="total">(2)</i></a></li>
                                <li><a href="">Camera chân dung 2MP (f/2.4) <i class="total">(2)</i></a></li>
                                <li><a href="">Camera chính: 64MP; f/1.7; FOV 81°; ống kinh 6P; hỗ trợ AF; sử dụng động cơ vòng lặp mở. <i class="total">(2)</i></a></li>
                                <li><a href="">Camera góc rộng 13 MP f/1.9 AF <i class="total">(2)</i></a></li>
                                <li><a href="">Camera macro 2MP f/2.4 <i class="total">(2)</i></a></li>
                                <li><a href="">Camera trước ở màn hình phụ: 10 MP <i class="total">(2)</i></a></li>
                                <li><a href="">Camera ẩn dưới màn hình: 4 MP <i class="total">(2)</i></a></li>
                                <li><a href="">Chính 50 MP &amp; Phụ 12 MP, 10 MP <i class="total">(2)</i></a></li>
                                <li><a href="">Chính 50 MP &amp; Phụ 2 MP, 0.3 MP <i class="total">(2)</i></a></li>
                                <li><a href="">Chính 64MP + B&amp;W 2MP <i class="total">(2)</i></a></li>
                                <li><a href="">Chính: QXGA+ (2176 x 1812 Pixels) &amp; Phụ: HD+ (2316 x 904 Pixels) <i class="total">(2)</i></a></li>
                                <li><a href="">Cảm biến QVGA <i class="total">(2)</i></a></li>
                                <li><a href="">Cảm biến chiều sâu 2 MP f/2.4 <i class="total">(2)</i></a></li>
                                <li><a href="">Cảm biến chiều sâu QVGA <i class="total">(2)</i></a></li>
                                <li><a href="">Cảm biến chính 64 MP f/1.7 PDAF <i class="total">(2)</i></a></li>
                                <li><a href="">Cảm biến góc rộng 108MP f/1.9 <i class="total">(2)</i></a></li>
                                <li><a href="">Cảm biến góc siêu rộng 8MP f/2.2 <i class="total">(2)</i></a></li>
                                <li><a href="">FHD+ <i class="total">(2)</i></a></li>
                                <li><a href="">FHD+ (1080 x 2412) <i class="total">(2)</i></a></li>
                                <li><a href="">FHD+ 1080*2400 <i class="total">(2)</i></a></li>
                                <li><a href="">FHD+, 120Hz, 19.5:9 <i class="total">(2)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="">Kích thước màn hình <i class="icon-rightar"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="">6.7" <i class="total">(14)</i></a></li>
                                <li><a href="">6.1" <i class="total">(13)</i></a></li>
                                <li><a href="">6.67" <i class="total">(6)</i></a></li>
                                <li><a href="">6.5" <i class="total">(4)</i></a></li>
                                <li><a href="">6.56 inch <i class="total">(4)</i></a></li>
                                <li><a href="">6.78" <i class="total">(4)</i></a></li>
                                <li><a href="">2.4" <i class="total">(3)</i></a></li>
                                <li><a href="">6.1 inch <i class="total">(3)</i></a></li>
                                <li><a href="">6.56" <i class="total">(3)</i></a></li>
                                <li><a href="">6.67-inch <i class="total">(3)</i></a></li>
                                <li><a href="">6.7 inches <i class="total">(3)</i></a></li>
                                <li><a href="">6.72 inch（17.07cm） <i class="total">(3)</i></a></li>
                                <li><a href="">6.8 inch <i class="total">(3)</i></a></li>
                                <li><a href="">1.77" <i class="total">(2)</i></a></li>
                                <li><a href="">1.77” <i class="total">(2)</i></a></li>
                                <li><a href="">6,8" <i class="total">(2)</i></a></li>
                                <li><a href="">6.44 inch <i class="total">(2)</i></a></li>
                                <li><a href="">6.4” Infinity-O <i class="total">(2)</i></a></li>
                                <li><a href="">6.52" <i class="total">(2)</i></a></li>
                                <li><a href="">6.6 inch <i class="total">(2)</i></a></li>
                                <li><a href="">6.6" <i class="total">(2)</i></a></li>
                                <li><a href="">6.75" <i class="total">(2)</i></a></li>
                                <li><a href="">6.78” <i class="total">(2)</i></a></li>
                                <li><a href="">6.8 inches <i class="total">(2)</i></a></li>
                                <li><a href="22Ch%c3%ad"">Chính 6.7" <i class="total">(2)</i></a></li>
                                <li><a href="">Chính 7.6" &amp; Phụ 6.2" - Tần số quét 120 Hz <i class="total">(2)</i></a></li>
                                <li><a href="">Màn hình chính: 7.6" <i class="total">(2)</i></a></li>
                                <li><a href="">Màn hình phụ: 6.2" <i class="total">(2)</i></a></li>
                                <li><a href="">Phụ 3.4" <i class="total">(2)</i></a></li>
                                <li><a href="">1.77 inch <i class="total">(1)</i></a></li>
                                <li><a href="">16.7 million colors <i class="total">(1)</i></a></li>
                                <li><a href="">2.4 inch <i class="total">(1)</i></a></li>
                                <li><a href="">5.7" <i class="total">(1)</i></a></li>
                                <li><a href="">6,6" <i class="total">(1)</i></a></li>
                                <li><a href="">6,82” <i class="total">(1)</i></a></li>
                                <li><a href="">6.1‑inch <i class="total">(1)</i></a></li>
                                <li><a href="">6.3″ &amp; 7.8″ <i class="total">(1)</i></a></li>
                                <li><a href="">6.4 inch <i class="total">(1)</i></a></li>
                                <li><a href="">6.4 inch, màn hình đục lỗ <i class="total">(1)</i></a></li>
                                <li><a href="">6.4 inch（16.03cm） <i class="total">(1)</i></a></li>
                                <li><a href="">6.4" <i class="total">(1)</i></a></li>
                                <li><a href="">6.43" <i class="total">(1)</i></a></li>
                                <li><a href="">6.43'' <i class="total">(1)</i></a></li>
                                <li><a href="">6.5 inch <i class="total">(1)</i></a></li>
                                <li><a href="">6.5'' <i class="total">(1)</i></a></li>
                                <li><a href="">6.51 <i class="total">(1)</i></a></li>
                                <li><a href="">6.51 inches <i class="total">(1)</i></a></li>
                                <li><a href="">6.51" <i class="total">(1)</i></a></li>
                                <li><a href="">6.517" <i class="total">(1)</i></a></li>
                                <li><a href="">6.52 inch <i class="total">(1)</i></a></li>
                                <li><a href="">6.52” <i class="total">(1)</i></a></li>
                                <li><a href="">6.55" <i class="total">(1)</i></a></li>
                                <li><a href="">6.55” <i class="total">(1)</i></a></li>
                                <li><a href="">6.56" - Tần số quét 90 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.58" - Tần số quét 90 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.6 inches <i class="total">(1)</i></a></li>
                                <li><a href="">6.6" - Tần số quét 60 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.6" - tần số quét 120Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.62’’ <i class="total">(1)</i></a></li>
                                <li><a href="">6.64" - Tần số quét 90 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.6” Infinity-U <i class="total">(1)</i></a></li>
                                <li><a href="">6.7 inches <i class="total">(1)</i></a></li>
                                <li><a href="">6.7" - Tần số quét 120 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.7" - Tần số quét 60 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.71 inch <i class="total">(1)</i></a></li>
                                <li><a href="">6.72 inch <i class="total">(1)</i></a></li>
                                <li><a href="">6.73 inches <i class="total">(1)</i></a></li>
                                <li><a href="">6.74" <i class="total">(1)</i></a></li>
                                <li><a href="">6.74" - Tần số quét 90 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">6.7” <i class="total">(1)</i></a></li>
                                <li><a href="">6.8" <i class="total">(1)</i></a></li>
                                <li><a href="">Chính 6.7" &amp; Phụ 1.9" - Tần số quét 120 Hz <i class="total">(1)</i></a></li>
                                <li><a href="">Màn hình cong 3D 6.73" <i class="total">(1)</i></a></li>
                                <li><a href="">Màn hình ngoài: 3.26" <i class="total">(1)</i></a></li>
                                <li><a href="">Màn hình tai thỏ 6,6” <i class="total">(1)</i></a></li>
                                <li><a href="">Màn hình trong: 6.80" <i class="total">(1)</i></a></li>
                                <li><a href="">OLED 6.1‑inch <i class="total">(1)</i></a></li>
                                <li><a href="">Tần số quét: 1 - 120 Hz <i class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="facet">
                        <label>
                            <a href="">RAM <i class="icon-rightar"></i></a>
                        </label>
                        <div class="sub">
                            <ul>
                                <li><a href="">8GB <i class="total">(48)</i></a></li>
                                <li><a href="">4GB <i class="total">(18)</i></a></li>
                                <li><a href="">4 GB <i class="total">(17)</i></a></li>
                                <li><a href="">8 GB <i class="total">(12)</i></a></li>
                                <li><a href="">6GB <i class="total">(10)</i></a></li>
                                <li><a href="">2 GB <i class="total">(8)</i></a></li>
                                <li><a href="">6 GB <i class="total">(8)</i></a></li>
                                <li><a href="">12GB <i class="total">(7)</i></a></li>
                                <li><a href="">3 GB <i class="total">(5)</i></a></li>
                                <li><a href="">12 GB <i class="total">(4)</i></a></li>
                                <li><a href="">3GB <i class="total">(3)</i></a></li>
                                <li><a href="">48MB <i class="total">(3)</i></a></li>
                                <li><a href="">16GB <i class="total">(2)</i></a></li>
                                <li><a href="">2GB <i class="total">(2)</i></a></li>
                                <li><a href="">48 MB <i class="total">(2)</i></a></li>
                                <li><a href="">8(+4GB) <i class="total">(2)</i></a></li>
                                <li><a href="">8GB + 8GB <i class="total">(2)</i></a></li>
                                <li><a href="">+8GB mở rộng <i class="total">(1)</i></a></li>
                                <li><a href="">12G <i class="total">(1)</i></a></li>
                                <li><a href="">16 MB <i class="total">(1)</i></a></li>
                                <li><a href="">16MB <i class="total">(1)</i></a></li>
                                <li><a href="">4GB(+1GB) <i class="total">(1)</i></a></li>
                                <li><a href="">(1)</i></a></li>
                                <li><a href="">8GB (+10GB RAM ảo), LPDDR4X <i class="total">(1)</i></a></li>
                                <li><a href="">8GB + Mở rộng 8GB <i class="total">(1)</i></a></li>
                                <li><a href="">Không <i class="total">(1)</i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="facet">
                        <label>Sắp xếp <i class="icon-rightar"></i></label>
                        <div class="sub">
                            <ul>
                                <li><a href=""><span class="fa fa-angle-right"></span> Mặc định</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Sản phẩm mới - cũ</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Giá thấp đến cao</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Giá cao đến thấp</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Mới cập nhật</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Sản phẩm cũ</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Xem nhiều hôm nay</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Xem nhiều tuần này</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Xem nhiều tháng này</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Xem nhiều năm nay</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Xem nhiều nhất</a></li>
                                <li><a href=""><span class="fa fa-angle-right"></span> Kết quả tìm kiếm</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="list-product">
                <h1>Điện thoại</h1>

                <?php
                require 'db_config.php';

                // Hàm tìm kiếm sản phẩm theo tên
                function searchProductByName($kwd)
                {
                    global $conn;

                    $sql = "SELECT * FROM products WHERE name LIKE '%$kwd%'";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="col-content lts-product" id="product-list">';
                        while ($row = $result->fetch_assoc()) {
                            // Hiển thị thông tin sản phẩm
                            echo '<div class="item">';
                            echo '<div class="img">';
                            $imageSrc = $row["image"];
                            if ($imageSrc) {
                                echo '<a href="product_detail.php?id=' . $row["id"] . '" title="' . $row["name"] . '">';
                                echo '<img src="' . $imageSrc . '" alt="Ảnh" />';
                                echo '</a>';
                            } else {
                                echo 'Không có ảnh.';
                            }
                            echo '</div>';
                            if (stripos($row["name"], 'Iphone') !== false) {
                                echo '<div class="sticker sticker-left">
                            <span><img src="./img/logo-brand/apple.png" title="Chính hãng Apple"></span>
                        </div>';
                            }
                            echo '<div class="info">';
                            echo '<a href="product_details.php?product_id=' . $row['id'] . '" class="title" title="' . $row["name"] . '">' . $row["name"] . '</a>';
                            echo '<span class="price">';
                            if (isset($row["new_price"]) && $row["new_price"] !== '') {
                                echo '<strong>' . $row["new_price"] . ' đ</strong>';
                                if (isset($row["sale_price"])) {
                                    echo '<strike>' . $row["sale_price"] . ' đ</strike>';
                                }
                            } else {
                                echo '<strong>' . $row["sale_price"] . ' đ</strong>';
                            }
                            echo '</span>';
                            echo '<div style="padding-top: 8px; font-style: italic; text-align: left;">';
                            if ($row["change_price"] != '') {
                                echo '<label>Giá lên đời từ: <strong class="text-red">' . $row["change_price"] . ' đ</strong></label>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="note" title="' . $row["adv"] . '">';
                            echo '<span class="bag">KM: </span>';
                            echo '<label class="truncate-text">';
                            $adv = $row["adv"];
                            if (mb_strlen($adv, 'utf-8') > 30) {
                                $adv  = mb_substr($adv, 0, 30, 'utf-8') . '...';
                            }
                            echo $adv;
                            echo '</label>';
                            echo '<strong class="text-orange"> VÀ NHIỀU KM KHÁC</strong>';
                            echo '</div>';
                            echo '<div hidden>';
                            echo $row['color'];
                            echo '</div>';
                            echo '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo "Không tìm thấy sản phẩm nào.";
                    }
                }

                // Xử lý tìm kiếm nếu có từ khoá được gửi đi
                if (isset($_GET['kwd'])) {
                    $kwd = $_GET['kwd'];
                    searchProductByName($kwd);
                } else {
                    // Hiển thị toàn bộ danh sách sản phẩm nếu không có từ khoá tìm kiếm
                    $sql = "SELECT * FROM products
                    ORDER BY products.id DESC;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo '<div class="col-content lts-product" id="product-list">';
                        while ($row = $result->fetch_assoc()) {
                            // Hiển thị thông tin sản phẩm tương tự như trong mã hiển thị sản phẩm ban đầu
                            echo '<div class="item">';
                            echo '<div class="img">';
                            $imageSrc = $row["image"];
                            if ($imageSrc) {
                                echo '<a href="product_details.php?product_id=' . $row["id"] . '" title="' . $row["name"] . '">';
                                echo '<img src="' . $imageSrc . '" alt="Ảnh" />';
                                echo '</a>';
                            } else {
                                echo 'Không có ảnh.';
                            }
                            echo '</div>';
                            if (stripos($row["name"], 'Iphone') !== false) {
                                echo '<div class="sticker sticker-left">
                            <span><img src="./img/logo-brand/apple.png" title="Chính hãng Apple"></span>
                        </div>';
                            }
                            echo '<div class="info">';
                            echo '<a href="product_details.php?product_id=' . $row['id'] . '" class="title" title="' . $row["name"] . '">' . $row["name"] . '</a>';
                            echo '<span class="price">';
                            if (isset($row["new_price"]) && $row["new_price"] !== '') {
                                echo '<strong>' . $row["new_price"] . ' đ</strong>';
                                if (isset($row["sale_price"])) {
                                    echo '<strike>' . $row["sale_price"] . ' đ</strike>';
                                }
                            } else {
                                echo '<strong>' . $row["sale_price"] . ' đ</strong>';
                            }
                            echo '</span>';
                            echo '<div style="padding-top: 8px; font-style: italic; text-align: left;">';
                            if ($row["change_price"] != '') {
                                echo '<label>Giá lên đời từ: <strong class="text-red">' . $row["change_price"] . ' đ</strong></label>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="note" title="' . $row["adv"] . '">';
                            echo '<span class="bag">KM: </span>';
                            echo '<label class="truncate-text">';
                            $adv = $row["adv"];
                            if (mb_strlen($adv, 'utf-8') > 30) {
                                $adv  = mb_substr($adv, 0, 30, 'utf-8') . '...';
                            }
                            echo $adv;
                            echo '</label>';
                            echo '<strong class="text-orange"> VÀ NHIỀU KM KHÁC</strong>';
                            echo '</div>';
                            echo '<div hidden>';
                            echo $row['color'];
                            echo '</div>';
                            echo '</div>';
                        }
                        echo '</div>';
                    } else {
                        echo "Không có sản phẩm nào.";
                    }
                }
                // Đóng kết nối CSDL
                $conn->close();
                ?>
            </div>
            <div class="more-product" id="page-pager">
                <a href=""> Xem thêm sản phẩm</a>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="page-content page-content-img">
                <p><br></p>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>
                                <p>
                                    <span>
                                        Smartphone
                                        hay còn được biết tới là một loại điện thoại di động với hệ điều hành được tích
                                        hợp khiến cho 1 chiếc điện thoại trở nên đa công dụng hơn rất nhiều. Điện thoại
                                        di động từ trước đến nay phát triển theo 2 xu hướng. 1 là rất nhỏ, tiên lợi
                                        mang đi mọi nơi. 2 là to như chiếc tablet kết hợp giữa điện thoại và máy tính.
                                        Những chiếc điện thoại di động thường bỏ túi, thường được kết hợp các tính năng
                                        của một chiếc điện thoại thông thường như nghe và thực hiện các cuộc gọi thông
                                        thường, nhận tin nhắc văn bản và các tính năng phổ biến khác như là máy nghe
                                        nhạc, lịch, máy tính, trò chơi, máy ảnh và cả quáy quay video nữa, Hầu hết
                                        những chiếc điện thoại di động hiện nay đều có thể truy cập internet và cài đặt
                                        được nhiều ứng dụng từ bên thứ 3 trong CH play hay Appstore.&nbsp;</span>
                                    <o:p></o:p>
                                </p>
                                <p>
                                    <span>
                                        Điện thoại di động chính thức ra mắt và được chấp nhận từ năm
                                        1999 và được sử dụng phổ biến từ năm 2000. Hầu hết những chiếc điện thoại di
                                        động sản xuất từ năm 2012 trở đi đều có thể sử dụng 3G và 4G. Tính cho tới quý
                                        thứ 3 của năm 2012 thì đã có 1 tỷ chiếc điện thoại được bán ra trên toàn thế
                                        giới. TÍnh đến năm đã có 65% người sử dụng điện thoại di động là smartphone.
                                        Đến năm 2016, con số này đã chiếm tới 79% trong thị trường di động. Và hiện
                                        nay, điện thoại di động đa phần chạy hệ điều hành IOS và Android.</span>
                                    <o:p></o:p>
                                </p>
                                <p>
                                    <span>
                                        Vào đầu năm 2007, Apple giới thiệu iPhone và đây là 1 trong
                                        những chiếc điện thoại di động smartphone đầu tiên có sử dụng cảm ứng đa giao
                                        diện. và iOS là hệ điều hành độc quyèn được phát hành bởi Apple và chỉ dành cho
                                        những chiếc iPhone mà hãng sản xuất ra. Những fan nhà Táo cũng đã thoát ra khỏi
                                        sự bó buộc vào máy tính khi hãng này đã cung cấp chương trình đồng bộ hóa dữ
                                        liệu người dùng thông qua iCloud. Tuy nhiên, iPhone hay iOS vẫn chỉ đứng thứ 2
                                        khi điện thoại di động sử dụng nhiều nhất vẫn là Android.</span>
                                </p>
                            </td>
                            <td>
                                <p><br></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p style="margin-top:0in;margin-right:0in;margin-bottom:6.0pt;margin-left:0in; text-align:justify;line-height:150%">
                    <span>
                        Android là hệ điều hành điện
                        thoại di động giá rẻ và phổ biến hơn cả do Tập đoàn Google phát triển. Cho đến
                        năm 2015 thì đã có tới 325 triệu chiếc điện thoại di động giá rẻ sử dụng hệ
                        điều hành Android, dẫn đầu trong số các nền tảng hệ điều hành. Và hãng <a href="" target="_blank"><b>
                                <font color="#397b21">Samsung</font>
                            </b></a>
                        cũng là một trong những nhà sản xuất các thiết bị điện thoại di động giá rẻ
                        hàng đầu hiện nay. HIện nay ngành công nghệ điện thoại di động ngày càng phát
                        triển, trong một năm có tới hàng chục chiếc điện thoại di động mới được nghiên cứu
                        và phát hành ra ngoài thị trường. Ngoài ra, khi lựa chọn một chiếc điện thoại
                        di động chúng ta còn quá nhiều vấn đề cần phải xem xét tới. Ví như thời lượng
                        pin, chiếc điện thoại di động gí rẻ đó sử dụng loại chip gì, hay đơn giản là
                        loại điện thoại di động đó có những màu nào và loại điện thoại đó có nhiều phụ
                        kiện đi kèm hay không. Chọn được một chiếc điện thoại di động giá rẻ chất lượng
                        tốt cho bạn hay những người thân trong gia đình là một quyết định quan trọng.
                        Trước đó, Hoàng Hà Mobile đưa ra khẩu hiệu “Những gì chúng tôi không có, tức là
                        bạn không cần”. Hoàng Hà đưa ra rất nhiều sự lựa chọn cho bạn. một chiếc điện
                        thoại di động bền, đẹp, hay điện thoại di động giá rẻ lại có khả năng chống
                        nước chống bụi, có thẻ nhớ mở rộng và pin rất khỏe.</span>
                    <o:p></o:p>
                </p>
                <p style="text-align: justify; ">

                </p>
                <p style="margin: 0in 0in 6pt; text-align: justify; line-height: 150%;">
                    <span>
                        Đưa ra
                        quyết định mua một chiếc điện thoại di động giá rẻ không hề dễ dàng. Nhưng hãy
                        để Hoàng Hà Mobile giúp bạn. Chúng tôi cung cấp mọi mặt hàng thiết bị di động
                        đủ loại hãng và phân khúc. Với sự lựa chọn là 1 chiếc điện thoại di động giá rẻ
                        smartphone bền và tốt thì bạn có thể lựa chọn Xiaomi hoặc Samsung cũng có rất
                        nhiều mẫu điện thoại thuộc phân khúc tầm trung chất lượng tốt. Hay nếu bạn tìm
                        kiếm những chiếc điện thoại di động chính hãng và giá rẻ thì Hoàng Hà cũng có
                        rất nhiều sự lựa chọn cho bạn. Đặc biệt là khi bạn có thể mua điện thoại với
                        mức giá vô cùng phải chăng khi tham gia gói mua hàng trả góp tại Hoàng Hà.
                        Hoàng Hà Mobile – Siêu thị điện thoại di động giá rẻ nhất, miễn phí vận chuyển
                        toàn quốc, bảo hành 12 tháng, trả góp 0%.</span>
                    <o:p></o:p>
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="corevalue">
                <div class="item">
                    <span class="icon">
                        <i class="fa-regular fa-circle-check"></i>
                    </span>
                    <div class="text">
                        <span>Sản phẩm</span>
                        <strong>CHÍNH HÃNG</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </span>
                    <div class="text">
                        <span>Miễn phí vận chuyển</span>
                        <strong>TOÀN QUỐC</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class="fa-solid fa-headphones"></i>
                    </span>
                    <div class="text">
                        <span>Hotline hỗ trợ</span>
                        <strong>1900.2091</strong>
                    </div>
                </div>
                <div class="item">
                    <span class="icon">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </span>
                    <div class="text">
                        <span>Thủ tục đổi trả</span>
                        <strong>DỄ DÀNG</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const slider = document.getElementById('slider');
        let slideIndex = 0;

        function showSlide(index) {
            if (index >= slider.children.length) {
                slideIndex = 0;
            } else if (index < 0) {
                slideIndex = slider.children.length - 1;
            } else {
                slideIndex = index;
            }

            const translateValue = -slideIndex * 100 + '%';
            slider.style.transform = 'translateX(' + translateValue + ')';
        }

        function nextSlide() {
            showSlide(slideIndex + 1);
        }

        function prevSlide() {
            showSlide(slideIndex - 1);
        }
        setInterval(nextSlide, 10000);

        // Xóa từ khóa ở ô tìm kiếm khi quay trở về
        window.addEventListener('pageshow', function(event) {
            // Reset search input on page show (when navigating back)
            document.getElementById('kwd').value = '';
        });
    </script>
    <?php require "footer.html" ?>
</body>

</html>