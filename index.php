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

	$servidores = [
		"PAIOL" => "10.67.198.151",
		"RANCHO INTERNA" => "10.67.198.152",
		"SERVIDOR INFORMATICA" => "10.67.198.153",
		"PAVILHÃO DE COMANDO" => "10.67.198.154",
		"INFOR/ENSINO" => "10.67.198.155",
		"S1" => "10.67.198.156",
		"GARAGEM" => "10.67.198.157",
		"CCAP" => "10.67.198.158",
		"SERVIDOR DGEO" => "10.67.198.159",
		"P3" => "10.67.198.160",
		"S2/S3" => "10.67.198.161",
		"ARMARIA" => "10.67.198.162",
		"LATERAL ESQ. HOTEL" => "10.67.198.163",
		"RETAGUARDA ARMAMENTO" => "10.67.198.164",
		"ESTACIONAMENTO" => "10.67.198.165",
		"PAVIHÃO ADJUNTO" => "10.67.198.166",
		"ALMOX EXTERNA" => "10.67.198.167",
		"GUARDA INTERNA" => "10.67.198.168",
		"ESTACIOMENTO VISIT." => "10.67.198.169",
		"CORPO DA GUARDA" => "10.67.198.170",
		"ALOJ. OF/SGT" => "10.67.198.171",
		"PAIOL EXTERNA" => "10.67.198.172",
		"RETAGUARDA QUARTEL" => "10.67.198.173",
		"ADJUNTO EXTERNA" => "10.67.198.174",
		"INFOR" => "10.67.198.175",
		"LATERAL HOTEL" => "10.67.198.176",
		"RANCHO EXTERNA" => "10.67.198.177",
		"RP" => "10.67.198.178",
		"MUSEU/AUDIT." => "10.67.198.179",
		"ALMOX INTERNA" => "10.67.198.180",		

	];

?>
<div class="center">
	<h1>MONITORAMENTO DAS CAMERAS DO 2°CGEO</h1>

	<div class="cards">

	<?php
	foreach($servidores as $servidor => $ip)
	{
		// $retorno = shell_exec("C:\Windows\system32\ping -n 1 $ip"); - Este codigo não funciona em servidor compartilhado por questões de segurança.
		$retorno = @fsockopen($ip,80,$errCode,$errStr,2);
		
		// if (preg_match("/tempo</", $retorno) || preg_match("/tempo=/", $retorno))  - Este codigo não funciona em servidor compartilhado por questões de segurança.
		if ($retorno)
		{
			$status = "online";
		} else {
			$status = "offline";
		}
	?>
		<div class="card <?=$status?>">
			<div class="servidor"><?=$servidor?></div>
			<div class="ip"><?=$ip?></div>
			<div class="status"><?=$status?></div>
		</div>

	<?php
	}
	?>

	</div>

</div>
</body>
</html>