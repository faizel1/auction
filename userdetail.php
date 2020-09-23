<a href="login.php">Admin Login</a>


<?php

include("includes/config.php");

if (isset($_REQUEST['submitbtn'])) {

    
    $name=$_REQUEST['fname'];
    $email=$_REQUEST['email'];
    $phonenumber=$_REQUEST['phonenumber'];
    $productbid=$_REQUEST['productbid'];

if (!empty($name) and !empty($email) and !empty($productbid)) {


    $query="INSERT INTO user SET
    id=null,
    fullname='$name',
    email='$email',
    phonenumber='$phonenumber',
    productbid='$productbid',
    date=NOW()";

mysqli_query($connection,$query);

}}

?>

<!doctype html>
<html>
<head><title> Auction</title>
<link rel="stylesheet" href="includes/styles/style.css">
</head>
<body>
<fieldset><legend>Auction Detail</legend>

<form action="" method="POST">
<table width="100%" cellpadding="0" cellpacing="0">

<tr>
<td width="30%">Full Name</td>
<td width="70%"><input type="text" name="fname">
</td>
</tr>
<tr>
<td width="30%">Email</td>
<td width="70%"><input type="email" name="email">
</td>
</tr>

<tr>
<td width="30%">Phone Number</td>
<td width="70%"><input type="text" name="phonenumber">
</td>
</tr>


<tr>
<td width="30%">Product Bid </td>
<td width="70%"><input type="text" name="productbid">
</td>
</tr>

<tr>
<td cosplan="2"><input type="submit" value="Submit" name="submitbtn">
</td>
</tr>
</form>

</fieldset>

 </body>
</html>
<?php 
/*class user{
    
           
    $name=$_REQUEST['fname'];
    $email=$_REQUEST['email'];
    $phonenumber=$_REQUEST['phonenumber'];
    $productbid=$_REQUEST['productbid'];
    
    public function userdetail($name,$email,$phone,$productbid){
      
    $user_detail['name']=$this->full_name=$name;
    $user_detail['email']=$this->email=$email;
    $user_detail['phone']=$this->phonenumber=$phone;
    $user_detail['productbid']=$this->product_bid=$productbid;
    return $user_detail;
   

}
           
    public function BidderPrice($bidderamount){
        
      if($bidderamount>=$this->product_starting_price)
      {   
           return "<br> You have succesfully submitted your bid";}
      else
          return "<br>  The given amount is less than the starting price";
          
          }
    
    }
    
    echo "<br> <br>";   
    ?>

