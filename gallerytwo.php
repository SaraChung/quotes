<?php
    include("header.php");
    
    $dom = simplexml_load_file("desc.xml");
    
    //echo $dom->image[0]->name;
    //echo $dom->image[1]->name;
//var_dump($dom);
    $max = sizeof($dom);

?>
<html>
<head>
<title>The Free Photo-On Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<div class="wrap">
		<section>
            <?php
            for($i=0; $i<$max; $i=$i+1){
				echo "<ul class=\"lb-album\">
					  <li>
						<a href=\"#image-$i\">";
                            
                                 $nam=$dom->image[$i]->name;
							     $s= "<img src=\"$nam\"alt=\"$dom->image[$i]->text\" style=\"width:304px;height:228px\"/>";
							     echo $s;
                                 echo "<span>",$dom->image[$i]->text,"</span>";
                            
						        
                        echo"</a>";
						echo"<div class=\"lb-overlay\" id=\"image-$i\">
							    <a href=\"#page\" class=\"lb-close\">x Close</a>";
							
                                 $nam=$dom->image[$i]->name;
							     $s= "<img src=\"$nam\"/>";
							     echo $s;
                            
						echo"</div></li></ul>";
            }//end of for
            ?>
</section>
</div>
</body>
</html>