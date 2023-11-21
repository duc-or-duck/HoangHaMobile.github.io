
<?php
include 'db_connectdt.php';
	if (isset($_SESSION['admin']) == true) {
		$admin = $_SESSION['admin'];
		if ($admin == '0') {
			echo "Bạn không đủ quyền truy cập vào trang này<br>";
			echo "<a href='index.php'> Click để về lại trang chủ</a>";
			exit();
		}
	}

?>