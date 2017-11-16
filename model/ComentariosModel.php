<?php
class ComentariosModel extends Model{

    function getComentarios(){
			$sentencia = $this->db->prepare('SELECT * FROM comentario');
			$sentencia->execute();
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

    function getComentariosItem($fk_id_item){
			$sentencia = $this->db->prepare('SELECT * FROM comentario WHERE fk_id_item = ?');
			$sentencia->execute([$fk_id_item]);
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

		function getComentariosUsuario($fk_id_usuario){
			$sentencia = $this->db->prepare('SELECT * FROM comentario WHERE fk_id_usuario = ?');
			$sentencia->execute([$fk_id_usuario]);
			return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

		function getComentario($id_comentario){
			$sentencia = $this->db->prepare('SELECT * FROM comentario WHERE id_comentario = ?');
			$sentencia->execute([$id_comentario]);
			return $sentencia->fetch(PDO::FETCH_ASSOC);
		}

    function setComentario($texto, $fk_id_usuario, $fk_id_item, $puntaje){
			$sentencia = $this->db->prepare('INSERT INTO comentario (texto, fk_id_usuario, fk_id_item, puntaje, texto) VALUES(?,?,?,?,?)');
			$sentencia->execute([$texto, $fk_id_usuario, $fk_id_item, $puntaje]);
		}

		function deleteComentario($id_comentario){
			$sentencia = $this->db->prepare('DELETE FROM Comentario WHERE id_comentario = ?');
			$sentencia->execute([$id_comentario]);
		}
	}
 ?>
