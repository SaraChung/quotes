<?php
  include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blue Bee Hive</title>
	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

	<style>
		@import url(http://fonts.googleapis.com/css?family=Lato:300);

		body {
		  background: #D1EEEE;
		}

		section {
		  margin: 0 auto;
		  text-align: center;
		  width: 960px;
		}

		.hex_row_even {
		  display: inline-block;
		  margin: 0 auto -275px auto;
		  overflow: hidden;
		}

		.hex_row_odd {
		  display: inline-block;
		  margin: 0 auto -275px auto;
		  overflow: hidden;
		} 

		.center {
		  float: left;
		  margin: 20px 10px;
		  width: 220px;
		}

		.hexagon {
		  transform: rotate(120deg);
		  cursor: pointer;
		  height: 440px;
		  overflow: hidden;
		  visibility: hidden;
		  width: 220px;
		}

		.hex1 {
		  transform: rotate(-60deg);
		  height: 100%;
		  overflow: hidden;
		  width: 100%;
		}

		.hex2 {
		  transform: rotate(-60deg);
		  height: 100%;
		  /*position: relative;*/
		  visibility: visible;
		  width: 100%;
		}

		.overlay {
		  color: white;
		  font-family: 'Lato', sans-serif;
		  /*font-size: 1.5em;*/
		  font-weight: 300;
		  height: 440px;
		  line-height: 1.5em;	  
		  text-align: center;
		  text-transform: uppercase;
		  width: 220px;
		}

		h2 {
	    margin: 160px 10px 0 10px;
	    font-size: 20px;
	    position: absolute;
	    opacity: 0.5;
		  /*background: pink;*/
		}

		p {
	  	font-size: 10px; 
	  	position: absolute;
			opacity: 0.5;
		}
	
	</style>

</head>
<body>
	<section>
		<div class="hex_row_odd"> 
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://distilleryimage6.s3.amazonaws.com/edb09e76db3311e19c2922000a1e87be_6.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>The client may be king, but he's not the art director.</h2>
		            <p>Von R Glitschka</p>
		         </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center-->
		  
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://cdn.surfbang.com/wp-content/uploads/2012/05/49e0a26c9b1111e181bd12313817987b_7-610x610.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>The best ideas come as jokes... make your thinking as funny as possible.</h2>
		            <p>David Ogilvy</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center--> 
		  
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://distilleryimage6.s3.amazonaws.com/edb09e76db3311e19c2922000a1e87be_6.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>Google is simple, is elegant, but it's got the great doodad when you need it.</h2>
		            <p>Marissa Mayer</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center--> 
		</div><!--/hex_row_even-->

		<div class="hex_row_even"> 
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://distilleryimage6.s3.amazonaws.com/edb09e76db3311e19c2922000a1e87be_6.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>Design is the silent ambassador of your brand.</h2>
		            <p>Paul Rand</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center-->
		  
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://cdn.surfbang.com/wp-content/uploads/2012/05/49e0a26c9b1111e181bd12313817987b_7-610x610.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>Computers are to design as microwaves are to cooking.</h2>
		            <p>Milton Glaser</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center--> 
		  
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://cdn.surfbang.com/wp-content/uploads/2012/05/49e0a26c9b1111e181bd12313817987b_7-610x610.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>If you can't explain simply, you don't understand it enough.</h2>
		            <p>Albert Einstein</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center--> 
		  
		<div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://distilleryimage6.s3.amazonaws.com/edb09e76db3311e19c2922000a1e87be_6.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>Even large companies need small logos</h2>
		            <p>Tanner Christensen</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center--> 
		  
		</div><!--/hex_row_even--> 
		  
		<div class="hex_row_odd"> 
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://distilleryimage6.s3.amazonaws.com/edb09e76db3311e19c2922000a1e87be_6.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>Make things as simple as possible... but not simpler.</h2>
		            <p>Albert Einstein</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center-->
		  
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://cdn.surfbang.com/wp-content/uploads/2012/05/49e0a26c9b1111e181bd12313817987b_7-610x610.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>Good design is obvious. Great design is transparent.</h2>
		            <p>Joe Sparano</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center--> 
		  
		  <div class="center">
		    <div class="hexagon">
		      <div class="hex1">
		        <div class="hex2" style="background: url('http://distilleryimage6.s3.amazonaws.com/edb09e76db3311e19c2922000a1e87be_6.jpg') center no-repeat">
		          <div class="overlay">
		            <h2>Think more, Design less</h2>
		            <p>Ellen Lupton</p>
		          </div>  
		        </div><!--/hex2--> 
		      </div><!--/hex1-->
		    </div><!--/hexagon--> 
		  </div><!--/center--> 
		</div><!--/hex_row_even-->  
	</section>  

	<script>
		$(document). ready (function () { 
			// $('h2', 'p').hide();
				$('.overlay').mouseover(function () {
					$(this).children().show();
				});

				$('.overlay').mouseout(function () {
					$(this).children().hide();
				});
		});
	</script>

</body>
</html>