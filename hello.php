<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$alunos = ["Luis", "vermeio", "klein"];
        echo "<pre>";
        echo var_dump($alunos);
        echo "<br>";
        print_r($alunos);

        $cliente = ["gabriel", 39, 1.92, true];
        print_r($cliente);
        echo var_dump($cliente);

        $cursos = [];
        $cursos[0]= "desenvolvimento de sistemas";
        $cursos[1]= "informatica";
        $cursos[4]= "eletronica";
        print_r ($cursos);


        echo "<h1> funções para vetores</h1> <br>";
        echo "adicionando depois do array push <br>";
        array_push($alunos, "mariana", "eduarda");
        print_r($alunos);

        echo "<h1>apagando o primeiro indice do vetor</h1>";
        array_shift($alunos);
        print_r($alunos);

        echo "contando os elementos <br>";
        echo count($alunos);
        $qtd_alunos = count($alunos); 
        echo "<h1><br> quantidade de aluos com variaveis $qtd_alunos<br>";

        echo "ordenandp do maior para o menor";
        rsort($alunos);
        print_r($alunos);

        echo"</pre>";

        $qtd = count($alunos);

        for ($i=0, $i < $qtd ; $i++) {
            echo "$alunos[$i] <br>";
        }
        echo "<br>------- <br>";
        foreach ($alunos as $indice => $aluno) {
            echo "$indice : $aluno <br>";
        }






        ?>

</body>
</html>