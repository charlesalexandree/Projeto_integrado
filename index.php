 <!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="refresh" content="15">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MONITORAMENTO CAMERAS</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

  // as letras correspondem aos locais das câmeras.
	$servidores = [
		"A" => "10.67.198.151",
		"B" => "10.67.198.152",
		"C" => "10.67.198.153",
		"D" => "10.67.198.154",
		"E" => "10.67.198.155",
		"F" => "10.67.198.156",
		"G" => "10.67.198.157",
		"H" => "10.67.198.158",
		"I" => "10.67.198.159",
		"J" => "10.67.198.160",
		"K" => "10.67.198.161",
		"L" => "10.67.198.162",
		"M" => "10.67.198.163",
		"N" => "10.67.198.164",
		"O" => "10.67.198.165",
		"P" => "10.67.198.166",
		"Q" => "10.67.198.167",
		"R" => "10.67.198.168",
		"S" => "10.67.198.169",
		"T" => "10.67.198.170",
		"U" => "10.67.198.171",
		"V" => "10.67.198.172",
		"W" => "10.67.198.173",
		"X" => "10.67.198.174",
		"Y" => "10.67.198.175",
		"Z" => "10.67.198.176",
		"AA" => "10.67.198.177",
		"BB" => "10.67.198.178",
		"CC" => "10.67.198.179",
		"DD" => "10.67.198.180",		

	];

?>
<div class="center">
	<h1>MONITORAMENTO DAS CAMERAS DO 2°CGEO</h1>

	<div class="cards">

	<?php
	foreach($servidores as $servidor => $ip)
	{
		
		$retorno = @fsockopen($ip,80,$errCode,$errStr,2);
				
		if ($retorno)
		{
			$status = "online";
		} else {
			$status = "offline";
		}
	?>
		<div class="card <?=$status?>">
			<div class="servidor"><?=$servidor?></div>
			<div class="status"><?=$status?></div>
		</div>

	<?php
	}
	?>

	</div>

</div>
</body>
</html>
