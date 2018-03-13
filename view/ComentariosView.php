<?php
	class ComentariosView extends View
	{
		function showComentarios()
		{
			$this->smarty->display('templates/comentarios/indexComentarios.tpl');
		}
	}
 ?>
