<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>:: Weblog ::</title> 
    <link rel="stylesheet" type="text/css" href="index.css" /> 
    <script type="text/javascript" src="index.js"></script> 
<body>
     <div class="containa">
		<div class="head">
			<!--Here will be top of webpage -->
			<a href="index.html" title="Home"><img id="logo" src="../pic/logo.jpg" alt="Logo" style="float:left;" /></a>
			<div class="jap">Language : 
			<?php
				$id = $_REQUEST['language'];
			    if($id == 'japanese')
				{?>
					<a href="index.html">|| ENGLISH </a></div>
				<?php
				}
				else
				{
					?><a href="index.php?language=japanese">|| 日本語 </a></div><?php
				}?>
 
           
		</div>
		
		<div class="pic">
			<!--Here will be picture place of page -->
		</div>
		<div class="contents">
			<!--Here will be contents area -->
		</div>
		<div class="leftColum">
			<!--Here will be left side of web  -->
			<?php
			$id=$_GET['tag'];
			$language=$_GET['language'];
			$address = 'index.php?' .$id.'&language='.$language;
			if($language !='japanese')
			{
				if($id==0001)
				{	?><script>sideAbout();</script><?php }	
				if($id=="0002")
				{	?><script>side();</script><?php	}	
				if($id==0003)
				{	?><script>sideVideo();</script><?php	}
				if($id==0004)
				{	?><script>sidePhoto();</script><?php	}
				if($id==0005)
				{	?><script>side();</script><?php	}	
				if($id==0006)
				{	?><script>sideProg();</script><?php	}
				if($id==0007)
				{	?><script>side();</script><?php	}
				if($id=="0008")
				{	?><script>getSubMenuContact();</script><?php	}
				
			}
			else
			{	print "日本語版ページは、只今作成中でございます。" ;}
			?>
		</div>
		<div class="rightColum">
			<?php
			$id=$_GET['tag'];
			if(!empty($id);)
			{
				if($id==0001)
				{	
					//include("./contents/about.php");
					include("/contents/404.php");
				}
				if($id=="0002")
				{	
					//include("./contents/weblog.php");
					include("/contents/404.php");
				}	
				if($id==0003)
				{	
					//include("./contents/video.php");
					include("/contents/404.php");
				}
				if($id==0004)
				{	
					//include("./contents/photo.php");
					include("/contents/404.php");
				}
				if($id==0005)
				{	
					//include("./contents/graphics.php");
					include("/contents/404.php");
				}	
				if($id==0006)
				{
					//include("./contents/prog.php");
					include("/contents/404.php");
				}
				if($id==0007)
				{
					//include("./contents/spThanks.php");
					include("/contents/404.php");
				}
				if($id=="0008")
				{
					//include("./contents/mail.php");
					include("/contents/404.php");
				}
			}
			if(empty($id);)
			{
					include("index.html");
			}	*/?>
			
			</div>
			<div class="footer"> 
		<!-- here will be footer --> 
			<p> <center>|| β-TEST VERSION ||</center> All Copy Right, Received @ Ryu </p> 
		    </div>
	    </div>
    </div>
</body>
</html>
