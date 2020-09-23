<a href="index.php">Home Page</a>
<form action="admin.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> 


<!doctype html>
<html>
<head><title> Admin login</title><link rel="stylesheet" href="includes/styles/style.css"></head><body>

<fieldset><legend>Log In</legend>

<form action="admin.php" method="POST">
<table width="100%" cellpadding="0" cellpacing="0">

<tr><td width="30%">Username</td><td width="70%"><input type="text" name="username"></td></tr>

<tr><td width="30%">Password</td><td width="70%"><input type="password" name="password"></td></tr>

<tr><td cosplan="2"><input type="submit" value="Sign In" name="submitbtn"></td></tr></form>

</fieldset></body>
 
 </html>

<?php
if (isset($_REQUEST['submitbtn'])) {
  
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];

if (!empty($username) and !empty($password)) {
    $query="INSERT INTO admin SET
    username='$username',
    password='$password',";
   
mysqli_query($connection,$query);

}}


