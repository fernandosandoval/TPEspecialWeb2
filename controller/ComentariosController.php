<?php
	include_once 'model/ComentariosModel.php';
	include_once 'view/ComentariosView.php';

	class ComentariosController extends Controller
	{
		function __construct()
		{
			$this->model = new ComentariosModel();
			$this->view = new ComentariosView();
		}

		public function index()
		{
			$this->view->showComentarios();
		}

		// public function destroy($params)
		// {
		// 	$id_comentario = $params[0];
		// 	$this->model->deleteComentario($id_comentario);
		// 	header('Location: '.ABM);
		// }
	}
 ?>
