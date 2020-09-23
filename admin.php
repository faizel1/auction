<?php

include_once "admin.php";
if (isset($_REQUEST['submitbtn'])) {
  
    $auctiontype=$_REQUEST['auctiontype'];
    $auctiondetail=$_REQUEST['auctiondetail'];

if (!empty($username) and !empty($password)) {
    $query="INSERT INTO auction SET
    auction_type='$auctiontype',
    auction_detail='$auctiondetail',";
   
mysqli_query($connection,$query);

}}


?>

    
<!doctype html>
<html>
<head><title> Admin</title><link rel="stylesheet" href="includes/styles/style.css"></head><body>

<fieldset><legend>Post an Auction</legend>

<form action="" method="POST">
<table width="100%" cellpadding="0" cellpacing="0">

<tr><td width="30%">Auction Type</td><td width="70%"><input type="text" name="auctiontype"></td></tr>

<tr><td width="30%">Auction Detail</td><td width="70%"><input type="text" name="auctiondetail"></td></tr>
<tr><td width="30%">Auction Date</td><td width="70%"><input type="date" name="auctiondetail"></td></tr>

<tr><td cosplan="2"><input type="submit" value="submit" name="submitbtn"></td></tr></form>

</fieldset></body>
 
 </html>