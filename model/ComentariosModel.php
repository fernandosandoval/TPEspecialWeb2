<?php
class ComentariosModel extends Model{

    function getComentarios(){
        $sentencia=$this->db->prepare('SELECT c.id_comentario, c.texto, u.usuario, c.fk_id_usuario, i.nombre, c.puntaje
          FROM comentario c, usuario u, item i WHERE c.fk_id_usuario = u.id_usuario AND
          c.fk_id_item = i.id_item ORDER BY id_comentario');
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

    function getComentariosByItem($id){
      //  var_dump($id);
        $arr = str_split($id);
        $sentencia=$this->db->prepare('SELECT c.texto, u.usuario, i.nombre, c.puntaje, c.fk_id_item
          FROM comentario c, usuario u, item i WHERE c.fk_id_usuario = u.id_usuario AND
          c.fk_id_item =  i.id_item AND i.id_item = ? ORDER BY id_comentario');
        $sentencia->execute($arr);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
		}

		function getComentario($id_comentario){
      $sentencia=$this->db->prepare('SELECT c.id_comentario, c.texto, u.usuario, i.nombre, c.puntaje
          FROM comentario c, usuario u, item i WHERE c.fk_id_usuario = u.id_usuario AND
          c.fk_id_item = i.id_item AND c.id_comentario=?');
			$sentencia->execute([$id_comentario]);
			return $sentencia->fetch(PDO::FETCH_ASSOC);
		}

    function setComentario($texto, $fk_id_usuario, $fk_id_item, $puntaje){
			$sentencia = $this->db->prepare('INSERT INTO Comentario (texto, fk_id_usuario, fk_id_item, puntaje) VALUES(?,?,?,?)');
			$sentencia->execute([$texto, $fk_id_usuario, $fk_id_item, $puntaje]);
		}

		function deleteComentario($id_comentario){
			$sentencia = $this->db->prepare('DELETE FROM Comentario WHERE id_comentario = ?');
			$sentencia->execute([$id_comentario]);
		}
	}
 ?>
