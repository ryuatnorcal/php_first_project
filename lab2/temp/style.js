/*************************************************************************
 * MENU BAR                                                              *     
 ************************************************************************/                   

function menuJP($id)
{
	var main_menu = getMenu($id);
	document.write(main_menu);
}

function getMenu($id)
{
	return "<table>\
					<tr> \
					<td><a href=\"index.html\" title=\"Home\">|| Home</a></td>\
					<td><a href=\"index.php?tag=0001\" title=\"About\">|| About</a></td>\
					<td><a href=\"index.php?tag=0002\" title=\"WebLog\">|| WebLog</a></td>\
					<td><a href=\"index.php?tag=0003&id=home\" title=\"Video\">|| Video</a></td>\
					<td><a href=\"index.php?tag=0004&id=photograph\" title=\"Photo\">|| Photo</a></td>\
					<td><a href=\"index.php?tag=0005\" title=\"Graphics\">|| Graphics</a></td>\
					<td><a href=\"index.php?tag=0006&id=home\" title=\"Programming\">|| Programming</a></td>\
					<td><a href=\"index.php?tag=0007\" title=\"Special\">|| Special thanks</a></td>\
					<td><a href=\"index.php?tag=0008\" title=\"Contact to me\">|| Contact</a></td>\
				</tr>\
			</table>";
}


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
					<td><a href=\"index.php?tag=0001\" title=\"About\">|| About</a></td>\
					<td><a href=\"index.php?tag=0002\" title=\"WebLog\">|| WebLog</a></td>\
					<td><a href=\"index.php?tag=0003&id=home\" title=\"Video\">|| Video</a></td>\
					<td><a href=\"index.php?tag=0004&id=photograph\" title=\"Photo\">|| Photo</a></td>\
					<td><a href=\"index.php?tag=0005\" title=\"Graphics\">|| Graphics</a></td>\
					<td><a href=\"index.php?tag=0006&id=home\" title=\"Programming\">|| Programming</a></td>\
					<td><a href=\"index.php?tag=0007\" title=\"Special\">|| Special thanks</a></td>\
					<td><a href=\"index.php?tag=0008\" title=\"Contact to me\">|| Contact</a></td>\
				</tr>\
			</table>";
}

/*************************************************************************
 * SIDE BAR  - DEFAULT                                                   *
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

/*************************************************************************
 * SIDE BAR  - VIDEOS                                                    *
 ************************************************************************/

function sideVideo()
{
	var colum = " || Menu";
	var subVideo = getSubVideo();

	document.write("<br /><h4>" + colum + "</h4><br />");
	document.write(subVideo);
}

function getSubVideo()
{
	return " <dl class=\"menu\" style=\"font-size:12px;\"> \
				<dt><a href=\"?tag=0003&id=sk8#sk8\">|| SKATEBOARGINDS</a></dt> \
				<dt><a href=\"?tag=0003&id=snow#snow\">|| SNOWBOARDINGS</a></dt>\
				<dt><a href=\"?tag=0003&id=surf#surf\">|| SURFING</a></dt> \
				<dt><a href=\"?tag=0003&id=music#music\">|| MUSIC</a></dt> \
			</dl> ";
}


/*************************************************************************
 * VIDEO MENU UP                                                         *
 ************************************************************************/

function videoMenuUp(id)
{  
    if(id=="sk8")
    {
        document.write(" ");
    }
    
    if(id=="snow")
    {
        document.write("<div style='background-color:#000000';>\
        <h3><a href='?tag=0003&id=sk8#sk8'>|| SKATEBOARDINGS</a></h3>\
        </div>");
    }
    
    if(id=="surf")
    {
        document.write("<div style='background-color:#000000';>\
        <h3><a href='?tag=0003&id=sk8#sk8'>|| SKATEBOARDINGS</a></h3>\
        <h3><a href='?tag=0003&id=snow#snow'>|| SNOWBOARDINGS</a></h3>\
        </div>");
    }
    
    if(id=="music")
    {
        document.write("<div style='background-color:#000000';>\
        <h3><a href='?tag=0003&id=sk8#sk8'>|| SKATEBOARDINGS</a></h3>\
        <h3><a href='?tag=0003&id=snow#snow'>|| SNOWBOARDINGS</a></h3>\
        <h3><a href='?tag=0003&id=surf#surf'>|| SURFINGS</a></h3>\
        </div>");
    }
}

/*************************************************************************
 * DEFAULRT                                                       *
 ************************************************************************/

function defalt(id)
{
        document.write("<div style='background-color:#000000';>\
        <h3><a href='?tag=0003&id=sk8#sk8'>|| SKATEBOARDINGS</a></h3>\
        <h3><a href='?tag=0003&id=snow#snow'>|| SNOWBOARDINGS</a></h3>\
        <h3><a href='?tag=0003&id=surf#surf'>|| SURFINGS</a></h3>\
        <h3><a href='?tag=0003&id=music#music'>|| MUSIC</a></h3>\
        </div>");
    
}

