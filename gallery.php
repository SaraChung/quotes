<?php
  include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	
	<style>
		@import url(http://fonts.googleapis.com/css?family=Lato:300);

		* {
			box-sizing: border-box;
		}

		body {
		  background: #D1EEEE;
		  font-family: 'Lato', sans-serif
		}
		
/*		.container {
			margin: 0 auto;
			float: left;
			height: 100%;
			width: 100%;
		}*/

		.image {
			/*float: left;*/
			width: 25px;
			height: 25px;
			margin: 20px 45px 50px 20px;
		}
		#loader {
			text-align: center;
		}

	</style>

	<script>
		function element_in_scroll(elem) {
			var docViewTop = $(window).scrollTop();
			var docViewBottom = docViewTop + $(window).height();
			// offset retrieves the current position of elem relative to document
			var elemTop = $(elem).offset().top;
			var elemBottom = elemTop + $(elem).height();

			return((elemBottom <= docViewBottom) && (elemTop >= docViewTop))
		}

		$(document).scroll(function (e) {
			if (element_in_scroll(".class")) {
				// unbind normal behaviour after infinite scroll setup
				$(document).unbind("scroll");
				$.ajax({
					type: "GET",
					url: "desc.xml",
					data: data,
					success: function() {
						$("").append()
					}
				})
			};
		});

	</script>
</head>

<body>
	<div class="container">
		<div class="image">
			<img src="">image 1
		</div>
		<div class="image">
			<img src="">image 2
		</div>
		<div class="image">
			<img src="">image 3
		</div>
		<div class="image">
			image 4
		</div>
		<div class="image">
			image 5
		</div>
		<div class="image">
			image 6
		</div>
		<div class="image">
			image 7
		</div>
		<div class="image">
			image 8
		</div>
		<div class="image">
			image 9
		</div> 
		<div class="image">
			image 10
		</div>
		<div class="image">
			<img src="">image 11
		</div>
		<div class="image">
			image 12
		</div>
		<div class="image">
			image 13
		</div>	
		<div class="image">
			<img src="">image 14
		</div>
		<div class="image">
			image 15
		</div>
	</div>
	<div class="loader">
		Loading more...
	</div>
	
	<script>
		/*
		// loads desc.xml into xmlDoc and stores a list of <name> nodes in var x
		xmlDoc=loadXMLDoc("desc.xml")
		// getelementsbytagname returns a node list (an array of nodes)
		x=xmlDoc.getElementsByTagName("name");
		// loop through the node list by length property
		for (i=0; i<x.length; i++) {
			document.write(x[i].childNodes[0].nodeValue);
			document.write("<br>");
		}
		*/


		/* actual
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET","desc.xml", false);
		xmlhttp.send();
		xmlDoc = xmlhttp.responseXML;
		// console.log(xmlDoc.getElementsByTagName('name'));
		*/
	</script>

</body>
</html>

<!-- http://codepen.io/jiri/pen/vpkns -->
<!-- Infinite scroll with xml - http://www.developer.com/design/article.php/10925_3681771_2/Implementing-Dynamic-Scroll-with-Ajax-JavaScript-and-XML.htm -->