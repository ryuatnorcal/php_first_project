<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>:: Unknown title yet XP ::</title> 
     <link rel="stylesheet" type="text/css" href="blog.css" /> 
     <script type="text/javascript" src="blog.js"></script> 
<body>
     <div class="containa">
		<div class="head">
			<!--Here will be top of webpage -->
			<a href="index.html" title="Home"><img id="logo" src="logo.jpg" alt="Logo" style="float:left;" /></a>
			<div class="jap"><a href="/jp/index.html">|| JAPANESE </a></div> 
           
		</div>
		<div class="menu">
			<!--Here will be menu bar  -->
			<script>menu();</script>
		</div>
		<div class="pic">
			<!--Here will be picture place of page -->
		</div>
		<div class="contents">
			<!--Here will be contents area -->
		</div>
		<div class="leftColum">
			<!--Here will be left side of web  -->
            <script>side();</script>
		</div>
        
		<div class="rightColum">
			<!-- Here will be right side of web -->
           <?php
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message']; 
	$headMsg = "***** MESSAGE BEGIN FROM HERE ***** \n\n";
	$fooderMsg = "\n\n***** MESSAGE  END  FROM HERE *****";
	mail("world.wide.ninja.japan@gmail.com","Subject : " .$subject, $headMsg .$message. $fooderMsg, "From : " .$email);
	// this order has to "reciver email, subject, message, sender address"
	
	print "Thank you for using our mail form";
?>
	    
		</div>
		<!--<div class="centerColum">
			<!-- here will be center of web -->      
	<!--	</div>-->
		<div class="footer">
			<!-- here will be footer -->
			<p>All Copy Right, Received @ Dr.Pepper</p>
		</div>
	</div>
</body>
</html>
