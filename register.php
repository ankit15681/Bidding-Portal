<?php
	require("functions.php");
	require("header.php");
	session_start();
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
  <div id="main_content">
    <div class="center_content">
        <h3 class="text-center">Sign Up</h3>
      <div class="center_title_bar"></div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row1">
              <label class="contacts">
              	
             	</br></br>
              	</br></br>
                </br></br></br></br></br>
                </br></br>
                
              </label>
            </div>

            <div id="form_row1">
            <form action="login.php" method="post" name="contacts-form" id="contacts-form">
                
                <strong>Lastname:</strong>
              <input type="text" name="lname" class="required"/></br></br>
              <strong>Firstname:</strong>
              <input type="text" name="fname" class="required"/></br></br>
              <strong>Gender:</strong>
              <select name="gender">
				<option>Male</option>
				<option>Female</option>
			</select></br></br>
            <strong>Address:</strong> 
            <select name="city">
            	<option>City</option>
				<option>Mumbai</option>
				<option>Delhi</option>
                <option>Gwalior</option>
                <option>Chennai</option>
                <option>Kolkata</option>
                <option>Chandigarh</option><option>Others</option>
                
                
			</select></br></br>
            <input type="text" name="address" class="required"/></br></br>
           <strong>Contact:</strong> 
            <input type="text" name="contactno" class="required" onKeyPress="return isNumberKey(event)"/></br></br>
            <strong>Birthdate:</strong>
            <select name="day">
				<option>Date</option>
				<option>1</option>
                <option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>11</option>
                <option>12</option>
                <option>13</option>
                <option>14</option>
                <option>15</option>
                <option>16</option>
                <option>17</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                
                
			</select></br></br>
            <select name="month">
				<option>Month</option>
				<option></option>
				<option>January</option>
				<option>Febuary</option>
				<option>March</option>
				<option>April</option>
				<option>May</option>
				<option>June</option>
				<option>July</option>
				<option>August</option>
				<option>September</option>
				<option>October</option>
				<option>November</option>
				<option>December</option>
			</select></br></br>
            <select name="year">
                                  <option>Year</option>
                                  <option></option>
                                  <option>1990</option>
                                  <option>1991</option>
                                  <option>1992</option>
                                  <option>1993</option>
                                  <option>1994</option>
                                  <option>1995</option>
                                  <option>1996</option>
                                  <option>1997</option>
                                  <option>1998</option>
                                  <option>1999</option>
                                  
			</select></br></br>
                
<!--                End of first form-->
            	<strong>Email:</strong>
              	<input type="text" name="email1" id="email1" class="required email"/></br></br>
              	<strong>Desired Username:</strong>
              	<input type="text" name="loginid" id = "loginid" class="required"/></br></br>
              	<strong>Desired Password:</strong>
              	<input type="password" name="pass1" id="pass1" class="required" onKeyUp="checkPass(); return false;"/></br></br>
              	<strong>Confirm Password:</strong>
            	<input type="password" name="pass2" id="pass2"onkeyup="checkPass(); return false;"/><span id="confirmMessage" class="confirmMessage"></span></br></br>
                <strong>Profile Pic:</strong>
                <input type="file" name="pic" accept="image/*">
                  <strong>Security Question:</strong>
                <select name="secques">
                	<option>Pick a Security Question</option>
                	<option>Am I Gorgeous?</option>
                	<option>I'm Awesome, Am I?</option>
                	<option>Name of my Pet?</option>
               	</select></br></br>
            	<strong>Secret Answer:</strong>
            <input type="text" name="secans" value="Your Secret Answer:" onFocus="if(this.value=='Your Secret Answer:') this.value='';" onBlur="if(this.value=='') this.value='Your Secret Answer:';" class="required"/></br></br></br></br>
            
            <input type="submit" name="register" value="Register"/>
            </form>
            </div>
            
          </div>
        </div>
        <div class="bottom_prod_box_big"></div>
      </div>
    </div>
    <!-- end of center content -->
    <!-- end of right content -->
  </div>
<? php ?>
  <!-- end of main content -->
<?php include'footer.php'; ?>
