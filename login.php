

<?php
	session_start();
	require ("db.php");
	require("header.php");
	require("functions.php");
	headhtml();
	if (isset($_POST['register'])){
	
        
                $_SESSION['firstname']=$_POST['lname'];
                $_SESSION['lastname']=$_POST['fname'];
                $_SESSION['gender']=$_POST['gender'];
                $_SESSION['caddress']=$_POST['city'];
                $_SESSION['address']=$_POST['address'];
                $_SESSION['contactno']=$_POST['contactno'];
                $_SESSION['day']=$_POST['day'];
                $_SESSION['month']=$_POST['month'];
                $_SESSION['year']=$_POST['year'];
        
				$_SESSION['userid']=$_POST['loginid'];
				$_SESSION['email'] = $_POST['email1'];
				$_SESSION['password'] =$_POST['pass1'];
				$_SESSION['secques'] =$_POST['secques'];
				$_SESSION['secans'] =$_POST['secans'];
                $_SESSION['pic'] = $_POST['pic'];
							
				$fname = $_SESSION['firstname'];
				$lname = $_SESSION['lastname'];
				$gender = $_SESSION['gender'];
					$caddress = $_SESSION['caddress'];
					$address = $_SESSION['address'];
				$cusaddress = "$caddress"." "."$address";
				$contactno = $_SESSION['contactno'];	
					$day = $_SESSION['day'];
					$month = $_SESSION['month'];
					$year = $_SESSION['year'];
				$birthdate = "$day"." "."$month"." "."$year";
				$email = $_SESSION['email'];
				$userid =$_SESSION['userid'];
				$password =$_SESSION['password'];
				$secques =$_SESSION['secques'];
				$secanswer =$_SESSION['secans'];
                $propic = $_SESSION['pic'];
								
				mysqli_query($conn,"INSERT INTO member(lastname,firstname,gender,userid,password,email,contactno,birthdate,address,verification,memberimg) VALUES ('$lname','$fname','$gender','$userid','$password','$email','$contactno','$birthdate','$cusaddress','yes','$propic')");
				$query = mysqli_query($conn,"SELECT * FROM member WHERE userid = '$userid'") or die (mysqli_error());
					$row = mysqli_fetch_array($query);
					$id= $row['memberid'];
					mysqli_query($conn,"INSERT into secretquestions(memberid,question,answer) VALUES ('$id','$secques','$secanswer')");
				$_SESSION['ID']= $id;
				$_SESSION['logged'] = "notactive";
				$_SESSION['user'] = $userid;
				header('location:myaccount.php');
	}
	
	if(isset($_POST['login'])){
				if(isset($_POST['user'])) {
					if(isset($_POST['pass'])){			
						$username = $_POST['user'];	
						$pass = $_POST['pass'];
						$query = mysqli_query($conn,"SELECT * FROM member WHERE userid = '$username' AND  password = '$pass'") or die (mysqli_error());
						$user = mysqli_fetch_array($query);	
						if($user['verification'] == 'yes'){
							$_SESSION['ID'] = $user['memberid'];
							$_SESSION['logged'] = $user['memberid'];
							$_SESSION['user'] = $username;
							header('Location: myaccount.php');
						}
						elseif($user['verification'] == 'no')
						{
							$_SESSION['ID'] = $user['memberid'];
							$_SESSION['user'] = $user['fname'];
							$_SESSION['logged'] = "notactive";
							header('Location: myaccount.php');
						}
						else
						{
						echo "please check password detail";
						/* 	header("location: errorlogin.php"); */
						}
					}
					else
					{
					echo "please check your userid";
					/* 	header("location: errorlogin.php"); */
					}
				}
				else
				{
				echo "please check login detail";
				/* 	header("location: errorlogin.php"); */
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
    <div class="center_content">
        <h3 class="text-center">User Log In</h3>
      <div class="center_title_bar"></div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">

			<script type='text/javascript'>
				jQuery(document).ready( function() {
					
					jQuery('.contact_form').hide();
					jQuery('.reg_form').hide();
					jQuery('.loginb').click( function() {
						jQuery('.contact_form').toggle('slow');
						jQuery('.reg_form').hide();
					});
					jQuery('.regb').click( function() {
						jQuery('.reg_form').toggle('slow');
						jQuery('.contact_form').hide();
					});
				});
			</script>
          <div class="contact_form">
            <div id="form_row1">
              <form method = "post" action="" id="logins-form" class="logins-form">
                
                <span class="blue"><strong>Username</strong></span><input type="text" name="user">
                <span class="blue"><strong>Password</strong></span><input type="password" name="pass"><br><br>

                    <input type="submit" value="Login" name="login">
              </form>
            </div>
          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
  </div>
  <!-- end of main content -->
<?php include'footer.php'; ?>
