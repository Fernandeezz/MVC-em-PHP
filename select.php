<?php
$banco = "banco.txt";
echo "<CENTER> Registros cadastrados no banco de dados. </br></CENTER>";
echo "<br>";
if (file_exists($banco) && !empty(file_get_contents($banco))) { /*file_exists Verifica a  existência do banco e file_get_content ler o conteúdo de um arquivo*/
    $lista = explode("\n", file_get_contents($banco)); /*divide o conteudo do banco*/ 
    $informacoes = 5;
    unset($lista[count($lista) -1 ]); /* remove a configuração de uma variável especificada*/
    $conjunto = 1;
    echo "<center><table border=1>";
    date_default_timezone_set('America/Sao_Paulo');
    echo "<meta charset='UTF-8'>";

    echo "<tr><th>Código</th><th> Nome do Usuário </th> <th> Email </th>  <th> Data </th>  <th> Personagem Escolhido </th> <th> Mensagem do Usuário </th> <th> Ações</th></tr>";
    for ($i = 0; $i < count($lista); $i += $informacoes) { 
        echo "<tr>";
        echo "<td id= '$conjunto'>$conjunto</td>";
        for ($j = $i; $j < $i + $informacoes; $j++) {
            echo "<td>{$lista[$j]}</td>";
        } 
        echo "<td><a href='delete.php?codigo=$conjunto'><img src='img/delete.png' alt='Deletar' title='Deletar Registro'></a><a href='montar.php?codigo=$conjunto'><img src='img/update.png' alt = 'Atualizar' title='Atualizar registro'></a><a href='index.php?codigo=$conjunto'><img src='img/insert.png' alt='Inserir' title='Inserir registro'></a></td>";
        echo "</tr>";
        $conjunto++;
    }
    echo "</table>";
    echo "<footer id='footer'>";
    echo "</footer>";
} else{
    echo "<br><br><p align=center>Ainda não há nenhum registro!</p>";
}
?>