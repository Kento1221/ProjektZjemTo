<?php 
$poraDnia = $_GET["poraDnia"];
$rodzajPosilku = $_GET["rodzajPosilku"];
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
	
	<h1 class="wyb">Wybierz potrawę</h1>
	
	<table>
	<tr>
	<?php 
		$sql = "SELECT * FROM `potrawa` WHERE idRodzajPosilku = $rodzajPosilku;"; 

		if ($result = $conn->query($sql)) {
			while($obj = $result->fetch_object()){ 
				
				echo "<a href='http://localhost/ZjemTo/Mods/finalp.php?poraDnia=".$poraDnia."&rodzajPosilku=".$rodzajPosilku."&potrawa=".$obj->idpotrawa."' class = \"czci2\">".$obj->nazwa."</a></br>";
				}
			
		} 
		$result->close(); 
		unset($obj); 
		unset($sql); 
		unset($query); 
	?>
	</br></br></br>
	<tr>
	</table>
	</div>
	<div id="bazylia"></div>
	<div id="footer2"> 
	<a href="<?php
	echo "http://localhost/ZjemTo/Mods/thirdp.php?poraDnia=".$poraDnia;
	
	?>">
	<img src="http://abcvillage.com/wp-content/uploads/2015/04/Chalk-Arrow-R2-e1429759168757.png" id="strzalka"/> 
	
	</a>
	</div>
    </body>
</html>
