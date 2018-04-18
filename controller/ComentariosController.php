<?php
	include_once 'model/ComentariosModel.php';
	include_once 'view/ComentariosView.php';

	class ComentariosController extends SecuredController
	{
		function __construct()
		{
			$this->model = new ComentariosModel();
			$this->view = new ComentariosView();
		}

		public function index()
		{
			$permiso = $this->esAdmin();
			if($permiso){
            $this->view->showComentarios();
					}
					else {
						echo "<h3>Acceso denegado</h3>";
						echo "<h3>Lo sentimos, usted no tiene permiso para acceder a esta sección</h3>";
					}
			}

	}
 ?>
