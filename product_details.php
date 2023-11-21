<?php
include 'db_config.php';

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // Truy vấn từ bảng products
    $sql_products = "SELECT * FROM products WHERE products.id = ?";
    $stmt_products = $conn->prepare($sql_products);

    if ($stmt_products) {
        $stmt_products->bind_param('i', $product_id);
        $stmt_products->execute();
        $result_products = $stmt_products->get_result();

        if ($result_products->num_rows > 0) {
            $row_products = $result_products->fetch_assoc();
            // Xử lý thông tin từ bảng products ở đây
            // Ví dụ: $row_products['product_name'], $row_products['price'], etc.

            // Tiếp theo, truy vấn từ bảng product_details
            $sql_details = "SELECT * FROM product_details WHERE product_details.product_id = ?";
            $stmt_details = $conn->prepare($sql_details);

            if ($stmt_details) {
                $stmt_details->bind_param('i', $product_id);
                $stmt_details->execute();
                $result_details = $stmt_details->get_result();


                $stmt_details->close();
            } else {
                echo "Lỗi trong quá trình chuẩn bị truy vấn product_details.";
            }
        } else {
            echo "Không tìm thấy sản phẩm với ID: $product_id";
        }

        $stmt_products->close();
    } else {
        echo "Lỗi trong quá trình chuẩn bị truy vấn products.";
    }
} else {
    echo "Không có thông tin sản phẩm được cung cấp.";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preload" as="style" href="./js-css/web_v1.2.0.3.css">
    <script src="./js-css/web_v1.2.0.3.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

    <link href="./js-css/web_v1.2.0.3.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="/js-css/custom/custom.css"> -->
    <link rel="stylesheet" href="./js-css/custom/header.css">
    <link rel="stylesheet" href="./js-css/custom/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/jssor-slider@28.0.0/js/jssor.slider.min.js"></script>
    <style>
        .product-center .current-product-price label.text-green {
            display: none
        }
    </style>
    <script>
        window.insider_object = {};
        $(document).ready(function() {
            setProductContentHeightWithSpecs();

            // Attach click event handler to the button with ID "toggleButton"
            $("#viewMoreContent").click(function(event) {
                // Prevent the default behavior of the click event
                event.preventDefault();

                // Toggle the content state between expanded and collapsed
                toggleContentState();
            });
        });

        function setProductContentHeightWithSpecs() {
            // Calculate specsHeight based on the height of ".product-specs" minus 56
            var specsHeight = $(".product-specs").height() - 56;

            // Set "data-height" attribute of "#productContent" to specsHeight
            $("#productContent").attr("data-height", specsHeight);

            // Set the height of "#productContent" to specsHeight
            $("#productContent").height(specsHeight);
        }

        function toggleContentState() {
            var newText = $("#viewMoreContent").text() === "Thu gọn" ? "Xem thêm" : "Thu gọn";

            // Toggle text between "Xem thêm" and "Thu gọn"
            $("#viewMoreContent").text(newText);

            // Adjust the height and overflow of "#productContent" based on the text
            if (newText === "Thu gọn") {
                $("#productContent").css({
                    height: "auto",
                    overflow: "auto"
                });
            } else {
                // Use the stored specsHeight to set the height
                var specsHeight = $("#productContent").attr("data-height");
                $("#productContent").css({
                    height: specsHeight + "px",
                    overflow: "hidden"
                });
            }

            // Log the current height of "#productContent"
            console.log($("#productContent").height());
        }
    </script>

</head>

<body>
    <?php include 'header.html'; ?>
    <section>
        <div class="container">
            <div class="product-details">
                <div class="top-product">
                    <h1>
                        <strong>
                            <!-- Produts -->
                            <?php echo $row_products['name']; ?>
                        </strong>
                    </h1>

                </div>

                <div class="product-details-container">
                    <div class="product-image">

                        <!-- carolsel image product details  -->
                        <div id="imagePreview" data-jssor-slider="1" style="width: 380px; height: 370px; overflow: hidden;">
                            <img src="<?php echo $row_products['image']; ?>" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>


                    </div>

                    <div class="product-center" style="position:relative; ">
                        <p class="price current-product-price">
                            <strong>
                                <!-- giá mới -->
                                <?php echo $row_products['new_price'] . "đ"; ?>
                            </strong>
                            <i>
                                <strike>
                                    <!-- giá bán -->
                                    <?php echo $row_products['sale_price'] . "đ"; ?>
                                </strike>
                            </i>

                            <i> | Giá đã bao gồm VAT</i>
                            <br><label class="text-green">Hotsale giá sốc từ 30-15/11 giá chỉ còn 6,990,000 ₫</label>
                            <br><label class="text-dark">Sản phẩm bán giá Hotsale với số lượng có hạn</label>
                        </p>
                        <p class="freeship">
                            <span>
                                Miễn phí vận chuyển toàn quốc
                            </span>
                        </p>

                        <div class="product-option version">
                            <strong class="label">Lựa chọn phiên bản</strong>
                            <div class="options" id="versionOption" data-id="5">
                                <div data-sku="SS20FE256G" class="item selected">
                                    <a href="">
                                        <span>
                                            <label>
                                                <strong>
                                                    <!-- ROM products 256GB, phải là 1 list rom của sp-->
                                                    <?php echo $row_products['ROM']; ?>
                                                </strong>
                                            </label>
                                        </span>
                                        <strong>
                                            <!-- price_present 6,990,000 ₫, phải là list giá theo số lượng rom của sp-->
                                            <?php
                                            // echo $row_products['new_price']."đ"; 
                                            ?>
                                        </strong>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="product-option color">
                            <strong class="label">Lựa chọn màu và xem địa chỉ còn hàng</strong>
                            <form action="cart.php" method="post">
                            <div class="options" id="colorOptions">
                                <?php
                                if ($result_details->num_rows > 0) {
                                    while ($row_details = $result_details->fetch_assoc()) {
                                        $color = $row_details['color'];
                                        // var_dump($row_details['color']); 
                                ?>
                                        <div class="item selected ">
                                            <input type="radio" name="color" id="" value="<?php echo $color; ?>">
                                            <!-- <span> -->
                                            <label>
                                                <strong>
                                                    <?php
                                                    echo $color;
                                                    ?>
                                                </strong>
                                            </label>
                                            <!-- </span> -->
                                        </div>
                                <?php }
                                } else {
                                    echo "Không tìm thấy thông tin chi tiết sản phẩm với ID: $product_id";
                                }
                                ?>
                            </div>
                            </form>
                        </div>

                        <div style="display:flex;"></div>

                        <div class="product-promotion">
                            <strong class="label text-green">KHUYẾN MÃI</strong>
                            <ul>

                                <li><span class="bag">KM 1</span></li>
                                <li>
                                    Sản phẩm đang thuộc chương trình Flash sale (Số lượng có hạn) </li>

                            </ul>
                        </div>
                        <!-- Pay Product -->
                        <div class="product-action">
                            <a title="Mua ngay" href="javascript:;" class="btn-red btnQuickOrder btnbuy"><strong>MUA NGAY</strong><span> Giao tận nhà (COD) <br>Hoặc
                                    Nhận tại cửa hàng</span></a>
                            <a title="Mua trả góp" href="" class="btnInstallment btn-green btnbuy"><strong>TRẢ GÓP</strong><span>Công ty Tài chính <br>
                                    Hoặc 0% qua thẻ tín dụng</span></a>
                            <form id="add-to-cart-form" action="./cart.php?action=add" method="POST">
                               <input type="text" value="1" name="quantity[<?=$row_products['id']?>]" size="2" /><br/>
                               <input type="submit" value="Thêm vào giỏ hàng" name="quantity[<?=$row_products['id']?> value="Mua sản phẩm" />
                            </form>
                        </div>

                        <div class="product-promotion" style="padding:8px; border-radius:6px; background:#fff; margin-top:15px;">
                            <div>
                                <strong class="label">ƯU ĐÃI THANH TOÁN</strong>
                                <ul>

                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">VNPAY - Ưu đãi tới 300.000đ khi thanh toán qua VNPAY.</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">ZaloPay - Ưu đãi tới 300.000đ khi thanh toán qua
                                            ZaloPay.</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">Home PayLater - Trả góp qua Home PayLater giảm tới
                                            1.000.000đ</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">Kredivo - Ưu đãi tới 200.000đ khi mua trước trả sau qua
                                            Kredivo.</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">Samsung Finance+ - Ưu đãi trả góp 0% qua Samsung Finance+
                                            (Áp dụng tại 57 chi nhánh).</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">Shinhan Finance - Ưu đãi trả góp 0% qua Shinhan
                                            Finance.</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">VPBank - Mở thẻ VPBank, ưu đãi tới 1.250.000đ.</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">VIB - Nhận Voucher 250.000đ khi mở thẻ tín dụng VIB thành
                                            công.</a>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <strong class="label">ƯU ĐÃI ĐI KÈM</strong>
                                <ul>

                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        Mua SIM Vinaphone HAPPY (2GB/ngày, miễn phí 1000 phút gọi) kèm Điện thoại, giá chỉ còn
                                        300.000đ.
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        Tặng SIM Wintel (Áp dụng tại các chi nhánh độc lập với đơn hàng mua Điện thoại, Máy tính
                                        bảng, Đồng hồ hoặc các sản phẩm khác với hoá đơn trên 2.000.000đ).
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        <a href="" style="font-weight:normal">Giảm thêm tới 1.000.000đ khi tham gia Thu cũ - Lên đời
                                            điện thoại Android</a>
                                    </li>
                                    <li>
                                        <i class="icon-checked text-green"></i>
                                        Giảm thêm 200.000đ cho tất cả các sản phẩm màn hình khi mua kèm Laptop, MacBook, Máy
                                        tính bảng và Điện thoại.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-promotion">
                            <div class="mg-top15">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="product-shop">
                        <div class="warranty">
                            <h4>THÔNG TIN BẢO HÀNH</h4>
                            <p><i class="icon-shield"></i> <span><strong>Bảo hành 12 tháng chính hãng.</strong></span></p>

                            <p><a href=""><i class="icon-shield"></i><strong><span>1 đổi 1 trong 30 ngày đầu nếu có lỗi do nhà sản xuất.</span></strong></a></p>
                        </div>

                        <div class="check-stock" id="marketFilter">
                            <div class="city">
                                <p>Chọn màu và xem địa chỉ còn hàng</p>
                                <span href="javascript:;" class="button"><i class="icon-localtion"></i> <label>Toàn bộ chi nhánh</label></span>
                                <div class="list">
                                    <ul>
                                        <li data-id="0" id="city_0"><a href="javascript:marketFilters(0);">Xem tất cả</a></li>
                                        <li data-id="1" id="city_1" class="instock"><a href="javascript:marketFilters(1);">Hà Nội</a></li>
                                        <li data-id="50" id="city_50" class="instock"><a href="javascript:marketFilters(50);">TP HCM</a></li>
                                        <li data-id="59" id="city_59" class="instock"><a href="javascript:marketFilters(59);">Cần Thơ</a></li>
                                        <li data-id="32" id="city_32" class="instock"><a href="javascript:marketFilters(32);">Đà Nẵng</a></li>
                                        <li data-id="20" id="city_20" class="instock"><a href="javascript:marketFilters(20);">Hải Phòng</a></li>
                                        <li data-id="21" id="city_21" class="instock"><a href="javascript:marketFilters(21);">Hưng Yên</a></li>
                                        <li data-id="37" id="city_37" class="instock"><a href="javascript:marketFilters(37);">Khánh Hòa</a></li>
                                        <li data-id="26" id="city_26" class="instock"><a href="javascript:marketFilters(26);">Thanh Hóa</a></li>
                                        <li data-id="31" id="city_31" class="instock"><a href="javascript:marketFilters(31);">Thừa Thiên Huế</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="stock-sum" id="stock-sum"></div>



                            <div class="store">
                                <ul>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>194 Lê Duẩn, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0962.066.208">0962.066.208</a></strong>
                                                - <i class="icon-localtion"></i> <a title="194 Lê Duẩn, Hà Nội" href="/194-le-duan-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>382 Nguyễn Văn Cừ, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0915.963.222">0915.963.222</a></strong>
                                                - <i class="icon-localtion"></i> <a title="382 Nguyễn Văn Cừ, Hà Nội" href="/382-nguyen-van-cu-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>122 Thái Hà, Hà Nội </label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0973.790.122">0973.790.122</a></strong>
                                                - <i class="icon-localtion"></i> <a title="122 Thái Hà, Hà Nội" href="/122-thai-ha-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="outstock city_1" data-sku="[&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>126 Phố Huế, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0968.668.995">0968.668.995</a></strong>
                                                - <i class="icon-localtion"></i> <a title="126 Phố Huế, Hà Nội" href="/95b-pho-hue-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>392 Cầu Giấy, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0968.32.33.99">0968.32.33.99</a></strong>
                                                - <i class="icon-localtion"></i> <a title="	392 Cầu Giấy, Hà Nội" href="/392-cau-giay-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>28 Trần Phú, Hà Đông, Hà Nội </label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0911.266.669">0911.266.669</a></strong>
                                                - <i class="icon-localtion"></i> <a title="28 Trần Phú, Hà Đông, Hà Nội" href="/28-tran-phu-ha-dong">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>348 Hồ Tùng Mậu, Cầu Diễn, Từ Liêm, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0965.868.348">0965.868.348</a></strong>
                                                - <i class="icon-localtion"></i> <a title="348 Hồ Tùng Mậu, Cầu Diễn, Từ Liêm, Hà Nội" href="/348-ho-tung-mau-cau-dien-tu-liem">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>102 Phố Xốm, Phú Lãm, Hà Đông, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0818.576.586">0818.576.586</a></strong>
                                                - <i class="icon-localtion"></i> <a title="	102 Phố Xốm, Phú Lãm, Hà Đông, Hà Nội" href="/102-pho-xom-phu-lam-ha-dong-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>392 Trương Định, Hoàng Mai, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:083.263.9292">083.263.9292</a></strong>
                                                - <i class="icon-localtion"></i> <a title="392 Trương Định, Hoàng Mai, Hà Nội" href="/392-truong-dinh-hoang-mai">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="outstock city_1" data-sku="[&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>259 Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0968.590.259">0968.590.259</a></strong>
                                                - <i class="icon-localtion"></i> <a title="259 Lạc Long Quân, Phường Nghĩa Đô, Quận Cầu Giấy, Hà Nội" href="/259-lac-long-quan-phuong-nghia-do-quan-cau-giay-ha-noi-khai-truong-ngay-02-10">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>182 Cao Lỗ, H. Đông Anh, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:090.228.93.39">090.228.93.39</a></strong>
                                                - <i class="icon-localtion"></i> <a title="182 Cao Lỗ, H. Đông Anh, Hà Nội" href="/182-cao-lo-h-dong-anh-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>258 Ngô Gia Tự, Long Biên, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0836886258">0836886258</a></strong>
                                                - <i class="icon-localtion"></i> <a title="258 Ngô Gia Tự, Long Biên, Hà Nội" href="/258-ngo-gia-tu-long-bien-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="outstock city_1" data-sku="[&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>651 Nguyễn Văn Linh, Long Biên, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0968.789.651">0968.789.651</a></strong>
                                                - <i class="icon-localtion"></i> <a title="651 Nguyễn Văn Linh, Long Biên, Hà Nội" href="/651-nguyen-van-linh-long-bien-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>89 Tam Trinh, Hoàng Mai, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0815.86.79.89">0815.86.79.89</a></strong>
                                                - <i class="icon-localtion"></i> <a title="89 Tam Trinh, Hoàng Mai, Hà Nội" href="/89-tam-trinh-hoang-mai-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="outstock city_1" data-sku="[&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>109 Trần Duy Hưng, Cầu Giấy, Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0985568109">0985568109</a></strong>
                                                - <i class="icon-localtion"></i> <a title="109 Trần Duy Hưng, Cầu Giấy, Hà Nội" href="/109-tran-duy-hung-cau-giay-ha-noi">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_1" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>Số 52 Hàng Đậu - Đồng Xuân - Hoàn Kiếm - Hà Nội</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:090.215.5252">090.215.5252</a></strong>
                                                - <i class="icon-localtion"></i> <a title="Số 52 Hàng Đậu - Đồng Xuân - Hoàn Kiếm - Hà Nội" href="/so-52-hang-dau-dong-xuan-hoan-kiem-ha-noi-sap-khai-truong">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_50" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>1060 Đường 3/2, Phường 12, Quận 11, TP HCM</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0932892255">0932892255</a></strong>
                                                - <i class="icon-localtion"></i> <a title="1060 Đường 3/2, Phường 12, Quận 11, TP HCM" href="/1142-1144-duong-3-2-phuong-12-quan-11-tp-ho-chi-minh">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_50" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>436 Quang Trung, Phường 10, Quận Gò Vấp, TP.HCM</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:088.996.8436">088.996.8436</a></strong>
                                                - <i class="icon-localtion"></i> <a title="436 Quang Trung, Gò Vấp, TP.HCM" href="/436-quang-trung-phuong-10-quan-go-vap-tp-hcm">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="outstock city_50" data-sku="[&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>215 Lê Văn Việt, phường Hiệp Phú, Quận 9, TP HCM</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0966.356.215">0966.356.215</a></strong>
                                                - <i class="icon-localtion"></i> <a title="215 Lê Văn Việt, phường Hiệp Phú, Quận 9, TP HCM" href="/215-le-van-viet-phuong-hiep-phu-quan-9">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_50" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>867 Lũy Bán Bích, P. Tân Thành, Q. Tân Phú, TP HCM</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0828.25.2255">0828.25.2255</a></strong>
                                                - <i class="icon-localtion"></i> <a title="867 Lũy Bán Bích, Q. Tân Phú, TP. HCM" href="/867-luy-ban-bich-p-tan-thanh-q-tan-phu-tp-hcm">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_50" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>347 Hoàng Văn Thụ, Quận Tân Bình, TP. Hồ Chí Minh (Vòng xoay Lăng Cha Cả)</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:083.830.22.55">083.830.22.55</a></strong>
                                                - <i class="icon-localtion"></i> <a title="347 Hoàng Văn Thụ, Quận Tân Bình, TP. HCM (Vòng xoay Lăng Cha Cả)" href="/347-hoang-van-thu-quan-tan-binh-tp-ho-chi-minh">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_59" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>221 Đường 3 Tháng 2 - Ninh Kiều - Cần Thơ</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:08.285.222.55">08.285.222.55</a></strong>
                                                - <i class="icon-localtion"></i> <a title="221 Đường 3 Tháng 2 - Ninh Kiều - Cần Thơ" href="/221-duong-3-thang-2-ninh-kieu-can-tho">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_32" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>153-155 Nguyễn Văn Linh, TP Đà Nẵng</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0788.655.155">0788.655.155</a></strong>
                                                - <i class="icon-localtion"></i> <a title="153-155 Nguyễn Văn Linh, Đà Nẵng" href="/153-155-nguyen-van-linh-tp-da-nang">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_20" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>258 Tô Hiệu - Lê Chân - Hải Phòng</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0961.79.15.16">0961.79.15.16</a></strong>
                                                - <i class="icon-localtion"></i> <a title="258 Tô Hiệu - Lê Chân - Hải Phòng" href="/258-to-hieu-le-chan-hai-phong">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="outstock city_20" data-sku="[&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>72 Lạch Tray, Ngô Quyền, TP Hải Phòng</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:079.323.72.72">079.323.72.72</a></strong>
                                                - <i class="icon-localtion"></i> <a title="72 Lạch Tray, Ngô Quyền, TP Hải Phòng" href="/72-lach-tray-ngo-quyen-tp-hai-phong">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_21" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>Số 2, Phố Nối, Phường Bần Yên Nhân, Thị Xã Mỹ Hào, Tỉnh Hưng Yên (Trung tâm ngã tư Phố Nối) </label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0766.38.6633">0766.38.6633</a></strong>
                                                - <i class="icon-localtion"></i> <a title="Số 2, Phố Nối, Phường Bần Yên Nhân, Thị Xã Mỹ Hào, Tỉnh Hưng Yên (Trung tâm ngã tư Phố Nối) " href="/so-2-pho-noi-phuong-ban-yen-nhan-thi-xa-my-hao-tinh-hung-yen">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_37" data-sku="[&quot;N3FLIPDN&quot;]">
                                        <span>
                                            <label>69 Quang Trung, Lộc Thọ, TP. Nha Trang, T. Khánh Hoà </label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:089 638 8383">089 638 8383</a></strong>
                                                - <i class="icon-localtion"></i> <a title="69 Quang Trung, Lộc Thọ, TP. Nha Trang, T. Khánh Hoà" href="/69-quang-trung-loc-tho-tp-nha-trang-t-khanh-hoa">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="outstock city_37" data-sku="[&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>Số 580 Đường 2 tháng 4, Vĩnh Phước, Tp.Nha Trang, Tỉnh Khánh Hòa</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0793.68.8383">0793.68.8383</a></strong>
                                                - <i class="icon-localtion"></i> <a title="Số 580 Đường 2 tháng 4, Vĩnh Phước, Tp.Nha Trang, Tỉnh Khánh Hòa" href="/so-28a-duong-2-thang-4-vinh-phuoc-tp-nha-trang-tinh-khanh-hoa">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_26" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>222 Trần Phú, phường Lam Sơn, TP Thanh Hóa</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0888.20.3536">0888.20.3536</a></strong>
                                                - <i class="icon-localtion"></i> <a title="222 Trần Phú, phường Lam Sơn, TP Thanh Hóa" href="/222-tran-phu-phuong-lam-son">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="instock city_31" data-sku="[&quot;N3FLIPDN&quot;,&quot;N3FLIPVG&quot;]">
                                        <span>
                                            <label>48 Đống Đa - TP Huế</label>

                                            <label class="data">
                                                <strong><i class="icon-hotline"></i> <a href="tel:0905.66.88.48">0905.66.88.48</a></strong>
                                                - <i class="icon-localtion"></i> <a title="48 Đống Đa - TP Huế" href="/48-dong-da-tp-hue">Chỉ đường</a>
                                            </label>
                                        </span>
                                    </li>
                                </ul>
                                <p class="out-stock hide"><strong>OPPO Find N3 Flip (12GB/256GB) - Chính hãng <span class="colorName"></span></strong> chưa có sẵn tại khu vực này. Quý khách vui lòng chọn khu vực khác hoặc gọi đến số Hotline để biết thêm chi tiết.</p>
                                <p class="out-noonline hide"><strong>OPPO Find N3 Flip (12GB/256GB) - Chính hãng <span class="colorName"></span></strong> tạm thời dừng nhận đơn online. Quý khách vui lòng liên hệ , đến các cửa hàng đang có sẵn hàng để mua trực tiếp.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="product-layout product-layout-grid">
                <div class="product-left">
                    <div class="product-text" id="productContent" data-height="818.2" style="height: 818.2px;">
                        <span id="docs-internal-guid-47b78927-7fff-665c-5d21-cbf4628d53ec">
                            <p readonly style="max-width: 900px; white-space: pre-wrap;">
                                <?php echo $row_products['product_introduction'] ?>
                            </p>
                        </span>
                    </div>
                    <div class="view-more-container">
                        <a id="viewMoreContent">Xem thêm</a>
                    </div>
                </div>

                <div class="product-right">
                    <div class="product-specs">
                        <h3><?php echo $row_products['name']; ?></h3>
                        <div class="product-spect-img">
                            <img src="<?php echo $row_products['image']; ?>" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                            
                        </div>

                        <div class="specs-special">
                            <ol>
                                <li>
                                    <strong>Công nghệ màn hình:</strong>
                                    <span>
                                        <?php echo $row_products['monitor']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>Hệ điều hành:</strong>
                                    <span>
                                        <?php echo $row_products['OS']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>Vi xử lý:</strong>
                                    <span>
                                        <?php echo $row_products['CPU']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>Chíp đồ họa:</strong>
                                    <span>
                                        <?php echo $row_products['GPU']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>Bộ nhớ trong:</strong>
                                    <span>
                                        <?php echo $row_products['ROM']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>RAM:</strong>
                                    <span>
                                        <?php echo $row_products['RAM']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>Camera trước:</strong>
                                    <span>
                                        <?php echo $row_products['front_camera']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>Camera sau:</strong>
                                    <span>
                                        <?php echo $row_products['rear_camera']; ?>
                                    </span>
                                </li>
                            </ol>
                            <ol>
                                <li>
                                    <strong>Dung lượng pin:</strong>
                                    <span>
                                        <?php echo $row_products['pin']; ?>
                                    </span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.html'; ?>
</body>

</html>