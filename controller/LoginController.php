<?php
include_once('model/LoginModel.php');
include_once('view/LoginView.php');

class LoginController extends Controller
{

  function __construct()
  {
     $this->view = new LoginView();
     $this->model = new LoginModel();
  }

  public function index()
  {
    $this->view->mostrarLogin();
  }

  public function verify(){
    $userName = $_POST['usuario'];
    $password = $_POST['password'];

    if(!empty($userName) && !empty($password)){
         $user = $this->model->getUser($userName);
         if((!empty($user)) && password_verify($password, $user[0]['password'])) {
             session_start();
             $_SESSION['USER'] = $userName;
             $_SESSION['ADMIN']= $user[0]['es_admin'];
             $_SESSION['LAST_ACTIVITY'] = time();
             header('Location: '.HOME);
             die();
         }
         else{
             $this->view->mostrarLogin('Usuario o Password incorrectos');
         }
       }
  }

  public function destroy()
   {
     session_start();
     session_destroy();
     header('Location: '.LOGIN);
   }

   public function signUp()
  {
    $userName = $_POST['usuario'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $passHash = password_hash($password, PASSWORD_DEFAULT);
    if ((filter_var($userName,FILTER_VALIDATE_EMAIL)) &&
      (isset($_POST['password']) && !empty($_POST['password'])))  {
          if ($password == $password2) {
                  $this->model->guardarDatosUsuario($userName, $passHash);
                  $user = $this->model->getUser($userName); //obtengo los datos para loguearme automaticamente
                  print_r($user);
                  if((!empty($user) && password_verify($password, $user[0]['password']))) {
                       session_start();
                       $_SESSION['USER'] = $userName;
                       $_SESSION['ADMIN'] = $user[0]['es_admin'];
                       $_SESSION['LAST_ACTIVITY'] = time();
                       header('Location: '.HOME);
                       die();
                     }
                 else
                    echo "No se ha ingresado Usuario o el password es incorrecto";
         }
         else {
           echo "Los passwords deben coincidir";
         }
       }
    else {
      echo "El Email es incorrecto o no se ha ingresado password";
    }
  }
}
?>
