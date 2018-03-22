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
              break;
        }

        public function getComentario($url_params = [])
        {
              $id = $url_params[":id"];
              $comentario = $this->model->getComentario($id);
              if($comentario)
                  return $this->json_response($comentario, 200);
              else
                  return $this->json_response(false, 404);

        }


        public function destroyComentario($url_params = [])
        {
          switch (sizeof($url_params)) {
            case 0:
              return $this->json_response(false, 400);
              break;
            case 1:        
              $id = $url_params[":id"];
              $comentario = $this->model->getComentario($id);
              if($comentario)
              {
                $this->model->deleteComentario($id);
                return $this->json_response("Borrado exitoso.", 200);
              }
              else
                return $this->json_response(false, 404);
            default:
              return $this->json_response(false, 404);
              break;
          }
        }

        public function createComentario($url_params = []) {
            if(sizeof($url_params) == 0) {
              $body = json_decode($this->raw_data);
              $texto = $body->texto;
              $fk_id_usuario = $body->fk_id_usuario;
              $fk_id_item = $body->fk_id_item;
              $puntaje = $body->puntaje;
              $comentario = $this->model->setComentario($texto, $fk_id_usuario, $fk_id_item, $puntaje);
              return $this->json_response($comentario, 200);

            }
            else {
                    return $this->json_response(false, 404);
            }
          }

        public function showComentarios(){
              $comentario = $this->getComentarios();

        }
    }
 ?>
