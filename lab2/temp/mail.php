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
						  Name : <?= $name?> <br />
						  Email : <?=$email?><br />
						  Subject : <?=$subject?><br />
					      Message : <?=$msg?> <br />
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
