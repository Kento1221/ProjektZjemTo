<?php 
$poraDnia = $_GET["poraDnia"];
$rodzajPosilku = $_GET["rodzajPosilku"];
$potrawa = $_GET["potrawa"];
include('../configuration1.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Twój przepis! </title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="Style/Final.css" />
    </head>
 <body>
	<div class="przepis"> 
	
		<?php
			$sql = "SELECT * FROM `potrawa` WHERE idpotrawa = $potrawa LIMIT 1;"; 
					if ($result = $conn->query($sql)) {
						while($obj = $result->fetch_object()){
						echo "<h2 class=\"wyb\">".$obj->nazwa."</h2>";}
						}
		?>
	<div id="skladniki">
		<?php
			$skl = "SELECT * FROM `potsklad` WHERE potrawy = $potrawa;";
					if ($result2 = $conn->query($skl)) {
						while($obj2 = $result2->fetch_object()){
			$skl2 = "SELECT * FROM `skladniki` WHERE skladniki = $obj2->idskladnik;";
							if($result3 = $conn->query($skl2))
								while($obj3 = $result3->fetch_object()){
	$kcal = ($obj2->ilosc/100)*$obj3->kcal;
	$sumkcal+=$kcal;
								echo "<li>".$obj3->nazwa." - ".$obj2->ilosc."".$obj3->miara."</li>";}
								
									
						}
		
			}
			
			
		?>	
		
		
	</div>
	
	<img src="
			<?php $obrazek = "SELECT * FROM `potrawa` WHERE idpotrawa = $potrawa LIMIT 1;";
				if($obr = $conn->query($obrazek)){
					while($obj = $obr->fetch_object())
				echo $obj->obrazek;
				}
				
			?>
	" id="obrazek" />
	
	<div id="przepis">	
			<?php
				$przepis = "SELECT * FROM `potrawa` WHERE idpotrawa = $potrawa LIMIT 1;";
						if($obr = $conn->query($przepis)){
							while($obj = $obr->fetch_object())
						echo "</br>".$obj->przepis."</br></br>";
						}
			?>
	</div>
	
	<div id="kalk">
	<h3>Ilość kalorii: 
			<?php 
									echo $sumkcal." kcal";
			?>
	</h3>
	</div>
	</div>
	
	
	<div id="footer"> 
		<a href="<?php
		echo "http://localhost/ZjemTo/Mods/fourthp.php?poraDnia=".$poraDnia."&rodzajPosilku=".$rodzajPosilku;
		
		
		?>">
			<img src="http://abcvillage.com/wp-content/uploads/2015/04/Chalk-Arrow-R2-e1429759168757.png" class="strza"/>
	</div>

    </body>
</html>