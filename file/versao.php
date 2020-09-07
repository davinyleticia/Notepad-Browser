<?php

@$arquivo = file_get_contents('https://divulgueinfo.github.io/versao-json/versao-notepad.json');

$json = json_decode($arquivo, true);


