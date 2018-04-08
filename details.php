<?php
	session_start();
	require("functions.php");
	require("db.php");
	require("header.php");
	headhtml();
	$duedate = "2018-04-08 00:00:00";
    
    if(isset($_POST['submit'])){
		$high = $_POST['high'];
		$id = $_SESSION['prodid'];
		$bidamount = $_POST['bidamount'];
		$query = mysqli_query($conn,"SELECT * FROM products WHERE productid = '$id'") or die (mysqli_error());
		$prod = mysqli_fetch_array($query);
		$userid = $_SESSION['ID'];
		$query2 = mysqli_query($conn,"SELECT * FROM member WHERE memberid = '$userid'") or die (mysqli_error());
		$user = mysqli_fetch_array($query2);
		$biddername = $user['memberid'];
		$prodname = $prod['prodname'];
		if($bidamount > $high){
		mysqli_query($conn,"INSERT INTO bidreport(productid,bidder,biddatetime,bidamount,status) VALUES ('$id','$biddername',now(),'$bidamount',0)");

		$message = "Congratulations ".$_SESSION['user']."! You are the highest bidder for Item ".$prodname."";
            echo "<script type='text/javascript'>alert('$message');</script>";
		
		
		}elseif($bidamount <= $high){
			$msg1 = "Your Bid is not counted for the amount is lower than the highest bid or does not exceed the starting bid";
            echo "<script type='text/javascript'>alert('$msg1');</script>";
		}
	}


?>
<html>
<body>
<nav class="navbar navbar-inverse" style="padding-top:15px;padding-right:20px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img href="images/footer_logo.png"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
 <div id="main_content">
    <?php
		$id = $_GET['id'];
		$query = mysqli_query($conn,"SELECT * FROM products WHERE productid = '$id'");
		$row = mysqli_fetch_array($query);
	?>
    <div class="center_content">
        <h1 class="text-center">Product Details</h1>
      <div class="center_title_bar"></div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
           <div class="product_img_big">
				<a title='header=[Click to Bid] body=[&nbsp;] fade=[on]'><img src='admin/images/products/<?php echo $row['prodimage'];?>' width='200' height='200' alt='' border='0' /></a>
			</div>
			<script type='text/javascript'>
			jQuery(document).ready( function() {
		
				jQuery('.bid_box').hide();
				jQuery('.details').hide();
				
				jQuery('.details').click( function() {
					jQuery('.proddet').toggle('fade');
					jQuery('.bid').toggle('fade');
					jQuery('.bid_box').hide()
					jQuery('.details').hide();
				});
				jQuery('.bid').click( function() {
					jQuery('.details').toggle('fade');
					jQuery('.bid_box').toggle('fade');
					jQuery('.bid').hide();
					jQuery('.proddet').hide();
				});
			});
			</script>
			
			
			<div class="details_big_box">
				<div class='proddet'>
					<div class="product_title_big"><?php echo $row['prodname'];?></div><br />
					<div class="specificationss"> Description: <span class="blue"><?php echo $row['prodescription'];?></span><br /><br />
						Date Added: <span class="blue"><?php echo $row['dateposted'];?></span><br /><br />
						Item number: <span class="blue"><?php echo '0998'.$row['productid'].'';?></span><br /><br />
                        Bid Start at:<span class="blue"><?php echo ''.$row['start_time'].'';?></span><br /><br />                        
                        <h1 id="demo" style="font-size:60px"></h1>
                        <style>
                            #demo{
                                float:right; 
                                color: green;
                            }
                            #text1{
                                float: right;
                                color: red;
                            }
                        </style>
                        <h1 id="text1"></h1>
<?php                    
if($_SESSION['logged']=='notactive'||$_SESSION['logged']=='guest'){
  ?> 
    <script>                 
    document.getElementById("demo").style.display='none';
      document.getElementById("text1").style.display='none';
    </script><?php
}else{ ?>
    
       <?php
    } ?>
