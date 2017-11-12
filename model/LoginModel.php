<?php

/**
 *
 */
class LoginModel extends Model
{
  function getUser($userName){
     $sentencia = $this->db->prepare( "select * from usuario where usuario = ? limit 1");
     $sentencia->execute([$userName]);
     return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   }
  // function getItems(){
  //   $sentencia = $this->db->prepare('SELECT * FROM item');
  //   $sentencia->execute();
  //   return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  // }
  //
  // function getItem($id_item){
  //   $sentencia = $this->db->prepare( "select * from item where id_item = ?");
  //   $sentencia->execute([$id_item]);
  //   return $sentencia->fetch(PDO::FETCH_ASSOC);
  // }
  //
  // function guardarItem($nombre, $genero, $precio, $descripcion, $vendedor){
  //   $sentencia = $this->db->prepare('INSERT INTO item(nombre, genero, precio, descripcion, vendedor) VALUES(?,?,?,?,?)');
  //   $sentencia->execute([$nombre, $genero, $precio, $descripcion, $vendedor]);
  //   $id = $this->db->lastInsertId();
  //   return $this->getItem($id);
  // }
  //
  // function borrarItem($id_item){
  //   $sentencia = $this->db->prepare( "delete from item where id_item=?");
  //   $sentencia->execute([$id_item]);
  // }
}



 ?>
