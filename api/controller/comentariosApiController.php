<?php
    require_once('../model/ComentariosModel.php');
    require_once('Api.php');

    class ComentariosApiController extends Api
    {
  	    protected $model;
        function __construct()
        {
            parent::__construct();
            $this->model = new ComentariosModel();
        }

        public function getComentarios($url_params = [])
        {
    	    $comentarios = $this->model->getComentarios();
    	    return $this->json_response($comentarios, 200);
        }

        // public function getComentariosItem($url_params = [])
        // {
    	  //   $fk_id_item = $url_params[":id"];
    	  //   $comentariositem = $this->model->getComentariosItem($fk_id_item);
    	  //   return $this->json_response($comentariositem, 200);
        // }
        //
        // public function getComentariosUsuario($url_params = [])
        // {
    	  //   $fk_id_usuario = $url_params[":id"];
    	  //   $comentariosusuario = $this->model->getComentariosUsuario($fk_id_usuario);
    	  //   return $this->json_response($comentariosusuario, 200);
        // }
        //
        // public function getComentario($url_params = [])
        // {
    	  //   $id_comentario = $url_params[":id"];
    	  //   $comentario = $this->model->getComentario($id_comentario);
    	  //   if($comentario)
        //     {
    		//     return $this->json_response($comentario, 200);
    	  //   }
    	  //   else
        //     {
    		//     return $this->json_response(false, 404);
    	  //   }
        // }
        //
        // public function createComentario($url_params = [])
        // {
        //     session_start();
        //     if(isset($_SESSION['USER']))
        //     {
        //         $body = json_decode($this->raw_data);
        //         $fk_id_usuario = $body->fk_id_usuario;
        //         $fk_id_item = $body->fk_id_item;
        //         $puntaje = $body->puntaje;
        //         $texto = $body->texto;
        //         $comentario = $this->model->setComentario($fk_id_usuario, $fk_id_celular, $puntaje, $textocomentario);
        //         return $this->json_response($comentario, 200);
        //         if (time() - $_SESSION['LAST_ACTIVITY'] > 400)
        //         {
        //             header('Location: '.LOGOUT);
        //             die();
        //         }
        //         $_SESSION['LAST_ACTIVITY'] = time();
        //     }
        // }
        //
        // public function deleteComentario($url_params = [])
        // {
    	  //   $id_comentario = $url_params[":id"];
    	  //   $comentario = $this->model->getComentario($id_comentario);
    	  //   if($comentario)
        //     {
    		//     $this->model->deleteComentario($id_comentario);
    		//     return $this->json_response("Borrado exitoso", 200);
    	  //   }
    	  //   else
        //     {
    		//     return $this->json_response(false, 404);
    	  //   }
        //}
    }
 ?>
