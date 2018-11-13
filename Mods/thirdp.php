<?php 
$poraDnia = $_GET["poraDnia"];
include('../configuration1.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Propozycje! </title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="Style/str.css" />
    </head>
    <body>
	<div class="tab1">
	
	<h1 class="wyb">Wybierz rodzaj posiłku</h1>
	
	<table>
	<tr>
	<?php 
		$sql = "SELECT * FROM `rodzajposilku` WHERE idPoraDnia = $poraDnia;"; 

		if ($result = $conn->query($sql))  
			while($obj = $result->fetch_object()){ 
				echo "<a href='http://localhost/ZjemTo/Mods/fourthp.php?poraDnia=".$poraDnia."&rodzajPosilku=".$obj->rodzajPosilku."' class = \"czci2\">".$obj->nazwa."</a></br>";
			} 
		
		$result->close(); 
		unset($obj); 
		unset($sql); 
		unset($query); 
	?>
	<tr>
	</table>
	</div>
	<div id="bazylia"></div>
	<div id="footer2"> 
	<a href="secp.php">
	<img src="http://abcvillage.com/wp-content/uploads/2015/04/Chalk-Arrow-R2-e1429759168757.png" id="strzalka"/> 
	</a>
	</div>
    </body>
</html>
