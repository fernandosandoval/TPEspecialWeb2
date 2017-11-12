<?php

/**
 *
 */
class ItemsModel extends Model
{

  function getItems(){
    $sentencia = $this->db->prepare('SELECT * FROM item');
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getItem($id_item){
    $sentencia = $this->db->prepare( "select * from item where id_item = ?");
    $sentencia->execute([$id_item]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function guardarItem($nombre, $genero, $precio, $descripcion, $vendedor){
    $sentencia = $this->db->prepare('INSERT INTO item(nombre, genero, precio, descripcion, fk_id_vendedor) VALUES(?,?,?,?,?)');
    print_r($sentencia);
    //echo "hola";
    $sentencia->execute([$nombre, $genero, $precio, $descripcion, $vendedor]);
    print_r($sentencia);
    $id = $this->db->lastInsertId();
    return $this->getItem($id);
  }

  function borrarItem($id_item){
    $sentencia = $this->db->prepare( "delete from item where id_item=?");
    $sentencia->execute([$id_item]);
  }
}



 ?>
