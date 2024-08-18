<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
</head>
<body>
    <h1>Desafio PHP</h1>
    <p> Escreva um código PHP que some todos os números pares entre 0 e 40 e depois divida o total por 30.  </p>
    <p>
        <?php 
            $soma = 0;
            $n = 0;
            $resultado = 0;
            while ($n <= 40){
                $soma += $n;
                $n += 2;      
            }
            $resultado = $soma / 30;
            echo $resultado;
        ?>
    </p>
</body>
</html>