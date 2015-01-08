<html>
<body>
<?php
    $id = $_GET['id'];
    $width = "width='640'";
    $height = "height='385'";
    $class = "class='video'";
    $screen = "allowFullScreen";
    $script = "allowscriptaccess";
    $varT = "true";
    $varF = "false";
    $varA = "always";
    $type = "application/x-shockwave-flash";
    $videos = null;
    
    if($id == 'photograph')
    {
       ?>
       	<div id="photo">
        	<h3>|| PHOTOGRAPHS</h3><?
        	$file = fopen("photo.txt","r");
        	getURL($videos,$file);
        	fclose($file);
        	printVideo(0,$id,$width,$height,$class,$screen,$script,$varT,$varF,$varA,$type,$videos);
    	?></div><?php
    }
    
    if($id == 'sk8')
    {
        ?>
        <div id="sk8">
        	<h3>|| SKATEBOARDINGS</h3><?php
        	$file = fopen("videoSk8.txt","r");
        	getURL($videos,$file);
        	fclose($file);
        	printVideo(0,$id,$width,$height,$class,$screen,$script,$varT,$varF,$varA,$type,$videos);
        	?><script>videoMenuDown("sk8");</script><?php
    	?></div><?php
    }
    
    if($id == 'snow')
    {
        ?>
        <div id="snow">
        	<script>videoMenuUp("snow");</script>
        	<h3>|| SNOWBOARDINGS</h3><?php
        	$file = fopen("videoSnow.txt","r");
       	 	getURL($videos,$file);
        	fclose($file);
        	printVideo(0,$id,$width,$height,$class,$screen,$script,$varT,$varF,$varA,$type,$videos);
        	?><script>videoMenuDown("snow");</script><?php
    	?></div><?php
    }
    
    if($id == 'surf')
    {
        ?>
        <div id="surf">
        	<script>videoMenuUp("surf");</script>
        	<h3>|| SURFINGS</h3><?php
        	$file = fopen("videoSurf.txt","r");
        	getURL($videos,$file);
        	fclose($file);
        	printVideo(0,$id,$width,$height,$class,$screen,$script,$varT,$varF,$varA,$type,$videos);
        	?><script>videoMenuDown("surf");</script><?php
    	?></div><?php
    }
    
    if($id == 'music')
    {
        ?>
        <div id="music">
        	<script>videoMenuUp("music");</script>
        	<h3>|| MUSIC</h3><?php
        	$file = fopen("videoMusic.txt","r");
        	getURL($videos,$file);
	        fclose($file);
    	    printVideo(0,$id,$width,$height,$class,$screen,$script,$varT,$varF,$varA,$type,$videos);
    	    ?><script>videoMenuDown("music");</script><?php
    	?></div><?php
    }
    if($id == 'home')
    {
        ?><script>defalt("home");</script><?php
    }
  
    function getURL(&$videos,$file)
    {
		$line=0;
        while(!feof($file))
        {
            $videos[$line] = fgets($file);
            $line++;
        }
    }
    

    function printVideo($x,$id,$width,$height,$class,$screen,$script,$varT,$varF,$varA,$type,&$videos)
    {?> 
		<object <?= $width.' '.$height?> >
			<?php
			if($id=='photograph')
			{
				?><param name="flashvars" value="offsite=true&lang=en-us&page_show_url=%2Fphotos%2Fdrpepper-ninja%2Fshow%2F&page_show_back_url=%2Fphotos%2Fdrpepper-ninja%2F&user_id=49748710@N05&jump_to="></param>
			<?php}?>
			<param name='movie' value='<?= $videos[$x]. "'"?>></param>
			<param name=' <?= $screen. "'"?> value='<?=$varT . "'"?> ></param>
			<param name=' <?= $script . "'"?>  value='<?=$varA. "'"?> ></param>
			<?php 
			if($id!='photograph')
			{?>
			<embed src=' <?= $videos[0]. "'"?> type='<?= $type. "'"?><?= $script. "'"?>='<?=$varA. "'"?><?=$screen?>=<?=$varT. "'"?> <?=$width?> <?=$height?>>
			</embed>
			<?php}?>
		</object>
    <?php}?>
</body>
</html>
