<?php

$banco = "banco.txt";
$conteudo = $_POST["nome"] . "\n" . $_POST["email"] . "\n" . $_POST["data"]. "\n" . $_POST["personagem"] . "\n" . str_replace ("\n", "<br>", $_POST["mensagem"])  .  "\n";
$criar = fopen($banco, "a+");
fwrite ($criar, $conteudo);

if (isset($_POST['personagem'])) {
    $perso = $_POST["personagem"];
    if ($perso == 'Homer Simpson') {
        header("Location: personagem1.php");
        die();
    }
    if ($perso == 'Skeletor') {
        header("Location: personagem2.php");
        die();
    }
    if ($perso == 'Pica-pau') {
        header("Location: personagem3.php");
        die();
    }
    if ($perso == 'Charada') {
        header("Location: personagem4.php");
        die();
    }
    if ($perso == 'Dick Vigarista') {
        header("Location: personagem5.php");
        die();
    }
    if ($perso == 'Patolino') {
        header("Location: personagem6.php");
        die();
    }
    if ($perso == 'Coragem, o Cão Covarde') {
        header("Location: personagem7.php");
        die();
    }
    if ($perso == 'Batman') {
        header("Location: personagem8.php");
        die();
    }
    if ($perso == 'Coringa') {
        header("Location: personagem9.php");
        die();
    }
    if ($perso == 'Zé Carioca') {
        header("Location: personagem10.php");
        die();
    }

  }

if ($criar == true){
    echo "Dados armazenados em banco.txt";

} else {
    echo "Erro ao salvar dados e banco.txt";
}
fclose ($criar);
?>                                        