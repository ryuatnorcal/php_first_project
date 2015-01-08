<html>
<body>
<?php
	$id = $_REQUEST['id'];
	$line=0;
	$url=null;
	$fileName=null;
	$attrValue=NULL;
	
	if($id != 'home')
	{
		getURL($url,$id,$line);
		getFileName($url,$fileName,$line);
		printPage($id,$url,$fileName,$line);
	}
	else
	{
		?><script>getDefault();</script><?php
	}
	
	function getURL(&$url,$id,&$line)
	{
		$fileName = $id.".txt";
		$file = fopen("$fileName","r");
		while(!feof($file))
		{
			$url[$line] = fgets($file);
			$line++;
		}	
		fclose($file);
	}
	
	function getFileName(&$url,&$fileName,&$line)
	{
		$counter=0;
		for($counter;$counter<($line-1);$counter++)
		{		
			$tok = strtok($url[$counter],"/");
			$fileName[$counter] = strtok("\n");
		}
	}
	
	function printPage($id,&$url,&$fileName,&$line)
	{
		if($id=='cplus'){?><h3>|| C++</h3><?php}
		if($id=='java'){?><h3>|| JAVA</h3><?php}
		if($id=='html')
		{
			?><h3>|| HTML</h3>
			<div>
			   <p>I have taken a web design class at college. My class work are feel free to be able to see at another server. <br />
			   ADDRESS : <a href="http://toybox.toypark.in/project/public_html/" target="_blank">http://toybox.toypark.in/project/public_html/</a></p>
		    </div>
	   <?php}?>
		<table class="codeTable">
				<?php 
					for($counter=0;$counter<($line-1);$counter++){?>
					<tr class="explan">
						<td class="codeTd"><a href='http://www.snipplr.com/view/<?=$url[$counter];?>' target='_blank'>|| <?=$fileName[$counter];?></a></td>
						<td class="codeTd"><?=getComment($url[$counter]);?></td>
					</tr>
				<?php}?>
		</table>
	<?php}
	
	function getComment($target)
	{
		$comment=NULL;
		$URL = "http://www.snipplr.com/view/".$target;
		//include($URL);
		// I need to get comment from snipplr site and assign them as the comment 
		// target class is 'description'
		//return $comment;
		$some_link = $URL;
		$tagName = 'div';
		$attrName = 'class';
		$attrValue = 'description';

		$dom = new DOMDocument;
		$dom->preserveWhiteSpace = false;
		@$dom->loadHTMLFile($some_link);
	
		$html = getTags( $dom, $tagName, $attrName, $attrValue );
		echo $html;
	}
	
	function getTags( $dom, $tagName, $attrName, $attrValue )
	{
	    $html = '';
	    $domxpath = new DOMXPath($dom);
	    $newDom = new DOMDocument;
	    $newDom->formatOutput = true;
	    $filtered = $domxpath->query("//$tagName" . '[@' . $attrName . "='$attrValue']");
	    // $filtered =  $domxpath->query('//div[@class="className"]');
	    // '//' when you don't know 'absolute' path
	
	    // since above returns DomNodeList Object
	    // I use following routine to convert it to string(html); copied it from someone's post in this site. Thank you.
	    $i = 0;
	    while( $myItem = $filtered->item($i++) )
	    {
	        $node = $newDom->importNode( $myItem, true );    // import node
	        $newDom->appendChild($node);                    // append node
	    }
	    $html = $newDom->saveHTML();
	    return $html;
	}
?>
</body>
</html>

