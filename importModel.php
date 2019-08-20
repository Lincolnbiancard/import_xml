<?php 
/* Conectar com o banco de dados da aplicação */
$link = mysqli_connect('localhost:3306', 'root', '') or die('Erro ao conectar');
mysqli_select_db($link, 'xml') or die('Erro ao conectar com o banco de dados');
 
$xml = simplexml_load_file('lista_contatos.xml'); /* Lê o arquivo XML e recebe um objeto com as informações */
 
/* Percorre o objeto e salva as informações no banco de dados */
$x = 0;
foreach ($xml as $contato){
    mysqli_query($link, "INSERT INTO contato(idcontato, nome, email) VALUES ('$contato->idcontato', '$contato->nome', '$contato->email')");
    if(mysqli_affected_rows($link) != -1){
       $x++;
    }
}
echo "$x contatos importados com sucesso!";
?>