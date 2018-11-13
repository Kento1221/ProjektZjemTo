<?php include("..\configuration1.php");
$skladnik = $_GET["skladnik"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Let's get started! </title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="Style/str.css" />
    </head>
    <body>
        
        <div class="tab1">
        <h1 class="wyb2">Wszystkie potrawy ze składnikiem: <?php echo $skladnik;?></h1><br/>
		<div> 
		<table>
	<tr>	
	<?php 
		$sql = "SELECT * FROM `skladniki` WHERE nazwa = \"$skladnik\";"; 

		if ($result = $conn->query($sql))  
			while($obj = $result->fetch_object()){ 
				$idskladnika = $obj->skladniki;

		$pot = "SELECT DISTINCT potrawy FROM `potsklad` WHERE idskladnik = $idskladnika";
					if ($result2 = $conn->query($pot))
						while ($obj2 = $result2->fetch_object()){
							$idpotrawa = $obj2->potrawy;

		$potrawa = "SELECT DISTINCT nazwa FROM `potrawa` WHERE idpotrawa = $idpotrawa;";
								if($result3 = $conn->query($potrawa))
									while($obj3 = $result3->fetch_object()){
										echo "<a href=\"finalp2.php?skladnik=".$skladnik."&potrawa=".$idpotrawa."\" class = \"czci2\">".$obj3->nazwa."</a><br/>";
									}
								
							
						}
			} 
	?>
	<tr>
	</table>
	</br></br></br>
		</div>
        </div>
        <div id="bazylia"></div>
		<div id="footer2"> 
	<a href="wyszukiwarka.php">
	<img src="http://abcvillage.com/wp-content/uploads/2015/04/Chalk-Arrow-R2-e1429759168757.png" id="strzalka"/> 
	</a>
	</div>
    </body>
</html>
