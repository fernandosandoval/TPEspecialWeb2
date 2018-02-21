<?php
 class ConfigApi
 {
     public static $RESOURCE = 'resource';
     public static $PARAMS = 'params';
     public static $RESOURCES = [
       'comentarios#GET' => 'ComentariosApiController#getComentarios',
       'comentarios#POST' => 'ComentariosApiController#createComentario',
	     'comentarios#DELETE' => 'ComentariosApiController#deleteComentario'
     ];
 }
 ?>
