<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Img</title>
</head>
<body>
        <h3>Resultado</h3>
<?php   
$numero = $_POST['numero'];

if($numero == 4){
    echo 'Perfecto!!','<img src="ok.png">';
        }else{
            echo 'NO!','<img src="error.png">';
        }
?>

<div>
    <a href="enviaImg.html" class="">volver</a>
    </div>
    
</body>
</html>



