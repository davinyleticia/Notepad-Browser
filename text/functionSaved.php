<?php

function gravar($msg,$nome,$tag){
    
    $url = '../all/' . $nome . ".$tag" . '.txt';
    $fp = fopen($url, "a");

    // Escreve "exemplo de escrita" no bloco1.txt
    $escreve = fwrite($fp, $msg);
     
    // Fecha o arquivo
    fclose($fp);

    return true;
}
