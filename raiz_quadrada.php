<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <!--Escreva um algoritmo que leia um número, calcule a raiz quadrada, E mostre na tela o resultado
    Obs.: Se não for exata mostrar uma mensagem informando que a raiz quadrada não é exata.  -->
    <label>
        <h1>Raiz Quadrada</h1>
        <form  method="post">
           Digite:  <input type="text" name="raiz" >
           <input type="submit" value="Calcular">
        </form>
    </label>
</body>
<?php
$raiz_quadrada=$_POST['raiz'];
if($raiz_quadrada>0){
    $raiz= sqrt($raiz_quadrada);
    print_r("<br><br>"."Raiz quadrada de $raiz_quadrada e $raiz");
}else{
    print_r("<br><br>" ."A raiz quadrada de. " .$raiz_quadrada . " é  número menor que Zero.");
}   

?>
</html>