/*************************************************************************
 * VIDEO MENU DOWN                                                       *
 ************************************************************************/

function videoMenuDown($id)
{
    if($id=="sk8")
    {
        document.write( "<div style='background-color:#000000';>\
        <h3><a href='?tag=0003&id=snow#snow'>|| SNOWBOARDINGS</a></h3>\
        <h3><a href='?tag=0003&id=surf#surf'>|| SURFINGS</a></h3>\
        <h3><a href='?tag=0003&id=music#music'>|| MUSIC</a></h3>\
        </div>");
    }
    if($id=="snow")
    {
        document.write( "<div style='background-color:#000000';>\
        <h3><a href='?tag=0003&id=surf#surf'>|| SURFINGS</a></h3>\
        <h3><a href='?tag=0003&id=music#music'>|| MUSIC</a></h3>\
        </div>");
    }
    if($id=="surf")
    {
        document.write( "<div style='background-color:#000000';>\
        <h3><a href='?tag=0003&id=music#music'>|| MUSIC</a></h3>\
        </div>");
    }
    if($id=="music")
    {
        
    }

}

function get_id()
{
	var divEls = document.getElementsByTagName("div");
	var i = 0;
	for(i=0;i<divEls.length;i++)
	alert(divEls[i].id);
	return divEls[i].id;
}
/*************************************************************************
 * SIDE BAR  - PHOTOS                                                    *
 ************************************************************************/

function sidePhoto()
{
	subPhoto = getSubPhoto();
	document.write(subPhoto);

}

function getSubPhoto()
{
	return "<h4>|| About Photo</h4> \
		    <p> Main Cam : iPhone 3GS<br />  \
		    Upload to: <a href='http://www.flickr.com/photos/drpepper-ninja/' title='flickr'>flickr</a><br /> \
				I often take photos with my iPhone.<br /> It is pretty cool I can upload <br /> to flickr as soon as I took a picture. </p>";

}

	
function sideAbout()
{
	document.write("<h4>|| About Owner</h4>\
	<img id='dr' src='../pic/25840.jpg' alc='Ryu'>\
	 			<p> Name : Ryu<br /> \
				Age : young <br /> \
				Work : student <br /> \
				Hello,This is the site owner, Ryu. <br /> I am not soda though... <br />I'm using the same name as soda<br/> \
				but I don't really like that soda<br /> though lol<br /></p>");
}

/*************************************************************************
 * SIDE BAR  - PROGRAMING                                                *
 ************************************************************************/
 
function sideProg()
{
	discription = getDiscription();
	menu = getOption();
	document.write(discription + "<br />" + menu);
//	document.write("<br />");
	//document.write(menu);
	
}

function getDiscription()
{
	return " <h4>|| PROGRAMMING WORK </h4> \
			 <p> These are computer <br />programmings what <br /> \
			 I made in class and out class.<br /> \
			 I am still in process to learn<br /> programing, \
			 therefore those might<br /> not be professional code; <br /> \
			 However, I will shar my code<br /> via \
			 <a href='http://snipplr.com' title='snipplr' target='_blank'> Snipplr </a>with you.</p>  \
			 ";
}

function getOption()
{
	return "<h4>|| MENU</h4> \
				<dl class=\"menu\" style=\"font-size:12px;\"> \
				<dt><a href=\"?tag=0006&id=cplus\">|| C++</a></dt> \
				<dt><a href=\"?tag=0006&id=java\">|| JAVA</a></dt>\
				<dt><a href=\"?tag=0006&id=html\">|| HTML</a></dt> \
			</dl> ";
}

/*************************************************************************
 * DEFAULT MENU @ PROGRAMING                                             *
 ************************************************************************/

function getDefault()
{
	defaultDiscription = getDefaultDiscription();
	document.write(defaultDiscription);
}

function getDefaultDiscription()
{
	return "<div style='background-color:#000000';> \
			<h3><a href='index.php?tag=0006&id=cplus'> || C++</a></h3> \
			<h3><a href='index.php?tag=0006&id=java'> || JAVA </a></h3> \
			<h3><a href='index.php?tag=0006&id=html'> || HTML </a></h3> \
			</div>";
}			
			
/*************************************************************************
 * SUB MENU - CONTACT                                                    *
 ************************************************************************/
 
function getSubMenuContact()
{
	document.write("<h4>|| CONTACT PAGE </h4> \
					<p>Thank you for your interest <br /> to my home page.<br /> \
					You can contact with this <br /> site of owner Ryu <br /> \
					via mail form.<br /> \
					Would you please, write <br /> your Email Address <br /> \
					otherwise, I can't reply <br /> your email.<br /></p>");
}

/*************************************************************************
 * GET HOME IMAGE                                                        *
 ************************************************************************/

function getHomeImage()
{
	
}
