
<!doctype html>
<html>
<head><title> Auction</title><link rel="stylesheet" href="includes/styles/style.css"></head><body>

<fieldset><legend>Auction</legend>

<form action="userdetail.php" method="POST">
<table width="100%" cellpadding="0" cellpacing="0">
<tr><td width="30%">Auction Type</td><td width="70%"><input type="text"  value="open" name="at" disabled></td></tr>
<tr><td width="30%">Auction Detail</td><td width="70%"><input type="text"            name="adt" disabled></td></tr>
<?php if (f) {
    echo 1;
} ?>
<tr><td cosplan="2"><input type="submit" value="Bid" name="submitbtn"></td></tr></form>

</fieldset></body>
 
 </html>


<p id="demo"></p>

<script>
var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
var f=  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  if (distance < 0) {
    clearInterval(x);
    var e=document.getElementById("demo").innerHTML = "Bidding time is up ";
  }
}, 1000);
</script>

<?php
 class auciton{
    public $Auction_type;
    public $Auction_Detail;
    public $Auction_Date;



 }
 ?>