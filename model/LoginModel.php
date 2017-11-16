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

   function getUserById($id){
      $sentencia = $this->db->prepare( "select * from usuario where id_usuario = ?");
      $sentencia->execute([$id]);
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   }

   function createUser($username, $password)
    {
      $sentencia = $this->db->prepare("INSERT INTO usuario(usuario, password) VALUES (?, ?)");
      $sentencia->execute([$username, $password]);
    }

   function getUsuarios() {
      $sentencia = $this->db->prepare("SELECT * FROM usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
   }

   function borrarUsuario($id_usuario) {
      $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario = ?");
      return $sentencia->execute([$id_usuario]);
   }

   function cambiarPermiso($set, $id_usuario) {
      $sentencia = $this->db->prepare("UPDATE usuario SET es_admin = ? WHERE id_usuario = ?");
      return $sentencia->execute([$set, $id_usuario]);
   }

   function guardarDatosUsuario($userName, $passHash) {
      $sentencia = $this->db->prepare("INSERT INTO usuario (usuario, password) VALUES(?,?)");
      return $sentencia->execute([$userName, $passHash]);
   }

}
?>
