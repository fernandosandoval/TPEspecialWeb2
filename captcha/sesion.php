<?php
session_start(); # importante iniciar session al comienzo de la página

if($_POST['enviar']){
session_start(); # iniciamos la sesion
if($_POST['captcha'] == $_SESSION['codigo']) # comprobamos que el campo captcha, sea igual que el codigo generado
{
echo("El Código introducido es correcto"); # A partir de esta condición podemos seguir realizando comprobaciones.
}else{
echo("El código introducido es INCORRECTO");
}
}
?> 
