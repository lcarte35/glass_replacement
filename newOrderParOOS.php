<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/design.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="centerText">
	<h1>New Order</h1>
</div>
<div class="container">
	<svg viewBox="0 0 75 40" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" onload="start(evt)">
		<svg>
			#Job Identification Box
			<line x1="1" y1="1" x2="25" y2="1" stroke="black" stroke-width=".10px" />
			<line x1="1" y1="3.5" x2="25" y2="3.5" stroke="black" stroke-width=".10px" />
			<line x1="1" y1="1" x2="1" y2="3.5" stroke="black" stroke-width=".10px" />
			<line x1="25" y1="1" x2="25" y2="3.5" stroke="black" stroke-width=".10px" />			
			<text x="2" y="2" color="black" font-size=".75px" stroke-width=".10px">Wise RV Glass LLC 470-345-6521 russell@wiservglass.com</text>
			<text x="2" y="3" color="black" font-size=".75px" stroke-width=".10px">P.O.</text>
			#Will need to be auto generated
			<text x="3.5" y="3" color="black" font-size=".75px" stroke-width=".10px">123456</text>
			<text x="7" y="3" color="black" font-size=".75px" stroke-width=".10px">Job:</text>
			#Customer Input
			<text x="9" y="3" color="black" font-size=".75px" stroke-width=".10px">Customer Name</text>
			
			#Materials Box
			<line x1="50" y1="1" x2="65" y2="1" stroke="black" stroke-width=".10px" stroke-dasharray=".25px, .25px" />
			<line x1="50" y1="3.5" x2="65" y2="3.5" stroke="black" stroke-width=".10px" stroke-dasharray=".25px, .25px" />
			<line x1="50" y1="1" x2="50" y2="3.5" stroke="black" stroke-width=".10px" stroke-dasharray=".25px, .25px" />
			<line x1="65" y1="1" x2="65" y2="3.5" stroke="black" stroke-width=".10px" stroke-dasharray=".25px, .25px" />
			#Will be generated from select thickness
			<text x="51" y="2" color="black" font-size=".75px" stroke-width=".10px">7/16"</text>
			#Will be generated from select color
			<text x="54" y="2" color="black" font-size=".75px" stroke-width=".10px">OA Green</text>
			<text x="51" y="3" color="black" font-size=".75px" stroke-width=".10px">Tempered I.G.</text>
			
			#PARALLELOGRAM
			<path d="M15 12 L55 12 L55 25 L15 35 Z" fill="white" stroke="black" stroke-width=".10px"/>
			#TOP
			<line x1="15" y1="7" x2="15" y2="40" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
			
				#arrow
					<line x1="15" y1="10" x2="30" y2="10" stroke="black" stroke-width=".10px" />
					<line x1="32" y1="10" x2="55" y2="10" stroke="black" stroke-width=".10px" />
					<path d="M16.5,11 15,10 16.5,9" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					<path d="M54,11 55,10 54,9" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
			#LEFT
				<line x1="7" y1="12" x2="60" y2="12" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
				<line x1="7" y1="35" x2="60" y2="35" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
				<line x1="55" y1="7" x2="55" y2="39" stroke="black" stroke-width=".10px" stroke-dasharray=".15 .15" />
					#arrow
					<line x1="10" y1="12" x2="10" y2="23" stroke="black" stroke-width=".10px" />
					<line x1="10" y1="25" x2="10" y2="35" stroke="black" stroke-width=".10px" />
					<path d="M9,13.5 10,12 11,13.5" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					<path d="M9,33 10,35 11,33" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					
					#arrow (right)
					<line x1="58" y1="12" x2="58" y2="23" stroke="black" stroke-width=".10px" />
					<line x1="58" y1="25" x2="58" y2="35" stroke="black" stroke-width=".10px" />
					<path d="M57,13.5 58,12 59,13.5" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					<path d="M57,33 58,35 59,33" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					#arrow bottom
					<line x1="15" y1="37" x2="30" y2="37" stroke="black" stroke-width=".10px" />
					<line x1="33" y1="37" x2="55" y2="37" stroke="black" stroke-width=".10px" />
					<path d="M16,36 15,37 16,38" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					<path d="M54,36 55,37 54,38" stroke="black" stroke-width=".10px" fill="none" stroke-linejoin="miter" />
					
			
			#DIMENSIONS (generated from text input)
			<text x="9.5" y="24" color="black" font-size=".75px" stroke-width=".10px">A</text>
			<text x="31.5" y="10.25" color="black" font-size=".75px" stroke-width=".10px">B</text>
			
			
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