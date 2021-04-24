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
            <label for="n1">Digite o primeiro numero</label>
            <input type="text" name="n1" id="n1" value="">
        </div>
        <div class="form-group">
            <label for="n1">Digite o segundo numero</label>
            <input type="text" name="n2" id="n2" value="">
        </div>
        <div class="form-group">
            <label for="n1">Digite o terceiro numero</label>
            <input type="text" name="n3" id="n3" value="">
        </div>
        <div class="form-group">
            <input name="enviar" id="" class="btn btn-primary" type="submit" value="Enviar">
        </div>
    </form>

    <?php

if ($_POST) {

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
  
  

    //Testa se $n1 é igual a $n2
    if ($n1 == $n2) {
        echo "{$n1} é igual a {$n2} <br />";
    } else {
        echo "{$n1} não é igual a {$n2} <br />";
    }

    //Testa se $n1 é diferente de $n2
    if ($n1 <> $n2) {
        echo "{$n1} é diferente de {$n2} <br />";
    } else {
        echo "{$n1} não é diferente de {$n2} <br />";
    }
    //Testa se $n1 é diferente de $n2
    if ($n1 != $n2) {
        echo "{$n1} é diferente de {$n2} <br />";
    } else {
        echo "{$n1} não é diferente de {$n2} <br />";
    }

    //Testa se $n1 é menor que $n2
    if ($n1 < $n2) {
        echo "{$n1} é menor de {$n2} <br />";
    } else {
        echo "{$n1} não é menor de {$n2} <br />";
    }

    //Testa se $n3 é maior que $n1
    if ($n3 > $n1) {
        echo "{$n3} é maior de {$n1} <br />";
    } else {
        echo "{$n3} não é maior de {$n1} <br />";
    }

    //Testa se $n1 é menor ou igual a $n2
    if ($n1 <= $n2) {
        echo "{$n1} é menor ou igual a {$n2} <br />";
    } else {
        echo "{$n1} não é menor ou igual a {$n2} <br />";
    }

    //Testa se $n1 é maior ou igual a $n2
    if ($n1 >= $n2) {
        echo "{$n1} é maior ou igual a {$n2} <br />";
    } else {
        echo "{$n1} não é maior ou igual a {$n2} <br />";
    }

    //Testa se $n1 é idêntico a $n2
    if ($n3 === $n2) {
        echo "{$n3} é identico a {$n2} <br />";
    } else {
        echo "{$n3} não é identico a {$n2} <br />";
    }

    //Testa se $n1 não é idêntico a $n2
    if ($n1 !== $n2) {
        echo "{$n1} não é identico a {$n2} <br />";
    } else {
        echo "{$n3} é identico a {$n2} <br />";
    }
} ?>
</body>

</html>