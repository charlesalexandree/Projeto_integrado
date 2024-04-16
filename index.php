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
        "" => "10.67.198.151",
        " " => "10.67.198.152",
        " " => "10.67.198.153",
        "  " => "10.67.198.154",
        "" => "10.67.198.155",
        "" => "10.67.198.156",
        "" => "10.67.198.157",
        "" => "10.67.198.158",
        " " => "10.67.198.159",
        "" => "10.67.198.160",
        "" => "10.67.198.161",
        "" => "10.67.198.162",
        "  " => "10.67.198.163",
        " " => "10.67.198.164",
        "" => "10.67.198.165",
        " " => "10.67.198.166",
        " " => "10.67.198.167",
        " " => "10.67.198.168",
        " " => "10.67.198.169",
        "  " => "10.67.198.170",
        " " => "10.67.198.171",
        " " => "10.67.198.172",
        " " => "10.67.198.173",
        " " => "10.67.198.174",
        "" => "10.67.198.175",
        " " => "10.67.198.176",
        " " => "10.67.198.177",
        "" => "10.67.198.178",
        " " => "10.67.198.179",
        " " => "10.67.198.180",     

    ];

?>
<div class="center">
    <h1>MONITORAMENTO DAS CAMERAS DO 2°CGEO</h1>

    <div class="cards">

    
        <div class="card <?=$status?>">
            <div class="servidor"><?=$servidor?></div>
            <div class="ip"><?=$ip?></div>
            <div class="status"><?=$status?></div>
        </div>

    
    </div>

</div>
</body>
</html>
