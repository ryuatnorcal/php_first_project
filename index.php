<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>:: Weblog ::</title> 
    <link rel="stylesheet" type="text/css" href="/contents/style.css" /> 
    <script type="text/javascript" src="/contents/style.js"></script> 
   </head>
<body>
     <div class="containa">
		<div class="head">
			<!--Here will be top of webpage -->
			<a href="index.html" title="Home"><img id="logo" src="../pic/logo.jpg" alt="Logo" style="float:left;" /></a>
			<div class="jap">Language : 
				<?php $id = $_REQUEST['language'];
			    if($id == 'japanese')
				{?>
					<a href="index.html">|| ENGLISH </a></div>
				<?php }
				else
				{
					?><a href="index.php?language=japanese">|| 日本語 </a></div><?php
				}?>       
		</div>
		<div id="menu" class="menu">
			<?php $id = $REQUEST['language'];
				if($id == 'japanese')
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
			$language=$_GET['language'];
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
            {	include("/contents/about.php");	}
        
/*************************************************************************
 * WEBLOG CONTENTS                                                       *
 ************************************************************************/        
	        if($id==0002)
    	    {	include("/contents/404.php");		}
            
/*************************************************************************
 * VIDEO CONTENTS                                                        *
 ************************************************************************/
            if($id==0003)
            {   include("/contents/video.php");   }	
	    	
/*************************************************************************
 * PHOTO CONTENTS                                                        *
 ************************************************************************/

	    	if($id==0004)
	    	{   include("/contents/video.php");   }
	    	if($id==0005)
	    	{	include("/contents/404.php");		}
	    	if($id==0006)
	    	{	include("/contents/prog.php");	}
	    	if($id==0007)
	    	{	
	    	?><h3>|| SPECIAL THANKS !! </h3>
	    		<p>
	    	   I would like to say thank you for all owner who on the list, and also you !
	    	      Thank you for chacking my web site!!
    	      </p>
    	      <table class="codeTable">
    	      	<tr class="explan">
    	      		<td class="codeTd"><a href="http://bettafootwear.com/" title="bettafoorwear" target="_blank">bettafoorwear</a>
    	      		    <a href="http://keepskatinbro.com/" title="KeepSkatinBro" target="_blank">KeepSkatinBro</a></td>
	      		    <td class="codeTd"><p>Those sites of owner is my best friend who also rent me his server space. He have helped some technical support.</p></td>
      		    </tr>
      		    <tr class="explan">
      		    	<td class="codeTd"><a href="http://www.flickr.com/photos/robert_paul/" title="Robert Paul" target="_blank">Robert Paul</a></td>
      		    	<td class="codeTd"><p>Paul provides me some his pictures. </p></td>
  		    	</tr>
  		    	<tr class="explan">
  		    		<td class="codeTd">... And You !! </td>
  		    		<td class="codeTd"><p>Visiting and seeing around my site :)</p></td>
	    		</tr>
	    	</table>
	    	<?php
	   		}

/*************************************************************************
 * CONTACT CONTENTS                                                      *
 ************************************************************************/

	    	if($id=="0008")
	    	{
	    		
	    	    if(isset($_REQUEST['email']))
				{
					?>
					<h3>|| THANK YOU !!</h3>
					<div class="doc"><?php
					$email = $_REQUEST['email'];
					$subject = $_REQUEST['subject'];
					$msg = $_REQUEST['message'];
					$name = $_REQUEST['user'];
					$message = "Name : ".$name. "\nEmail : ".$email. "\nComment : \n\t" .$msg; 
					$headMsg = "***** MESSAGE BEGIN FROM HERE ***** \n\n";
					$fooderMsg = "\n\n***** MESSAGE  END  FROM HERE *****";
					mail("world.wide.ninja.japan@gmail.com","Subject : " .$subject, $headMsg .$message. $fooderMsg, "From : " .$email);
					?> <p>Thank you for your comment!!</p> <br />
						  Name : <?php print $name?> <br />
						  Email : <?php print$email?><br />
						  Subject : <?php print $subject?><br />
					      Message : <?php print $msg?> <br />
			      <?php
				}
				else
				{
					?>
					   <h3>|| CONTACT ME !!</h3>
					   <div class="doc">
					   <p> You can make a contact with Ryu form here!!</p>
					   <form method='post' action='index.php?tag=0008'>
					   <table>
					   <tr>
					   	<td class="mail">Name: </td>
					   	<td><input name='user' type='text' /></td>
				       </tr>
				       <tr> 
	  				   	<td class="mail">Email: </td>
	  				   	<td><input name='email' type='text' /></td>
	  				   </tr>
	  				   <tr>
	  			       	<td class="mail">Subject: </td>
	  			       	<td><input name='subject' type='text' /></td>
				       </tr>
				       <tr>
				        <td>Message: </td>
				        <td>&nbsp;</td>
			           </tr>
			           </table>
	  			       	<textarea class="textArea" name='message' rows='15' cols='40'></textarea><br />
	  			       <input class="textArea" type='submit' />
	  			       </form>
	  			       <?php
	       		}		       
	       		?></div><?php
	    	}
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
	   	</div>   	
	    <div class="footer"> 
		<!-- here will be footer --> 
			<p> <center>|| β-TEST VERSION ||</center> All Copy Right, Received @ Ryu </p> 
		</div>
	<?php}
	else
	{
		print "undefine";
	}?>
	</body>
</html>
