<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arquivo php</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>



    <?php
  
    $value = $_GET["value"];
    $values = $_GET["values"];
    $value_array = $_GET["value_array"];


    echo "<p> o valor mínimo de $value, $values, e $value_array é: " . min($value, $values, $value_array);
  

    ?>
    <br><br>
     <a href="../index.html">voltar</a>
</body>
</html>