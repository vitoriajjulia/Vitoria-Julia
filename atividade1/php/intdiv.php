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
  
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    echo "<p> o valor da divisão de $num1 por $num2 é: " . intdiv( $num1, $num2);
  

    ?>
    <br><br>
    <a href="../index.html">voltar</a>

</body>
</html>