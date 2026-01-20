<?php
session_start();
include "config/db.php";

if(!isset($_GET['id'])){
    die("Product not found");
}

$id = $_GET['id'];
$res = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
$p = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $p['name']; ?></title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="navbar">
    <a href="index.php">⬅ Back</a>
    <a href="viewcart.php">Cart 🛒</a>
</div>

<div class="product-box">
    <img src="assets/images/<?php echo $p['image']; ?>">
    <div class="product-info">
        <h2><?php echo $p['name']; ?></h2>
        <p class="price">₹<?php echo $p['price']; ?></p>
        <p><?php echo $p['description']; ?></p>

        <form method="post" action="add_to_cart.php">
            <input type="hidden" name="id" value="<?php echo $p['id']; ?>">
            <input type="number" name="qty" value="1" min="1">
            <br><br>
            <button class="btn">Add to Cart</button>
        </form>
    </div>
</div>

</body>
</html>
