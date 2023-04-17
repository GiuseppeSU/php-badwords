<?php
    $frase = $_GET['frase'];
    $parola = $_GET['parola'];
    $unione = "$frase $parola";
    $risultato = 'La stringa è lunga: ' . strlen($unione);
    
    $parola2 = str_replace($parola,"***",$parola);
    $unione2 = "$frase $parola2";
    $risultato2 =  'La stringa è lunga: ' . strlen($unione2);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Bad Word</title>
</head>
<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center ">
        <div class="row ">
            <div class="col text-center">
                <div class="card w-75">
                    <h5 class="card-header">Frase senza censure</h5>
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $unione; ?></h1>
                        <p class="card-text"><?php echo $risultato; ?></p>
                    </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="card w-75">
                    <h5 class="card-header">Frase con censure</h5>
                    <div class="card-body">
                        <h1 class="card-title"><?php echo $unione2; ?></h1>
                        <p class="card-text"><?php echo $risultato2; ?></p>
                    </div>
                </div>
            </div>
        
        </div>
        </div>
    </div>


            

        
       

        
      







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html>