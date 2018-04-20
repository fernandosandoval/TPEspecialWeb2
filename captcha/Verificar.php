<?php
//session_start(); # importante iniciar session al comienzo de la página

if($_POST['valor']){
session_start(); # iniciamos la sesion
if($_POST['valor'] == $_SESSION['codigo']) # comprobamos que el campo captcha, sea igual que el codigo generado
{
        //echo("El Código introducido es correcto");
          $respuesta = true;
    //    return true; # A partir de esta condición podemos seguir realizando comprobaciones.
        }else{
              echo("El número introducido es incorrecto. Por favor vuelva a ingresar su comentario");
              $respuesta = false;
              }
}
echo $respuesta;
?>
