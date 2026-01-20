<?php
session_start();
$_SESSION['cart'][$_POST['id']]['qty']=$_POST['qty'];
header("Location:viewcart.php");
?>
