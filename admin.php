<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên</th>
              <th>Tên người dùng</th>
              <th>Ngày sinh</th>
              <th>Giới tính</th>
              <th>Email</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Ảnh đại diện</th>
              <th>Ngày tạo</th>
              <th>Ngày cập nhật</th>
              <th>Admin</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Kết nối đến CSDL
            require_once 'connect.php';

            // Truy vấn dữ liệu từ bảng người dùng
            $sql = "SELECT * FROM `user`";
            $result = $conn->query($sql);

            // Kiểm tra xem có dữ liệu trả về không
            if ($result->num_rows > 0) {
                // Hiển thị dữ liệu
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["ngaysinh"] . "</td>";
                    echo "<td>" . $row["gioitinh"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["avatar_image"] . "</td>";
                    echo "<td>" . $row["create_at"] . "</td>";
                    echo "<td>" . $row["update_at"] . "</td>";
                    echo "<td>" . $row["admin"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='12'>Không có người dùng.</td></tr>";
            }

            // Đóng kết nối
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Content Row -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>