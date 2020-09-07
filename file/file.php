<?php
if (isset($_GET['url']))
{
    $url = $_GET['url'];
} else {

    $url = '';
}
include"./functionFile.php";
include"./versao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad - Files</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="./dv-logo.png">
    <style>
    .file {
    /* Apenas para centralizar o form na página */
    margin: 0 auto;
    width: 700px;
    margin-top: 25px;
    margin-bottom:25px;
    
    /* Para ver as bordas do formulário */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
}

    input, textarea,{
    /* Para certificar-se que todos os campos de texto têm as mesmas configurações de fonte. Por padrão, textareas ter uma fonte monospace*/
    font: 22px sans-serif;
    margin: 4px;

    /* Para dar o mesmo tamanho a todos os campo de texto */
    width: 650px;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    /* Para harmonizar o look & feel das bordas nos campos de texto*/
    border: 1px solid #999;

}
    .autora{
    margin: 8px;
    color: #522223;
    font: 13px sans-serif;
}
    .button {
    /* Para posicionar os botões para a mesma posição dos campos de texto */
    padding-left: 0px; /* mesmo tamanho que os elementos do tipo label */
    font: 22px sans-serif;
    margin: 7px;
}

    </style>
</head>
<body>
<div class="alert alert-primary" role="alert">
Status: <?= @$json['status']; ?> | Versão: <?= @$json['versao']; ?> | Status da rede: <?= @$json['conectado']; ?>
</div>
<div class="file">
    <div class="form-group">
        <DIV>
    <h3>📚 Files: <?php echo"$url"; ?></h3>
    <BR>
    <a class="btn btn-info" href="./?id=link"> Link List </a>
    <a class="btn btn-info" href="./?id=txt"> Note List </a>
    <a class="btn btn-success" href="http://link.notepad"> Save Link </a>
    <a class="btn btn-success" href="http://create.notepad"> Save Text </a>
    <a class="btn btn-secondary active" href="http://file.notepad/__doc__/readme.html" > Help </a>
    <BR><BR>
    <?php
    file_display($url);
    ?>
    </div>
	<HR>
    <div class="autora">
    👩 Made 💜 by Daviny Vidal.
    </div>
</div>
</body>  
