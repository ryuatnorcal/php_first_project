
/*************************************************************************
 * MENU BAR                                                              *
 ************************************************************************/                   

function menu()
{
	var main_menu = getMenu();
	document.write(main_menu);
}

function getMenu()
{
	return "<table>\
					<tr> \
					<td><a href=\"index.html\" title=\"Home\">|| Home</a></td>\
					<td><a href=\"about.html\" title=\"About\">|| About</a></td>\
					<td><a href=\"blog.php\" title=\"WebLog\">|| WebLog</a></td>\
					<td><a href=\"video.html\" title=\"Video\">|| Video</a></td>\
					<td><a href=\"photo.html\" title=\"Photo\">|| Photo</a></td>\
					<td><a href=\"graphics.html\" title=\"Graphics\">|| Graphics</a></td>\
					<td><a href=\"program.html\" title=\"Programming\">|| Programming</a></td>\
					<td><a href=\"special.html\" title=\"Special\">|| Special thanks</a></td>\
					<td><a href=\"contact.php\" title=\"Contact to me\">|| Contact</a></td>\
				</tr>\
			</table>";
}

/*************************************************************************
 * SIDE BAR                                                              *
 ************************************************************************/

function side()
{
	var colum = "Submenu";
	var subMenu = getSubMenu();

	document.write("<br /><h4>" + colum + "</h4><br />");
	document.write(subMenu);
	
}

function getSubMenu()
{
	return "<font size='2'> || Sub Menu </font> <br />";
}


       
