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

	}
 ?>
