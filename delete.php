<?php

if(isset($_GET['codigo'])){
    $banco = "banco.txt";
    $informacoes = 6;
    $lista = explode("\n", file_get_contents($banco));
    array_splice($lista, $informacoes*($_GET['codigo']-1), $informacoes);
    for($i = 0; $i < count($lista)-1; $i++){ $texto .= $lista[$i] . "\n";}
    unlink($banco);
    $criar = fopen($banco, "a+");
    fwrite($criar, $texto);
    fclose($criar);
}
header('Location: crudtxt/select.php#'.$_GET['codigo']-1);
?><?php

if(isset($_GET['codigo'])){
    $banco = "banco.txt";
    $informacoes = 6;
    $lista = explode("\n", file_get_contents($banco));
    array_splice($lista, $informacoes*($_GET['codigo']-1), $informacoes);
    for($i = 0; $i < count($lista)-1; $i++){ $texto .= $lista[$i] . "\n";}
    unlink($banco);
    $criar = fopen($banco, "a+");
    fwrite($criar, $texto);
    fclose($criar);
}
header('Location: crudtxt/select.php#'.$_GET['codigo']-1);
?><?php

if(isset($_GET['codigo'])){
    $banco = "banco.txt";
    $informacoes = 6;
    $lista = explode("\n", file_get_contents($banco));
    array_splice($lista, $informacoes*($_GET['codigo']-1), $informacoes);
    for($i = 0; $i < count($lista)-1; $i++){ $texto .= $lista[$i] . "\n";}
    unlink($banco);
    $criar = fopen($banco, "a+");
    fwrite($criar, $texto);
    fclose($criar);
}
header('Location: crudtxt/select.php#'.$_GET['codigo']-1);
?>