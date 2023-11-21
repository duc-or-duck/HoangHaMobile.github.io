<?php require_once 'db_config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="./js-css/Css_Js/Cart.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
     require_once "db_config.php";
     if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
     }
     if (isset($_GET['action'])) {

        function update_cart($add = false) {
            foreach ($_POST['quantity'] as $id => $quantity) {
                if ($quantity == 0) {
                    unset($_SESSION["cart"][$id]);
                } else {
                    if ($add) {
                        $_SESSION["cart"][$id] += $quantity;
                    } else {
                        $_SESSION["cart"][$id] = $quantity;
                    }
                }
            }
        }
        switch ($_GET['action']) {
            case "add":
                update_cart(true);
                header('Location: ./cart.php');
                break;
            case "delete":
                if (isset($_GET['product_id'])) {
                    unset($_SESSION["cart"][$_GET['id']]);
                }
                header('Location: ./cart.php');
                break;
            
        }
     }
     if(!empty($_SESSION["cart"]))
     {
        $sessionStr = implode(",",array_keys($_SESSION["cart"]));
        $getInfor = "SELECT 
        products.id, 
        products.name, 
        products.RAM, 
        products.ROM,
        products.image, 
        products.information_details, 
        products.sale_price, 
        products.new_price, 
        product_details.color,
        product_details.product_id
        FROM products 
        JOIN product_details ON products.id = product_details.product_id
        WHERE products.id IN ($sessionStr)
        GROUP BY products.id";   
        $products = $conn->query($getInfor);
     }
    ?>
<!-- Slide show container -->
<div class="top_link">
    <?php 
     echo $_GET['delete'];
    ?>
    <ul class="promotion_bar">
        <li class="circle">
        </li>
        <li class="slide_show">
            <?php
              require_once "db_config.php"; 

              $query = "SELECT DISTINCT * FROM promotions"; 
              $stmt = $conn->query($query); 
              
              while ($promotion = $stmt->fetch_assoc()) {
                  $isActive = ($stmt->num_rows === 1) ? 'active' : '';
                  echo "<p class='slideshow-item $isActive'>".$promotion['content']."</p>";
              }
            ?>
                <script src="./js-css/Css_Js/top_link.js">
                </script>
        </li>
        <li>
            <button class="detail">
                Xem chi tiết
            </button>
        </li>
    </ul>
</div>
<div class="header">
    <ul class="nav-bar">
        <li><a href="">Bản mobile</a></li>
        <li><a href="">Giới thiệu</a></li>
        <li><a href="">Sản phẩm đã xem</a></li>
        <li><a href="">Trung tâm bảo hành</a></li>
        <li><a href="">Hệ thống 123 siêu thị</a></li>
        <li><a href="">Tuyển dụng</a></li>
        <li><a href="">Tra cứu đơn hàng</a></li>
        <li><a href="">Đăng nhập</a></li>
    </ul>
</div>
<!--**************************************************************************-->
<form id="cart-form1" action="cart.php?action=submit" method="POST">
<div class="body">
<div class="product_infor">
<div class="top">
    <i class="cart-icon fa-regular fa-circle-check"></i>
    <p class="cart-title">Giỏ hàng</p>
</div>
<div class="infor">
      <?php 
       while ($product = $products->fetch_assoc())
       {
      ?>
      <table class="tb_infor">
      <tr>
        <td class="product-delete"><a class="delete" href="cart.php?action=delete&id=<?= $product['id'] ?>">-</a></td>
      </tr>
      <tr>
        <td>
        <td>
         <tr>
            <td><img class="product_Img" src="<?php echo $product['image']; ?>" alt=""></td>
         </tr>
         <tr>
            <td class="product_name"><?php echo $product['name']."(".$product['ROM']."GB/".$product["RAM"]."GB) - Chính hãng"; ?></td>
         </tr>
         <tr>
            <td style="color: gray; text-decoration: line-through;" class="product-price">  
            <?= $product['sale_price']?> ₫</td>
         </tr>
         <tr>
            <td class="product-price">
            <i class="fa-solid fa-bolt"></i>    
            <?= $product['new_price']?> ₫</td>
         </tr>
         <tr>
            <td class="total">
             Số lượng
            </td>   
         </tr>
         <tr>
          <td class="product-quantity">
          <div style="border:2px solid black; display: flex; align-items: center;">
            <button style="background-color: white; width: 30px; height: 30px; border: none; padding-bottom: 2px;" id="increaseBtn" onclick="increaseValue()">+</button>
            <input id="quantity" type="number" style="text-align: center; font-size:20px; width: 55px; height:30px;" value="<?=$_SESSION["cart"][$product['product_id']]?>" name="quantity[<?=$product['product_id']?>]">
            <button style="background-color: white; width: 30px; height: 30px; border: none; padding-bottom: 2px;" id="decreaseBtn" onclick="decreaseValue()">-</button>
          </div>        
          </td>
         </tr>
       </td>
       </td>
        <td>
            <?php 
             $qr = "SELECT * FROM promotions WHERE product_id = ".$product['product_id'].";";
             $promo = $conn->query($qr); 
             while ($promos = $promo->fetch_assoc()) {
                if ($promos['content'] != null) {
                    echo "<p class='promotion'>" . $promos['content'] . "</p>";
                } else {
                    echo "<p style='display:none;' class='promotion'></p>";
                }
            }
            ?>
        </td>    
       </td>
      </tr>
      </table>
      <?php 
       }
      ?>
