<?php 
$xml = simplexml_load_file('lista_contatos.xml'); /* Lê o arquivo XML e recebe um objeto com as informações */
 
/* Percorre o objeto e imprime na tela as informações de cada contato */
foreach ($xml as $contato){
    $a = "Id: " . $contato->idcontato . "<br>";
    $a .= "Nome: " . $contato->nome . "<br>";
    $a .= "Email: " . $contato->email. "<br><br>";
    echo $a;
}
?>