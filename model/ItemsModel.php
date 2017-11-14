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

  function asignarImagenes($items){
    $itemsImagenes=[];
    foreach ($items as $item) {
      $sentenciaimagen= $this->db->prepare( "select * from imagen where id_item=?");
      $sentenciaimagen->execute([$item["id_item"]]);
      $imagenes = $sentenciaimagen->fetchAll(PDO::FETCH_ASSOC);
      $item["juegos"]=$imagenes;
      $itemsImagenes[]=$item;
    }
    return $itemsImagenes;
  }



  // function getNombreVendedor($id_item){
  //   $sentencia = $this->db->prepare( "select nombre from vendedor where id_item = ?");
  //   $sentencia->execute([$id_item]);
  //   return $sentencia->fetch(PDO::FETCH_ASSOC);
  // }

  function guardarItem($nombre, $genero, $precio, $descripcion, $vendedor){
    $sentencia = $this->db->prepare('INSERT INTO item(nombre, genero, precio, descripcion, fk_id_vendedor) VALUES(?,?,?,?,?)');
    $sentencia->execute([$nombre, $genero, $precio, $descripcion, $vendedor]);
    $id = $this->db->lastInsertId();
    return $this->getItem($id);
  }

  function actualizarItem($id_item, $nombre, $genero, $precio, $descripcion, $vendedor){
    $sentencia = $this->db->prepare('UPDATE item SET nombre=?, genero=?, precio=?, descripcion=?, fk_id_vendedor=? WHERE id_item=?');
    $sentencia->execute([$nombre, $genero, $precio, $descripcion, $vendedor]);
  }

  function borrarItem($id_item){
    $sentencia = $this->db->prepare( "delete from item where id_item=?");
    $sentencia->execute([$id_item]);
  }
}



 ?>
