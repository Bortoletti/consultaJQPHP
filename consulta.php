<?php

$id = isset( $_REQUEST['id'] )?$_REQUEST['id']:1;


$produtos = array();
$produtos[1] = json_decode('{"codigo":1,"nome":"Produto 1"}');
$produtos[2] = json_decode('{"codigo":2,"nome":"Produto 2"}');
$produtos[3] = json_decode('{"codigo":3,"nome":"Produto 3"}');

print( "<br>Codigo: " . $produtos[$id]->codigo );
print( "<br>Nome: " . $produtos[$id]->nome );

?>