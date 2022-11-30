<?php

function conectar(){
    $servidor = "localhost"; //ip del servidor
    $password = "###";
    $usuario = "root";
    $bd = "test";
    $link = mysqli_connect($servidor
        ,$usuario, $password, $bd);
return $link;
}

function desconectar($link){
    mysqli_close($link);
}

function query($sql){
    $link = conectar();
    return mysqli_query($link, $sql);
}