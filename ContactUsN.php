<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>	 
	 <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places&region=in" type="text/javascript"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">	
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="footer.css" type="text/css" />
	<link rel="stylesheet" href="navbar.css" type="text/css" />


<script src="https://www.gstatic.com/firebasejs/3.4.1/firebase.js"></script>
<script src="gitnew2.js"></script>

<script src="contact.js"></script>

<script language="javascript" type="text/javascript">


</script> 

 </head>

<body style="background-color:white;">

  <!--pre-loader-->
      <div id="spinning">
         <div class="spinner"></div>
         <div class="spinner2"></div>
      </div>
      <!--pre-loader end-->
	  
	  
<!--NAVIGATION BAR-->
<!--NAVIGATION BAR-->
      <nav class="navbar navbar-custom navbar-fixed-top \">
         <div class="container-fluid  ">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span> 
               </button>
               <a class="navbar-brand" href="index.php"><img src="logo3.png" height= 40 px /></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a href="Home.php">
                        <!--span class=" glyphicon glyphicon-home"--></span> Home
                     </a>
                  </li>
                  <li><a data-toggle="modal" data-target="#myModal3" id="location" ><span class="glyphicon glyphicon-map-marker"></span> Search City</a></li>
                  <li>
                     <a href="AboutUsN.php">
                        <!--span class="glyphicon glyphicon-tasks"--></span> About Us
                     </a>
                  </li>
                  <li>
                     <a href="ContactUsN.php">
                        <!--span class="glyphicon glyphicon-phone"--></span> Contact Us
                     </a>
                  </li>
                  <li> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li class="divider"></li>
                        <li><a href="user.php">Submitted Reports</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:Signout()">LOGOUT</a></li>
                     </ul>
                  </li>
                  <li> &nbsp </li>
               </ul>
            </div>
         </div>
      </nav>

<!--CONTENT-->
<div class="container">
<br><br><br><br>
<div class="row">
<div class="col-md-8" >
<h2>LIVE SUPPORT</h2><br>
<h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
<br>It's a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br>
So here we are to support you in all the ways.<br>
There is no question too stupid to ask....
</div>
<div class="col-md-1">
			</div>
<div class="col-md-1" style="width:30%"><img src="livesupport.png" width="250px" height="250px"></div>
<div class="col-md-2">
			</div>
</div>
<div class="row">
<div class="col-md-7">
<form>
<div class="form-group" style="float:left;width:100%">
<label ><h2>CONTACT US</h2></label>
<br><label >Message:</label><br>
<textarea class="form-control" rows="7" id="comment" ></textarea><br>
<button type="submit" class="btn btn-primary" onclick="feedback()">Submit</button>
</form>
</div>
</div>
<div class="col-md-2">
			</div>
<div class="col-md-3 text-center" style="font-size:20px">
<h1>Company Information :</h1>
<br>Jaipur<br>India
<br>Phone:011-21548736<br>
Email: info@mywebsite.com<br>Follow on: Facebook,Twitter<br/>
</div>
</div>
</div>
<br/>




<!--footer-->
<footer class="foot">
<div class="container-fluid anc">
<div class="row">
<div class="col-sm-2 text-center ">
	<br>
		<img src="Slice 7.png" alt="logo"  style="height:200px" >
</div><br/>
<div class="col-sm-3 text-center">
	<div>Reports<br><a href="Home.php">Current Location</a><br><a data-toggle="modal" data-target="#myModal3">Search City</a></div><br>
	<div>Blogs<br><a href="Home.php">Recent</a><br><a href="Home.php">All</a></div>
</div>
<div class="col-sm-3 text-center">
	<div>Information<br><a href="AboutUsN.php">About us</a><br><a href="ContactUsN.php">Contact Us</a></div><br>
	<div>My Account<br><a href="javascript:Signout()">Sign out</a></div>
</div>
<div class="col-sm-4 text-center">
	<br/>
	<a href="#" id="apk" download>
		<img src="Slice 8.png" class="img-responsive" alt="logo" height="200px" padding-top="10px">
	</a>
</div>
</div>
</div>
</footer>

 <!-- search city --->
      <div id="myModal3" class="modal fade" >
         <div class="modal-dialog">
            <div class="modal-content search">
               <!-- Search Form -->
                  <!-- Search Field -->
                  <h1 class="text-center">Search Your city</h1>
                        <input id="searchCityField" class="form-control" type="text" name="search" placeholder="Enter your location here" required/>
						 <script>
                           function initialize() {
                          
                           var input = document.getElementById('searchCityField');
						   var options = {
							   types : ['(cities)'],
							   componentRestrictions : {country:"in"}
						   };
                           var autocomplete = new google.maps.places.Autocomplete(input,options);
                           }
                           
                           google.maps.event.addDomListener(window, 'load', initialize);
                        
                        </script>
                        <button class="btn btn-success pull-right" id="searchCityFieldButton" onclick="cityChange()" >
                        <span class="glyphicon glyphicon-search" aria-hidden="false">
                        <span style="margin-left:10px;" >Search</span>
                        </button>
                        </span>
						</div>
                  </div>
            </div>
       
<!-- Modal SIGN IN-->
<div id="myModal" class="modal fade" >
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3 class="modal-title"><font color="white">LOGIN</font></h3>
</div>
<div class="modal-body">

<font color="black">Don't have an account? </font><a  data-toggle="modal" data-target="#myModal2" data-dismiss="modal">Register here</a>
<br><br>
<input type="email" class="form-control" id="myemail2" placeholder="Email">
<br>
<input type="password" class="form-control" id="mypassword2" placeholder="Password">
<br>
<button class="btn btn-primary" onclick="toggleSignIn()" >Login</button>
<br><br>
<a  data-toggle="modal" data-target="#myModalforgot" data-dismiss="modal">Forget Password ?</a>

</div>
</div>
</div>
</div>


<!-- Modal Forgot Password-->
<div id="myModalforgot" class="modal fade" >
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3 class="modal-title"><font color="white">Password Reset<br></font></h3>
</div>
<div class="modal-body">
<font color="black">Don't want to reset the account password ? </font><a  data-toggle="modal" data-target="#myModal" data-dismiss="modal">Go back...</a>
<br><br>
<input type="email" class="form-control" id="myemailforgot" placeholder="Enter your Email eg. abc@gmail.com">
<br><center>
<button class="btn btn-primary" onclick="sendPasswordReset()" >Reset</button>
&nbsp &nbsp &nbsp &nbsp &nbsp
<button class="btn btn-primary" <a  data-toggle="modal" data-target="#myModal" data-dismiss="modal">Done</a></button>
</center>
<br><br>
</div>
</div>
</div>
</div>

<!-- Modal SIGN UP-->
<div id="myModal2" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h3 class="modal-title"><font color="white">SIGN UP</font></h3>
</div>
<div class="form-group">
<div class="modal-body">
<font color="black">Already have an account? </font><a data-toggle="modal" data-target="#myModal" data-dismiss="modal">Login</a>
<br><br>
<input type="text" class="form-control" id="signname" placeholder="Name" required ><br>
<input type="email" class="form-control" id="signemail" placeholder="Email"><br>
<input type="text" class="form-control" id="signcontact" placeholder="contact"><br>
<input type="password" class="form-control" id="signpassword1" placeholder="Password"><br>
<input type="password" class="form-control" id="signpassword2" placeholder="Re-Enter Password"><br>
<span id="passnotmatch" > </span>  
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary" style="float:left;" onclick="handleSignUp()" id="register">Register</button>
</div>
</div>
</div>
</div>
</div>

</body>
</html>
