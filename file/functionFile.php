<?php

function file_list($tipo)
{
    $arquivos = glob("{../all/*.$tipo}", GLOB_BRACE);
    foreach($arquivos as $text)
    { 
       $url = str_replace("../all/", "", $text);
       $formato =  str_replace(".$tipo", "", $url);

       echo "<ul class='list-group'>
       <li class='list-group-item'>
       <a href='file.php?url=$url'>$formato</a>
       </li></ul>";
    }
};

function file_display($url)
{
    $file = '../all/' . $url;
    $handle = fopen($file, 'r');

    while($line = fgets($handle)){

        echo $line . "<br>";
        
      }   
};
