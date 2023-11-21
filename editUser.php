<?php
include('connect.php');

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $blog_name = $_POST['name'];
    $blog_username = $_POST['username'];
    $blog_password = $_POST['password'];
    $createDate = $_POST['create_at'];
    $updateDate = date("Y-m-d H:i:s");
    $blog_gioitinh = $_POST["gioitinh"];
    $blog_admin = $_POST['admin'];

    // Mã hóa mật khẩu theo MD5
    $hashedPassword = md5($blog_password);




    $sql = "UPDATE `user` SET `name`='$blog_name', `username`='$blog_username', `password`='$hashedPassword',`gioitinh`='$blog_gioitinh', `admin`='$blog_admin'";

    $sql .= " WHERE id='$id'";

    $result = $conn->query($sql);

    if ($result) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Có lỗi khi cập nhật thông tin người dùng.";
    }
}

$sql = "SELECT * FROM user WHERE id='$id' LIMIT 1";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    echo "Không tìm thấy người dùng.";
    exit();
}

$row = $result->fetch_assoc();
?>
<?php include('header/TinTucHeader.php')?>
<div class="row ml-3">
    <div class="col-lg-12 mt-3">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header"><strong>Cập nhật thông tin người dùng</strong></div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="name" class="form-control-label">Họ và tên người dùng:</label>
                        <input type="text" name="name" id="name" placeholder="Họ và tên người dùng" class="form-control" value="<?php echo $row['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="username" class="form-control-label">Tên tài khoản:</label>
                        <input type="text" name="username" id="username" placeholder="Tên tài khoản" class="form-control" value="<?php echo $row['username']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-control-label">Mật khẩu:</label>
                        <input type="text" name="password" id="password" placeholder="Mật khẩu" class="form-control" value="<?php echo $row['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="gioitinh" class="form-control-label">Phân quyền:</label>
                        <select name="gioitinh" id="gioitinh" class="form-control">
                            <option value="0" <?php if ($row['gioitinh'] == 0) echo 'selected'; ?>>Nam</option>
                            <option value="1" <?php if ($row['gioitinh'] == 1) echo 'selected'; ?>>Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="admin" class="form-control-label">Phân quyền:</label>
                        <select name="admin" id="admin" class="form-control">
                            <option value="0" <?php if ($row['admin'] == 0) echo 'selected'; ?>>Admin</option>
                            <option value="1" <?php if ($row['admin'] == 1) echo 'selected'; ?>>Tài khoản thường</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary" href="admin.php" role="button">Hủy</a>
                    <input class="btn btn-success" type="submit" name="submit" value="Cập nhật">
                </div>
            </div>
        </form>
    </div>
    <?php include('footer/TinTucFooter.php')?>
</div>