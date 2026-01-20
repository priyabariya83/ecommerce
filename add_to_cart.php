<?php
session_start();
include "config/db.php";

$id=$_POST['id'];
$qty=$_POST['qty'];

$res=mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
$p=mysqli_fetch_assoc($res);

$_SESSION['cart'][$id]=[
    "name"=>$p['name'],
    "price"=>$p['price'],
    "image"=>$p['image'],
    "qty"=>$qty
];

header("Location:viewcart.php");
?>
