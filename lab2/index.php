<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<?php
	$id=$_REQUEST['tag'];
	if(!empty($id))
	{?> 
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
				<?php $language = $_REQUEST['language'];
			    if($language == 'japanese')
				{?>
					<a href="index.html">|| ENGLISH </a></div>
				<?php}
				else
				{
					?><a href="index.php?language=japanese">|| 日本語 </a></div><?php
				}?>
 
           
		</div>
		<div id="menu" class="menu">
			<?php $language = $REQUEST['language'];
				if($language == 'japanese')
				{?>
					<script>menuJP('jp');</script>
				<?php}
				else
				{
					?><script>menu();</script><?php
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
			
			$address = 'index.php?' .$id.'&language='.$language;
			if($language !='japanese')
			{
/*************************************************************************
 * ABOUT CONTENTS                                                        *
 ************************************************************************/

				if($id==0001)
				{	?><script>sideAbout();</script><?php	}
				
/*************************************************************************
 * VIDEO CONTENTS                                                        *
 ************************************************************************/

				if($id==0003)
				{	?><script>sideVideo();</script><?php	}
				
/*************************************************************************
 * PHOTO CONTENTS                                                        *
 ************************************************************************/

				if($id==0004)
				{	?><script>sidePhoto();</script><?php	}
				
/*************************************************************************
 * GRAPHIC CONTENTS                                                      *
 ************************************************************************/

				if($id==0005)
				{	?><script>side();</script><?php	}	
				
/*************************************************************************
 * PROGRAMING CONTENTS                                                   *
 ************************************************************************/

				if($id==0006)
				{	?><script>sideProg();</script><?php	}
				
/*************************************************************************
 * SPECIAL THANKS                                                        *
 ************************************************************************/

				if($id==0007)
				{	?><script>side();</script><?php	}
/*************************************************************************
 * CONTACT CONTENTS                                                      *
 ************************************************************************/

				if($id=="0008")
				{	?><script>getSubMenuContact();</script><?php	}
/*************************************************************************
 * WEB LOG                                                               *
 ************************************************************************/

				if($id=="0002")
				{	?><script>side();</script><?php	}	
			}
			?>
		</div>
        
		<div class="rightColum">
			<!-- Here will be right side of web -->
            <br />
            <?php
            // received file
            	//$id="0000";
            $id=$_GET['tag'];
            $language=$_GET['language'];
	if($language!='japanese')
	{

/*************************************************************************
 * ABOUT CONTENTS                                                        *
 ************************************************************************/
            if($id==0001)
            {	
          //  	include("about.php");	
          //  	include("404.php");
            }
        
/*************************************************************************
 * WEBLOG CONTENTS                                                       *
 ************************************************************************/        
       	    if($id==0002)
      		{	
        	//	include("404.php");		
        	//	include("weblog");
    		}
            
/*************************************************************************
 * VIDEO CONTENTS                                                        *
 ************************************************************************/
            if($id==0003)
            {   
            //	include("video.php");
            	//include("404.php");
    	    }	
	    	
/*************************************************************************
 * PHOTO CONTENTS                                                        *
 ************************************************************************/

	    	if($id==0004)
	    	{   
	    		include("video.php");   
	    		//include("404.php");
    		}
	    	if($id==0005)
	    	{	
	    		include("graphics.php");
	    		//include("404.php");
	   		}
	    	if($id==0006)
	    	{	
	    		include("prog.php");	
	    		//include("404.php");
    		}
	    	if($id==0007)
	    	{	
	    		//include("spThanks.php");
	    		include("404.php");
	   		}

/*************************************************************************
 * CONTACT CONTENTS                                                      *
 ************************************************************************/

	    	if($id=="0008")
	    	{
	    		//include("mail.php");
	    		include("404.php");
	    	}
    	}
	    
	   	?>
	   	</div>   	
	    <div class="footer"> 
		<!-- here will be footer --> 
			<p> <center>|| β-TEST VERSION ||</center> All Copy Right, Received @ Ryu </p> 
		</div> 
<?php
	else
	{
		include('index.html');
	}
	if($language=='japanese')
	    {
	    	?><h3>|| 日本語版　ページ</h3>
	    	<p>日本語版ページは、只今作成中でございます。<br />
	    	   完成まで今しばらくお待ちください。</p>
    	  　<br />
    	  　<br />
    	  　<h3>|| 東北地方大震災で被災された方々へ</h3>
    	  　<p>この度は東北地方大震災でお亡くなりになられた方々に<br />深くご冥福お祈りをいいたすと共に、被災者の方々の早い復旧を心からお祈りいたします。</p>
    	  　<?php
	   	}
	?>
</body>
</html>