<script type="text/javascript">
    var countDownDate;
    var currentDate = new Date().getTime();
    
     resetTimer();  
    
    function resetTimer(){
      
        countDownDate = new Date().getTime()+ 60*1000;       
        
    }
        
        var x = setInterval(function() {

  // todays date and time
  var now = new Date().getTime();
  var distance = countDownDate - now;

  // Time calculations for days, hours, minute and second
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

document.getElementById("demo").innerHTML = seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
      document.getElementById("demo").innerHTML = "";
    document.getElementById("text1").innerHTML = "SOLD OUT!";
      document.getElementById("time").style.display='none';
      document.getElementById("time1").style.display='none';
      document.getElementById("time2").style.display='none';
      
      
  }
}, 1000);


// Update the count down every 1 second

   
</script>

<!--
						Category: <span class="blue">
						<?php
							$categid = $row['categoryid'];
							$categ = mysqli_query($conn,"SELECT * FROM pcategories WHERE categoryid = '$categid'")or die(mysqli_error());
							$catega = mysqli_fetch_array($categ);
							echo $catega['categoryname'];
						?></span><br /><br />
-->
					
					</div>
				</div>
				<div class='bid_box'>
				<?php
							$id = $_GET['id'];
							$_SESSION['prodid'] = $id;
							$query = mysqli_query($conn,"SELECT * FROM products WHERE productid = '$id'") or die (mysqli_error());
							$row = mysqli_fetch_array($query);
							$prodid = $row['productid'];
							$prodsbid = $row['startingbid'];
							$seller = $row['sellername'];
							
							//for displaying highest bid and no of bidders
							$query2 = mysqli_query($conn,"SELECT * FROM bidreport WHERE productid = '$prodid'") or die (mysqli_error());
							$noofbidders = mysqli_num_rows($query2);
							
							$highbid = $prodsbid;
							while($highonthis = mysqli_fetch_array($query2)){
								$checkthis = $highonthis['bidamount'];
								if($checkthis > $highbid){
									$highbid = $checkthis;
								}
							}
							
							$highestbidder = mysqli_query($conn,"SELECT * FROM bidreport WHERE bidamount = '$highbid'")or die(mysqli_error());
							$highestbiddera = mysqli_fetch_array($highestbidder);
							$hibidder = $highestbiddera['bidder'];
							
							if($_SESSION['logged']=='notactive'||$_SESSION['logged']=='guest'){
								echo"<span class='blue'><p> Only those who have an activated account can access to this and participate. Please Log-In or Register. If you have already registered, please Re-Login</p></span>";
							}else{
							
							echo"</span>
								<br />
								&nbsp&nbsp Bids: <span class='blue'>";?><?php echo $noofbidders;?><?php echo"</span><br /><br />
								&nbsp&nbsp Highest Bid: <span class='blue'>INR ";?><?php echo $highbid;?><?php echo"</span><br /><br />
								&nbsp&nbsp Highest Bidder: <span class='blue'>";?>
								<?php 
								$name = mysqli_query($conn,"SELECT * FROM member WHERE memberid = '$hibidder'")or die(mysqli_error());
								$namea = mysqli_fetch_array($name);
								echo $namea['userid'];?>
								<script language="JavaScript" src="js/countdown.js"></script>
								<?php echo'</span><br /><br />
									<form method = "post" action="" id="logins-form" class="logins-form">
										<input type = "hidden" value="'.$highbid.'" name="high">
										&nbsp&nbsp <div id="time1"<strong>INR  </strong><input type="text" name="bidamount"></div>
										<input type="submit" id="time" onclick="resetTimer()" value="Place Bid" name="submit">
									</form>
								&nbsp&nbsp <span class="blue"><strong>';
								echo "<span class='blue'><div id='time2'>(Enter Price higher than INR ".$highbid.")</span></div>";
								echo "<br />&nbsp&nbsp&nbsp&nbsp<span class='blue'> click <a rel='facebox' href='bidlog.php?id=".$prodid."'>here</a> to view Bidding Log</span>";
							}
					?>
				</div>
				
			</div>

        <div class="bottom_prod_box_big"></div>
      </div>
	  </div>
      
    </div>
  </div>
    <hr>
<!-- end of main content -->
<div style="height:30px">

</div>
</body>
  
</html>
<?php  ?>
  <?php include'footer.php'; ?>
