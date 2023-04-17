<?php
    $frase = $_GET['frase'];
    $wrong = $_GET['wrong'];
    $unione = "$frase $wrong";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $unione; ?></h1>
</body>
</html>