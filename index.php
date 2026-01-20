<?php include "config/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>ShopEase</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="navbar">
    <h2>TrendMart✨</h2>
    <a href="viewcart.php">Cart 🛒</a>
</div>

<div class="products">
<?php
$res = mysqli_query($conn,"SELECT * FROM products");
while($row = mysqli_fetch_assoc($res)){
?>
    <div class="card">
        <img src="assets/images/<?php echo $row['image']; ?>" alt="">
        <h3><?php echo $row['name']; ?></h3>
        <p>₹<?php echo $row['price']; ?></p>

        <!-- 🔥 IMPORTANT FIX -->
        <a href="product.php?id=<?php echo $row['id']; ?>" class="btn view-btn">
            View Product
        </a>
    </div>
<?php } ?>
</div>

</body>
</html>
