<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- stylesheet -->
		<link rel="stylesheet" href="./css/style.css" />
		<!-- title -->
		<title>Hexagonal Prism</title>
	</head>
	<!-- body -->
	<body>
<?php echo '<img src="./images/Bees.png" width="250px" alt="bee png">' ?>
<?php echo '<h1>Hexagonal Prism calculator</h1>';?>
<?php echo '<img src="./images/honeycomb.jpg" width="600px" alt="honeycomb">'?>
<br>
		<!-- textboxes and button -->
		<h2>
			<form method = "post">
				Base: <input type="number" name="base">  
				<br>
				Height: <input type="number" name="height">
				<br>
				<br>
				<input type = "submit" name = "calculate" value="Calculate">  
			</form> 
		</h2>
		<!-- calculations -->
<?php   
if(isset($_POST["calculate"]))  
{   
$base= $_POST['base'];   
$height = $_POST['height'];   
			
$surface = sprintf('%.2f',6*$base*$height+3*sqrt(3)*$base**2);
$volume = sprintf('%.2f',3*sqrt(3)/2*$base**2*$height);
	
	echo "<h3>The surface area of this Hexagonal Prism is $surface m<sup>2</sup></h2>";
	echo "<h3>The volume of this Hexagonal Prism is $volume m<sup>2</sup></h2>";
}
?>   
		<!-- image and the end of the content-->
		<?php echo '<img src="./images/Honeycombbee.webp" width="600px" alt="honeycomb with bee">' ?>
  </body>
</html>