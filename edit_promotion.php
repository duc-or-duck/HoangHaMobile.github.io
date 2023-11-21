<?php
include('connect.php');
include('includes/header.php');
include('includes/navbar.php');

if (isset($_GET['id'])) {
    $promotion_id = $_GET['id'];

    // Fetch promotion details from the database
    $query = "SELECT * FROM `promotions` WHERE `id` = '$promotion_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $product_id = $row['product_id'];
        $content = $row['content'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
    } else {
        echo "No promotion found with the given ID.";
        exit;
    }
} else {
    echo "Invalid promotion ID.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and process form submission
    $product_id = $_POST['product_id'];
    $content = $_POST['content'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    // Redirect to the promotion list page after successful update
    header("Location: promotion.php");
    exit;
}
?>

<div class="container">
    <h2>Edit Promotion</h2>
    <form method="POST" action="edit_promotion.php?id=<?php echo $promotion_id; ?>">
        <div class="form-group">
            <label for="product_id">Product ID:</label>
            <input type="text" class="form-control" id="product_id" name="product_id" value="<?php echo $product_id; ?>" required>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea class="form-control" id="content" name="content" required><?php echo $content; ?></textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $start_date; ?>" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $end_date; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>