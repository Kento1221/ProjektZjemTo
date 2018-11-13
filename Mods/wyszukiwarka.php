<?php include("..\configuration1.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title> Let's get started! </title>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="Style/str.css" />
    </head>
    <body>
        
        <div class="tab1">
            <div >
			<h1 class="wyb"> Wybierz składnik </h1>
			</div>
			<div>
			<form action="podsum.php" method="GET" id="lista">
	<select name="skladnik">
		<?php
					$skl = "SELECT * FROM `skladniki` WHERE miara = 'g' AND skladniki NOT IN (108, 109) group by nazwa asc;";
		if ($result = $conn->query($skl))  
			while($obj = $result->fetch_object()){ 
				echo "<option>".$obj->nazwa."</option>";
			} 	
		?>
	</select>
	<input type="submit" value="Dalej!" />
</form>
	</div>
</form>
        </div>
        <div id="bazylia"></div>
		<div id="footer2"> 
	<a href="../index.php">
	<img src="http://abcvillage.com/wp-content/uploads/2015/04/Chalk-Arrow-R2-e1429759168757.png" id="strzalka"/> 
	</a>
	</div>
    </body>
</html>
