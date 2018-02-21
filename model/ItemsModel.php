<?php

class ItemsModel extends Model
{
  function getItems(){
    $itemsImagenes = [];
    $sentencia = $this->db->prepare('SELECT i.id_item, i.nombre as juego, i.precio, v.nombre as vendedor FROM item i, vendedor v WHERE i.fk_id_vendedor = v.id_vendedor');
    $sentencia->execute();
    $items = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($items as $item) {
       $sentencia_imagenes = $this->db->prepare("select * from imagen where fk_id_item=?");
       $sentencia_imagenes->execute([$item['id_item']]);
       $imagenes = $sentencia_imagenes->fetchAll(PDO::FETCH_ASSOC);
       $item['imagenes'] = $imagenes;
       $itemsImagenes[] = $item;
    //   print_r($itemsImagenes);
     }
     return $itemsImagenes;
  }

  function getItemsPorUsuario($id){
    $sentencia = $this->db->prepare('SELECT i.id_item, i.nombre as juego, i.precio, v.nombre as vendedor FROM item i, vendedor v WHERE i.fk_id_vendedor = v.id_vendedor AND v.id_vendedor=?');
    $sentencia->execute($id);
    $items = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }

  function getItem($id_item){
    $sentencia = $this->db->prepare( "select * from item where id_item = ?");
    $sentencia->execute([$id_item]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getImagen($id_imagen){
    $sentencia = $this->db->prepare( "select * from item where id_imagen = ?");
    $sentencia->execute([$id_imagen]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


  function obtenerImagen($id_item){
      $itemImagenes=[];
      $sentenciaimagen= $this->db->prepare( "select * from imagen where fk_id_item=?");
      $sentenciaimagen->execute([$id_item]);
      $imagenes = $sentenciaimagen->fetchAll(PDO::FETCH_ASSOC);
      $itemImagenes[]=$imagenes;
      return $itemImagenes;
  }

  function guardarItem($nombre, $genero, $precio, $descripcion, $vendedor){
      $sentencia = $this->db->prepare('INSERT INTO item (nombre, genero, precio, descripcion, vendedor) VALUES(?,?,?,?,?)');
      $sentencia->execute([$nombre, $genero, $precio, $descripcion, $vendedor]);
      $id = $this->db->lastInsertId();
      return $this->getItem($id);
  }

  function guardarImagenEnItem($imagen, $fk_id_item){
      $destino_final = 'imagenes/' . uniqid() . '.jpg';
      move_uploaded_file($imagen, $destino_final);
      $sentencia = $this->db->prepare('INSERT INTO imagen (path, fk_id_item) VALUES(?,?)');
      $sentencia->execute([$destino_final, $fk_id_item]);
      $id = $this->db->lastInsertId();
      return $this->getImagen($id);
  }


  function actualizarItem($nombre, $genero, $precio, $descripcion, $vendedor, $id_item){
    $sentencia = $this->db->prepare('UPDATE item SET nombre=?, genero=?, precio=?, descripcion=?, fk_id_vendedor=? WHERE id_item=?');
    $sentencia->execute([$nombre, $genero, $precio, $descripcion, $vendedor, $id_item]);
  }

  function borrarItem($id_item){
    $sentencia = $this->db->prepare( "delete from item where id_item=?");
    $sentencia->execute([$id_item]);
  }
}



 ?>
