<?php

function connect(){
        return new PDO('mysql:host=localhost;'
        .'dbname=db_juegos;charset=utf8'
        , 'root', '');
}


function getItems(){
        $db = connect();
        $sentencia = $db->prepare('SELECT * FROM item');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);

}

function updateItem($nombre, $tipo, $genero, $descripcion, $usuario){
        $db = connect();
        $sentencia = $db->prepare('UPDATE item SET (nombre, tipo, genero, descripcion, fk_id_usuario) VALUES(?,?,?,?,?)');
        return $sentencia->execute($nombre, $tipo, $genero, $descripcion, $usuario);
}

function updateUsuario($nombre, $telefono, $localidad){
        $db = connect();
        $sentencia = $db->prepare('UPDATE item SET (nombre, tipo, genero, descripcion, fk_id_usuario) VALUES(?,?,?,?,?)');
        return $sentencia->execute($nombre, $telefono, $localidad);
}


function deleteItem($id_item){
        $db = connect();
        $sentencia = $db->prepare('DELETE FROM item WHERE id_item=?');
        return $sentencia->execute([$id_item]);
}

function deleteUsuario($id_usuario){
        $db = connect();
        $sentencia = $db->prepare('DELETE FROM usuario WHERE id_usuario=?');
        return $sentencia->execute([$id_usuario]);
}


function getNombreUsuario($idUsuario){
        $db = connect();
        $sentencia = $db->prepare("SELECT * FROM usuario WHERE usuario.id_usuario =?");
        $sentencia->bindParam(1, $idUsuario);
        $sentencia->execute();
        $arreglo = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $resultado = $arreglo[0]["nombre"];
        return $resultado;
}

function insertUsuario($nombre, $telefono, $localidad){
        $db = connect();
        $sentencia = $db->prepare('INSERT INTO usuario(nombre, telefono, localidad) VALUES(?,?,?)');
        $sentencia->execute([$nombre, $telefono, $localidad]);
}

function insertItem($nombre, $tipo, $genero, $descripcion, $usuario){
        $db = connect();
        $sentencia = $db->prepare('INSERT INTO usuario(nombre, tipo, genero, descripcion, fk_id_usuario) VALUES(?,?,?,?,?)');
        $sentencia->execute([$nombre, $tipo, $genero, $descripcion, $usuario]);
}

 ?>
