
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link href="css/design.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 class="centerText">New Order</h1>
<div class="container">
<svg viewBox="0 0 75 40" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" onload="start(evt)">
		<svg>
			#Job Identification Box
			<rect x="1" y="1" width="24" height="2.5" stroke="black" stroke-width=".10px" fill="none"></rect>			
			<text x="2" y="2" color="black" font-size=".75px" stroke-width=".10px">Wise RV Glass LLC 470-345-6521 russell@wiservglass.com</text>
			<text x="2" y="3" color="black" font-size=".75px" stroke-width=".10px">P.O.</text>
			#Will need to be auto generated
			<text x="3.5" y="3" color="black" font-size=".75px" stroke-width=".10px">123456</text>
			<text x="7" y="3" color="black" font-size=".75px" stroke-width=".10px">Job:</text>
			#Customer Input
			<text x="9" y="3" id="cname" color="black" font-size=".75px" stroke-width=".10px">';echo "$last";echo '</text>
			
			#Materials Box
			<rect x="50" y="1" width="14" height="2.5" stroke="black" stroke-width=".10px" stroke-dasharray=".25px, .25px" fill="none"></rect>
			
			#Will be generated from select thickness
			<text x="51" y="2" id="glsthk" color="black" font-size=".75px" stroke-width=".10px">';echo "$thick"; echo '</text>
			#Will be generated from select color
			<text x="54" y="2" id="glscol" color="black" font-size=".75px" stroke-width=".10px">';echo"$color"; echo '</text>
			<text x="51" y="3" id="glsType" color="black" font-size=".75px" stroke-width=".10px">';echo"$type"; echo '</text>
			
			#RECTANGLE			
			<rect id="rect" x="15" y="15" rx="0" ry="0" width="40" height="20" fill="white" stroke="black" stroke-width=".10px"/>
				#left of rectangle
					<line x1="10" y1="15" x2="15" y2="15" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
					<line x1="10" y1="35" x2="15" y2="35" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
					#arrow
					<line x1="12.5" y1="15" x2="12.5" y2="24" stroke="black" stroke-width=".10px" />
					<line x1="12.5" y1="25.5" x2="12.5" y2="35" stroke="black" stroke-width=".10px" />
					<path d="M11,17.5 12.5,15 14,17.5" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					<path d="M11,33 12.5,35 14,33" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
				#top of rectangle
					<line x1="15" y1="10" x2="15" y2="15" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
					<line x1="55" y1="10" x2="55" y2="15" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
					#arrow
					<line x1="15" y1="12.5" x2="31.5" y2="12.5" stroke="black" stroke-width=".10px" />
					<line x1="33.5" y1="12.5" x2="55" y2="12.5" stroke="black" stroke-width=".10px" />
					<path d="M16.5,14 15,12.5 16.5,11" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					<path d="M53.5,14 55,12.5 53.5,11" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
			
			#DIMENSIONS (generated from text input)
			<text x="12" y="25" id="hgt" color="black" font-size=".75px" stroke-width=".10px">'; echo "$height"; echo '</text>
			<text x="32" y="12.75" id="wdt" color="black" font-size=".75px" stroke-width=".10px">'; echo "$width"; echo '</text>
		</svg>
	</svg>
</div>
	<form action="includes/insertFunctions.inc.php" method="post">	
	<input type="text" name="first" placeholder="Enter Customer's First Name">
		<div class="spacer10px"></div>
		<input type="text" name="last" placeholder="Enter Customer's Last Name">
		<div class="spacer10px"></div>
		
	
		<div class="centerText">
		<?php
			include 'includes/selectFunctions.php';
		?>
		</div>
		
		
		
		<div class="spacer10px"></div>
			<input type="text" name="width" placeholder="Enter Width">
		<div class="spacer10px"></div>
			<input type="text" name="height" placeholder="Enter Height">
		</div>
	
  	  </div> 
  <button type="submit" name="submit" onclick="myFunction()">Preview Order</button>
   
 </form>

  </body>
  </html>