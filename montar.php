<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Site em PHP</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"content = "width=device-width, initial-scale=1">
    </head>
    <body>
        <?php 
        $banco = "banco.txt"; 
        if (isset($_GET['codigo'])){
            if (file_exists($banco) && !empty(file_get_contents($banco))){
                $lista = explode("\n", file_get_contents($banco)); 
                $informacoes = 6; 
                $conjunto = $informacoes * ($_GET['codigo'] - 1);

                $nome = $lista[$conjunto];
                $email = $lista[$conjunto + 1];
                $data = $lista[$conjunto + 2]; 
                $personagem = $lista[$conjunto+3];
                $mensagem = str_replace("<br>", "\n", $lista[$conjunto + 4]); 
            }
        }
        ?> 
        <form method="post" action="update.php">
            <label for="codigo">Código: </label>
            <input type ="number" id="codigo" name="codigo" placeholder="<?php echo $_GET['codigo']; ?>" value="<?php echo $_GET['codigo']; ?>" style="background-color: darkkhaki;" readonly><br>
            <label for="nome">Nome: </label>
            <input type ="text" id="nome" name="nome" placeholder="<?php echo $nome; ?>" value="<?php echo $nome; ?>" required><br>
            <label for="email">Email: </label>
            <input type ="text" id="email" name="email" placeholder="<?php echo $email; ?>" value="<?php echo $email; ?>" required><br>
            <label for="email">Data: </label>
            <input type ="text" id="data" name="data" placeholder="<?php echo $data; ?>" value="<?php echo $data; ?>" required><br>
            <label for="email">Mensagem: </label>
            <textarea type ="text" id="mensagem" name="mensagem" rows="10" cols="40"><?php echo $mensagem; ?> </textarea> <br>

            <option selected>Escolha um</option>
            <select name="personagem" id="personagem">
            <option value="Homer Simpson" >Homer Simpson </option>
            <option value="Skeletor" >Skeletor </option>
            <option value="Pica-Pau" >Pica-Pau </option>
            <option value="Charada" >Charada </option>
            <option value="Dick Vigarista" >Dick Vigarista </option>
            <option value="Patolino" >Patolino </option>
            <option value="Coragem, o Cão Covarde" >Coragem, o Cão Covarde </option>
            <option value="Batman" >Batman </option>
            <option value="Coringa" >Coringa </option>
            <option value="Zé Carioca" >Zé Carioca </option>
  </select>
  <input type="submit" value="Atualizar">
        </form>
        <br><br>
    <a href="index.php">Voltar </a>
    </body>
</html>