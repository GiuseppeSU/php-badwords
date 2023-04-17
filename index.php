<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word</title>
</head>
<body>

<form method="GET" action="frase.php">

        <label for="nome">Inserisci frase: </label>
        <textarea name="frase" id="frase" cols="30" rows="10"></textarea>
        <input type="text" name="wrong" id="wrong" placeholder="Inserisci la parola"/>
        <button type="submit">Invia</button>

</form>
    
</body>
</html>