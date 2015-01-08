<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>:: Weblog ::</title> 
    <link rel="stylesheet" type="text/css" href="blog.css" /> 
    <script type="text/javascript" src="blog.js"></script> 
<body>
     <div class="containa">
		<div class="head">
			<!--Here will be top of webpage -->
			<a href="index.html" title="Home"><img id="logo" src="logo.jpg" alt="Logo" style="float:left;" /></a>
			<div class="jap"><a href="/jp/index.html">|| JAPANESE </a></div> 
           
		</div>
		<div id="menu" class="menu">
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
            <br />
            <?php
            // received file 
			$title = $_POST["subject"];
			$cont = $_POST["contents"];
            $fileName = "../lab/blog.txt";
            
			//test print 
			print "<h3>" .$title. "</h3><br>";
			print $cont;
			print "<br />";

			print "<br />" .$fileName. "<br />";
			// this is one method using php
       		$file = fopen($fileName,"r")
       		or exit("Can not open the file $fileName ");			 
			// can not open with "write" mode 
			saveTitle($file,$title);
			saveArticle($file,$cont);
			
			fclose($file);
			function saveTitle($file,$title)
		    {
			    fwrite($file,$title);
			}
			
			function saveArticle($file,$cont)
			{
			    fwrite($file,$cont);
			}
			/*
			// this is the other method using mysql
			$server = "localhost";
			$user = "ryu.keepskatinbro.com";
			$pass = "8443";
			print "<br /> Using mySql<br />";
			mysql_connect($server,$user,$pass);
			// see if there is error or not 
			if (!$con)
            {
                die('Could not connect: ' . mysql_error());
            }
            else
            {
                print "Connected to server ";
            }
				*/
			?>
		<br />
	    <fb:comments xid="[Random Number Associated To Random Comment Feed]_comments" canpost="false" candelete="false" returnurl="http://www.facebook.com/[Your Facebook Page]"><fb:title></fb:title></fb:like>
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


