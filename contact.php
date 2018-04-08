<?php
	session_start();
	require ("db.php");
	require("header.php");
	require("functions.php");
	headhtml();
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

    <h2 class="text-center">Made with <span class="glyphicon glyphicon-heart"></span></h2><br>
    <div class="text-center">
    <p>By</p><br>
    <ul>
        <li><h3>Abhishek Kumar Singh</h3></li>
        <li><h3>Vaibhav Jain</h3></li>
        <li><h3>Ankit Meena</h3></li>
    </ul>
    </div>
    
</body>
</html>
<?php include'footer.php'; ?>
    
    
  