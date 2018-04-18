<?php

/**
 *
 */
class AdminModel extends Model
{

  function getRegistrados(){
    $sentencia = $this->db->prepare('SELECT * FROM usuario');
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getRegistrado($id_usuario){
    $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE id_usuario=?');
    $sentencia->execute([$id_usuario]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function borrarRegistrado($id_usuario){
    $sentencia = $this->db->prepare('DELETE FROM usuario WHERE id_usuario=?');
    $sentencia->execute([$id_usuario]);
  }

  function actualizarPermiso($es_admin, $id_usuario){
    $sentencia = $this->db->prepare('UPDATE usuario SET es_admin=? WHERE id_usuario=?');
    $sentencia->execute([$es_admin, $id_usuario]);
  }

  function getImagenesdeItems(){
       $sentencia_imagenes = $this->db->prepare('SELECT i.nombre as nombre, im.path as camino, im.id_imagen as id_imagen FROM item i, imagen im WHERE im.fk_id_item = i.id_item');
       $sentencia_imagenes->execute();
       $imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
       return $imagenes;
  }

  function borrarImagen($id_imagen){
    $sentencia = $this->db->prepare('DELETE FROM imagen WHERE id_imagen=?');
    $sentencia->execute([$id_imagen]);
  }

  function obtenerId($email){
       $sentencia = $this->db->prepare('SELECT id_usuario FROM usuario WHERE usuario=?');
       $sentencia->execute([$email]);
       $arrid = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       $arrUsuario = $arrid[0];
       $id = $arrUsuario[id_usuario];
       return $id;
  }

}



 ?>
