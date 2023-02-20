<?php
include
$id=$_post ['store name'];
$productid=$_post[$productid];
$type=$_post[producttype];
$pname=$_post[productname];
$price=$_post[price];
$availability=$_post[available];

$sql=mysqli_query("INSERT INTO product_details(storename,producrid,producttype,productname,productprice,availability)");
VALUES('$id','$productid','$type','$pname','$price','$availability'$now()');
?>
