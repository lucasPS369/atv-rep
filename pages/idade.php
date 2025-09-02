<?php
$mensagem ="";
$nuI = $_GET["numeroI"];
$Vfinal = $_GET["Vfinal"];
$Ps = $_GET["passos"];

do { 
    $mensagem .= "<li>$nuI</li>";
    $nuI += $Ps;
} while ($nuI <= $Vfinal);
?>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros percorridos</title>
    <link rel="stylesheet" href="./../css/style.css">
</head>
<body>
    <h1>numeros:</h1>
    <div id="resultado">
 
     <?php echo $mensagem; ?>
 
    </div>
 
</body>
</html>