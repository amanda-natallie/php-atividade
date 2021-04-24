<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Exercicio</title>
</head>

<body>

    <form action="" method="POST">
        <div class="form-group">
            <label for="n1">Primeira condição</label>
            <input type="checkbox" name="n1" id="n1" value="">
        </div>
        <div class="form-group">
            <label for="n1">Segundo condição</label>
            <input type="checkbox" name="n2" id="n2" value="">
        </div>
        <div class="form-group">
            <label for="n1">Terceira condição</label>
            <input type="checkbox" name="n3" id="n3" value="">
        </div>
        <div class="form-group">
            <input name="enviar" id="" class="btn btn-primary" type="submit" value="Enviar">
        </div>
    </form>

    <?php

    if ($_POST) {

        $condicao1 = isset($_POST["n1"]) ;
        $condicao2 = isset($_POST["n2"]) ;
        $condicao3 = isset($_POST["n3"]) ;

        if ($condicao1 and $condicao2) {
            // somente se as duas forem verdadeiras
            echo 'Operador "and" Verdadeiro: ', var_dump($condicao1, $condicao2), '<br>';
        } else {
            echo 'Operador "and" Falso: ', var_dump($condicao1, $condicao2), '<br>';
        }

        if ($condicao1 or $condicao2) {
            //Verdadeiro se qualquer uma das duas condições forem verdadeiras
            echo 'Operador "or" Verdadeiro: ', var_dump($condicao1, $condicao2), '<br>';
        } else {
            echo 'Operador "or" false: ', var_dump($condicao1, $condicao2), '<br>';
        }

        if ($condicao1 xor $condicao3) {
            //somente se uma das duas forem verdadeiras
            echo 'Operador "xor" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
        } else {
            echo 'Operador "xor" false: ', var_dump($condicao1, $condicao3), '<br>';
        }

        if (!$condicao2) {
            // Nega a condicao e entra aqui somente se negando for verdadeiro
            echo 'Operador "!" Verdadeiro: ', var_dump($condicao2), '<br>';
        } else {
            echo 'Operador "!" false: ', var_dump($condicao2), '<br>';
        }

        if ($condicao1 && $condicao3) {
            // somente se as duas forem verdadeiras
            echo 'Operador "&&" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
        } else {
            echo 'Operador "&&" Falso: ', var_dump($condicao1, $condicao3), '<br>';
        }

        if (!$condicao1 || !$condicao3) {
            //Verdadeiro se qualquer uma das duas condições forem verdadeiras
            echo 'Operador "||" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
        } else {
            echo 'Operador "||" false: ', var_dump($condicao1, $condicao3), '<br>';
        }
    } ?>
</body>

</html>