</div>
</div>
 <div class="form col-50">
            <table>
                <tr>
                    <th class="form_title" colspan="2">Thông tin đặt hàng</th>
                </tr>
                <tr>
                    <th class="subtitle" colspan="2">Bạn cần nhập đầy đủ các trường thông tin có dấu *</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="decord" type="text" name="Name" value="" placeholder="Họ và tên *">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="decord" type="text" name="Phone" value="" placeholder="Số điện thoại *">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="decord" type="email" name="Email" value="" placeholder="Email *">
                    </td>
                </tr>
                <tr>
                    <td class="subtitle-2">Hình thức nhận hàng</td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <div class="recieve" style="margin-right: 20px;">
                            <input class="radio" id="homeRe" type="radio" name="recieve_method" value="" placeholder="Họ và tên *">
                            <label class="radio-lable" for="homeRe">Nhận hàng tại nhà</label>
                        </div>
                    </td>
                    <td>
                        <div class="recieve">
                            <input class="radio" id="shopRe" type="radio" name="recieve_method" value="" placeholder="Họ và tên *">
                            <label class="radio-lable" for="shopRe">Nhận tại cửa hàng</label>
                        </div>
                    </td>
                </tr>
                <tr class="homeRecieve">
                    <td style="margin-right: 10px;" class="pt">
                        <select class="decord_1 form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
                        <option value="" selected>Tỉnh/Thành phố*</option>           
                    </select>
                    </td>
                    <td>
                        <select class="decord form-select form-select-sm mb-3" id="district" aria-label=".form-select-sm">
                        <option value="" selected>Quận/huyện</option>
                    </select>
                    </td>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                    <script src="./js-css/Css_Js/City.js"></script>
                </tr>
                <tr class="homeRecieve">
                    <td colspan="2">
                        <input class="decord" style="width: 100%;" type="text" name="Address" value=""> placeholder="Địa chỉ">
                    </td>
                </tr>
                <tr id="shopRecieve" style="display: none;">
                    <td class="pt" colspan="2">
                        <textarea rows="5" cols="50" type="text" name="Payment" value="" placeholder="Nhập địa chỉ chi nhánh"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="pt" colspan="2">
                        <textarea rows="5" cols="50" type="text" name="Name" value="" placeholder="Email *"></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 25px;
                           font-size: 12px;
                           text-align: center;" colspan="2">
                        <p>Quý khách có thể lựa chọn hình thức thanh toán sau khi đặt hàng</p>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 20px;" colspan="2" align="center">
                        <button class="submit_btn" name="order_click" type="submit">
                        XÁC NHẬN VÀ ĐẶT HÀNG
                    </button>
                    </td>
                </tr>
                <script>
                    var home = document.getElementById('homeRe');
                    var shop = document.getElementById('shopRe');
                    var homeRecieve = document.getElementsByClassName('homeRecieve');
                    var shopRecieve = document.getElementById('shopRecieve');

                    home.addEventListener('click', function() {
                        for (var i = 0; i < homeRecieve.length; i++) {
                            homeRecieve[i].style.display = 'table-row';
                        }
                        shopRecieve.style.display = 'none';
                    })

                    shop.addEventListener('click', function() {
                        for (var i = 0; i < homeRecieve.length; i++) {
                            homeRecieve[i].style.display = 'none';
                        }
                        shopRecieve.style.display = 'table-row';
                    });
                </script>
            </table>
</div>
</div>
</form>
</body>
</html>