<?php
include('functionSaved.php');

if (isset($_POST['nome'])){
    $nome = $_POST['nome'];
}

if (isset($_POST['tag'])){
    $tag = $_POST['tag'];
}
if (isset($_POST['msg'])){
    $msg = $_POST['msg'];
}
    
if (gravar($msg,$nome,$tag) == true){
    header ("location: http://file.notepad/file.php?url=$nome.$tag.txt");
};
