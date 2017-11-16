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
    $sentencia = $this->db->prepare('SELECT * FROM usuario WHERE id_vendedor = ?');
    $sentencia->execute([$id_usuario]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function borrarRegistrado($id_usuario){
    $sentencia = $this->db->prepare('DELETE FROM usuario WHERE id_usuario=?');
    $sentencia->execute([$id_usuario]);
  }

  function actualizarPermiso($es_admin, $id_usuario){
    $sentencia = $this->db->prepare('UPDATE vendedor SET es_admin=? WHERE id_usuario=?');
    $sentencia->execute([$es_admin, $id_usuario]);
  }

  function getImagenesDeItems(){
    $sentencia = $this->db->prepare('SELECT i.id_item, i.nombre as juego, im.id_imagen, im.path as ruta,  FROM item i, imagen im WHERE i.id_item = im.fk_id_item');
    $sentencia->execute();
    $sentencia->fetchAll(PDO::FETCH_ASSOC);
    print_r($sentencia);
    return $sentencia;
  }

}



 ?>
