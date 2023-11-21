<?php
include('connect.php');
include('includes/header.php');
include('includes/navbar.php');

// Số lượng bản ghi hiển thị trên mỗi trang
$records_per_page = 10;

// Xác định trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Tính OFFSET (vị trí bắt đầu lấy dữ liệu)
$offset = ($current_page - 1) * $records_per_page;

// Truy vấn SQL với LIMIT và OFFSET
$query = "SELECT * FROM `user` LIMIT $records_per_page OFFSET $offset";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .scroll-table {
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>
</head>
<body>
<div class="scroll-table">
    <div class="container">
        <h2>User List</h2>
        <a href="Register/register.php?action=add" class="btn btn-success mb-3">Add User</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Avatar Image</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "<td>" . $row['ngaysinh'] . "</td>";
                        echo "<td>" . $row['gioitinh'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['avatar_image'] . "</td>";
                        echo "<td>" . $row['create_at'] . "</td>";
                        echo "<td>" . $row['update_at'] . "</td>";
                        echo "<td>";
                        if ($row['admin'] == 0) {
                            echo "Admin";
                        } elseif ($row['admin'] == 1) {
                            echo "Tài khoản thường";
                        }
                        echo "</td>";
                        echo "<td>";
                        echo "<div class='btn-group'>";
                        echo "<a href='editUser.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Edit</a>";
                        echo "<a href='delete.php?table=user&id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>";
                        echo "</div>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='14'>No users found</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <?php
        // Truy vấn để đếm tổng số bản ghi
        $count_query = "SELECT COUNT(*) AS total FROM `user`";
        $count_result = $conn->query($count_query);
        $count_row = $count_result->fetch_assoc();
        $total_records = $count_row['total'];

        // Tính tổng số trang
        $total_pages = ceil($total_records / $records_per_page);

        echo "<ul class='pagination'>";
        if ($current_page > 1) {
            echo "<li class='page-item'><a class='page-link' href='user.php?action=list&page=" . ($current_page - 1) . "'>&laquo;</a></li>";
        }
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<li class='page-item";
            if ($i == $current_page) {
                echo " active";
            }
            echo "'><a class='page-link' href='user.php?action=list&page=" . $i . "'>" . $i . "</a></li>";
        }
        if ($current_page < $total_pages) {
            echo "<li class='page-item'><a class='page-link' href='user.php?action=list&page=" . ($current_page + 1) . "'>&raquo;</a></li>";
        }
        echo "</ul>";
        ?>
    </div>
</div>
</body>
</html>