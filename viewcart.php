<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<link rel="stylesheet" href="assets/css/style.css">
<script>
function removeItem(){ return confirm("Remove this item?"); }
</script>
</head>
<body>

<div class="navbar">
    <a href="index.php">Home</a>
</div>

<table>
<tr>
<th>Image</th><th>Name</th><th>Price</th>
<th>Qty</th><th>Total</th><th>Remove</th>
</tr>

<?php
$grand=0;
if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $id=>$item){
$total=$item['price']*$item['qty'];
$grand+=$total;
?>
<tr>
<td><img src="assets/images/<?php echo $item['image']; ?>"></td>
<td><?php echo $item['name']; ?></td>
<td>₹<?php echo $item['price']; ?></td>
<td>
<form method="post" action="update_cart.php">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<input type="number" name="qty" value="<?php echo $item['qty']; ?>" min="1">
<button>Update</button>
</form>
</td>
<td>₹<?php echo $total; ?></td>
<td><a href="remove.php?id=<?php echo $id; ?>" onclick="return removeItem()">❌</a></td>
</tr>
<?php }} ?>
<tr>
<td colspan="4"><b>Grand Total</b></td>
<td colspan="2"><b>₹<?php echo $grand; ?></b></td>
</tr>
</table>

<a href="checkout.php" class="btn center">Checkout</a>

</body>
</html>
