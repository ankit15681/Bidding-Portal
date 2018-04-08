<?php
	require ("db.php");
global $conn;

$conn = mysqli_connect('localhost', 'root', '', 'mydb');

// shows categories--------

 
	function categories($conn){
      	$query = mysqli_query($conn,"SELECT * FROM `pcategories`");
		while($row = mysqli_fetch_array($query)){
				echo "<li class = 'even'><a href ='showprod.php?id=".$row['categoryid']."'>".$row['categoryname']."</a></li>";						
			}
		echo "</ul>";
		}

		
//shows latest products-----

	function latest($conn){
		$query = mysqli_query($conn,"SELECT * FROM products WHERE status = 0 ORDER BY productid DESC LIMIT 0,6");
		

		
		while($row = mysqli_fetch_array($query))
		{
			$prodid = $row['productid'];
			$prodsbid = $row['startingbid'];
			//for displaying highest bid and no of bidders
			$query2 = mysqli_query($conn,"SELECT * FROM bidreport WHERE productid = '$prodid'");
			$noofbidders = mysqli_num_rows($query2);
			$highbid = $prodsbid;
			while($highonthis = mysqli_fetch_array($query2)){
				$checkthis = $highonthis['bidamount'];
				if($checkthis > $highbid){
					$highbid = $checkthis;
				}
			}
			$highestbidder = mysqli_query($conn,"SELECT * FROM bidreport WHERE bidamount = '$highbid'");
			$highestbiddera = mysqli_fetch_array($highestbidder);
			$hibidder = $highestbiddera['bidder'];
			$name = mysqli_query($conn,"SELECT * FROM member WHERE memberid = '$hibidder'");
			$namea = mysqli_fetch_array($name);
			$highname = $namea['userid'];
			echo "<div class='prod_box'>";
				echo "<div class='top_prod_box'></div>";
				echo "<div class='center_prod_box'>";
					echo "<div  class='product_title'><a href='details.php?id=".$row['productid']."'><div style='color:black; font-size:18px;'>".$row['prodname']."</div></a></div>";
				echo "<div class='product_img'><a href='details.php?id=".$row['productid']."'><img src='admin/images/products/".$row['prodimage']."' width='200' height='200' alt='' border='0' /></a></div>";
				echo "<div class='prod_price'><span class='price' style='color:green; font-size:24px;' >INR ".$row['startingbid']."</span><br />
				<span class='price' style='font-size:14px;'>".$highname."</span>
				</div>";
			echo "</div>";
			echo "<div class='bottom_prod_box'></div>";
			echo "<div class='prod_details_tab'><a href='details.php?id=".$row['productid']."' class='prod_details' title='header=[Click to Bid] body=[&nbsp;] fade=[on]'><div style='margin-left:-40px; width:50px;'><button type='button' class='btn btn-primary btn-lg'>Bid Now</button></div></a> </div>";
			echo "</div>";
		}
	  }



function account($conn){        
	if ($_SESSION['logged'] != 'guest'){
        
      echo  '<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user nav1"></span> Hello, User</a></li>
      <li><a href="myaccount.php"><span class="glyphicon glyphicon-modal-window  nav2" ></span> Account</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon glyphicon-log-out  nav3"></span> Log Out</a></li>
    </ul>';
            
	}else{      echo  '<ul class="nav navbar-nav navbar-right">
              <li><a href="register.php"><span class="glyphicon glyphicon-user nav4"></span> Sign Up</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in nav5"></span> Login</a></li>
               </ul>';
	}
}
function logform($conn){
	if ($_SESSION['logged'] == 'guest'){
	echo '<div class="title_box">Welcome</div>
			  <div class="border_box">
					<br />
						<strong>User: </strong>Guest<br /><br />
						<strong>Account Status:</strong> Not Active<br /><br />
						<strong>Bid Counter:</strong> Not Available<br /><br />
						<strong>Items Acquired:</strong> Not Available<br /><br />
						<strong>Feedbacks:</strong> Not Available<br /><br />
						<ul></ul>
			</div>';
	}elseif($_SESSION['logged'] == 'notactive'){
		$hisid = $_SESSION['logged'];
		$query = mysqli_query($conn,"SELECT * FROM member WHERE memberid = '$hisid' ");
		While($rows = mysqli_fetch_array($query)){
			echo '<div class="title_box">Welcome</div>
					<div class="border_box">
						<br />
							<strong>Username:</strong> '.$rows['userid'].'<br /><br />
							<strong>Account Status</strong>Not Active<br /><br />
							<strong>Bid Counter:</strong> Not Available<br /><br />
							<strong>Items Acquired:</strong> Not Available<br /><br />
							<strong>Feedbacks:</strong> Not Available<br /><br />
							<ul></ul>
						</form>
				</div>';
			}
	}else{
		$hisid = $_SESSION['logged'];
		$query = mysqli_query($conn,"SELECT * FROM member WHERE memberid = '$hisid' ");
		While($rows = mysqli_fetch_array($query)){
			echo '<div class="title_box">Welcome</div>
					<div class="border_box">
							<br />
							<strong>Username:</strong> '.$rows['userid'].'<br /><br />
							<strong>Account Status: </strong> Active<br /><br />
							<strong>Bid Counter:</strong> 0<br /><br />
							<strong>Items Acquired:</strong> 0<br /><br />
							<strong>Feedbacks:</strong> 0<br /><br />
							<ul></ul>
						</form>
				</div>';
			}
		}
	}
?>
