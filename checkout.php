<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="assets/css/style.css">
<script>
function orderDone(){
    alert("Payment Successful! Order Placed 🎉");
}
</script>
</head>
<body>

<div class="checkout">
<h2>Checkout</h2>
<form onsubmit="orderDone()">
<input required placeholder="Full Name">
<input required placeholder="Address">
<input required placeholder="Mobile">
<button>Place Order</button>
</form>
</div>

</body>
</html>
