<?php
	session_start();
	require("functions.php");
	require("header.php");
	global $conn;
	$conn = mysqli_connect('localhost', 'root', '', 'mydb');
	$query = mysqli_query($conn,"SELECT * FROM products WHERE status = 0");
	while($row = mysqli_fetch_array($query))
	{
		$datenow = date("Y-m-d");
		$duedate = $row['duedate'];
		$prodid = $row['productid'];
		if($datenow >= $duedate){
			mysqli_query($conn,"UPDATE products SET status = 1 WHERE productid = '$prodid'") or die (mysqli_error());
		}
	}
headhtml();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 /* Container holding the image and the text */
.container {
    position: relative;
}

/* Bottom right text */
.text-block {
    position: absolute;
    bottom: 40px;
    right: 40px;
    background-color: transparent;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 80px;
} 
    .text-block1 {
    position: absolute;
    bottom: 40px;
    right: 40px;
    background-color: transparent;
    color: white;
    padding-left: 20px;
    margin-bottom: 360px;
    margin-top: 30px;
    margin-right: 40px;
    padding-right: 20px;
} 
#form1{
    background-color: transparent;
    width: auto;
}
.centered-form{
	margin-top: 20px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
    #optrix{
        color: white;
        font-family: Cookie;
        font-size: 30px;
        margin-left: 20px;
    }
    #bids{
        color:#2a5992;
        font-family: Cookie;
        font-size: 30px;
    }
    
</style>
</head>
<body>

<nav class="navbar navbar-inverse" style="padding-top:15px;padding-right:20px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <span id="optrix">Optrix</span><span id="bids">Bids</span> </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>

<?php account($conn); ?>
<script type='text/javascript'>
	jQuery(document).ready( function() {
		jQuery('.nav3').hide();
		jQuery('.nav4').click( function() {
			jQuery('.nav3').toggle('fade');	
		});
	});
</script>
  </div>
</nav>

<div class="container">
    <img src="banner2.jpg"  width="1360px" style="margin-top:-20px; margin-right:100px; margin-left:-110px">
    <img src="sdas.png" class="text-block1" width="320px">
        <div class="row centered-form text-block" id="form1">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default" style="width:400px; margin-bottom:60px;">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Bidding <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body" >
			    		<form role="form" action="/register.php">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" onSubmit="register.php" value="Register" onclick="register1()" class="btn btn-info btn-block">
			    		
			    		</form>
<script>
    function register1{
        window.location.href = "/register.php";
    }
</script>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
    
    
    
    
    
     <div class="container">
        <div class="text-center"><h4><b>Todays Offer: </b>60% OFF On All Bid Packs Coupn Code "BIG60" Hurry!</h4></div><hr>
        <h1 class="text-center text-">Live Auctions</h1>
<!--      <div class="center_title_bar">Products On Bid</div>-->
     	<?php
	  		latest($conn);
		?>
         
    </div>
    <?php
            include'footer.php';
         ?>
    
</body>
</html>
