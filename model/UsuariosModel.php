<?php

/**
 *
 */
class UsuariosModel extends Model
{

  function getUsuarios(){
    $sentencia = $this->db->prepare('SELECT * FROM vendedor');
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getUsuario($id_vendedor){
    $sentencia = $this->db->prepare( "select * from vendedor where id_vendedor = ?");
    $sentencia->execute([$id_vendedor]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getNombreUsuario($id_vendedor){
    $sentencia = $this->db->prepare( "select nombre from vendedor where id_vendedor = ?");
    $sentencia->execute([$id_vendedor]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function guardarUsuario($nombre, $telefono, $localidad){
    $sentencia = $this->db->prepare('INSERT INTO vendedor(nombre, telefono, localidad) VALUES(?,?,?)');
    $sentencia->execute([$nombre, $telefono, $localidad]);
    $id = $this->db->lastInsertId();
    return $this->getUsuario($id);
  }

  function borrarUsuario($id_vendedor){
    $sentencia = $this->db->prepare( "delete from vendedor where id_vendedor=?");
    $sentencia->execute([$id_vendedor]);
  }

  function actualizarUsuario($nombre, $telefono, $localidad, $id_vendedor){
    $sentencia = $this->db->prepare('UPDATE vendedor SET nombre=?, telefono=?, localidad=? WHERE id_vendedor=?');
    $sentencia->execute([$nombre, $telefono, $localidad, $id_vendedor]);
  }
}



 ?>
