<?php
	session_start();
	require ("db.php");
	require("header.php");
	require("functions.php");
	headhtml();

$userid = $_SESSION['ID'];
				
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
		$userid = $_SESSION['ID'];
		$query = mysqli_query($conn,"SELECT * FROM member WHERE memberid = '$userid'") or die (mysqli_error());
		$row = mysqli_fetch_array($query);
		$username = $row['userid'];
		$selleracc = $row['email'];
		if (!$row) 
			{
				die("Error: Data not found..");
				echo $userid;
			}
		if (isset($_POST['prodsave'])){

	$prodname=$_POST['prodname'];
	$startingbid=$_POST['startingbid'];
	$category=$_POST['category'];
	$descrpt=$_POST['descrpt'];
		if ($startingbid > 10000){
			$fdate = time() + (31 * 24 * 60 * 60);
			$duedate = date('l,F d,Y',$fdate);
		}else{
			$fdate = time() + (14 * 24 * 60 * 60);
			$duedate = date('l,F d,Y',$fdate);
		}
	$datenow = date('l,F d,Y');
	$name = $_FILES["imagep"] ["name"];
	$type = $_FILES["imagep"] ["type"];
	$size = $_FILES["imagep"] ["size"];
	$temp = $_FILES["imagep"] ["tmp_name"];
	$error = $_FILES["imagep"] ["error"];
	mysql_query("INSERT INTO products(prodname,categoryid,prodescription,startingbid,prodimage,dateposted,duedate,status,sellername,sellerpayaccount) 
						VALUES ('$prodname','$category','$descrpt','$startingbid','$name','$datenow','$duedate',0,'$username','$selleracc')") or die(mysql_error());
						echo "Product has been successfully added to database!!!<br>";
	if ($error > 0){
		die("Error uploading file! Code $error.");}
	else
	{
		if($size > 10000000) //conditions for the file
		{
		die("Format is not allowed or file size is too big!");
		}
		else
		{
		move_uploaded_file($temp,"admin/images/products/".$name);
		}
	} 
		
		
}
	?>
    <div class="center_content">
        <h3 class="text-center">User Profile</h3>
      <div class="center_title_bar"></div>
      <div class="prod_box_big class1">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
           <div class="product_img_big"> <?php echo "<a><img src='admin/images/upload/".$row['memberimg']."' width='169' height='155' alt='' border='0' /></a>"; ?> 
 
          </div>
          <div class="details_big_box" style="margin-top:-40px;">
              <div class="product_title_big" style="margin-top:20px;" ><h3><?php echo "Hello ".$row['userid'];?></h3></div><br /><br />
            <div class="specifications" style="margin-top:-40px;">
				Name: <span class="blue"><?php echo "".$row['firstname']." ".$row['lastname']."";?></span><br />
				Contact no: <span class="blue"><?php echo $row['contactno'];?></span><br />
				Address: <span class="blue"><?php echo $row['address'];?></span><br />
				Gender: <span class="blue"><?php echo $row['gender'];?></span><br />
				Email Address: <span class="blue"><?php echo $row['email'];?></span><br />

            </div>
			
           	</div>
        </div>
     
    </div>
	</div>
    </div>
</body>
</html>
<?php ?>
<?php include'footer.php'; ?>