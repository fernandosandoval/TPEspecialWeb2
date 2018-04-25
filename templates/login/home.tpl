<div id="partialRenderContainer">
       <div class="row">
         <div class="col-md-6 col-md-offset-3">
          <h2>Usted ha salido con éxito. Para volver al menú, por favor ingrese sus datos.</h2>
          <h3>Usuarios Registrados<h3>
           <form action="verificarUsuario" method="post">
             <div class="form-group">
               <label for="usuarioRL">Usuario o Email</label>
               <input type="text" class="form-control" id="usuarioRL" name="usuario" placeholder="nombre" required>
             </div>
             <div class="form-group">
               <label for="passwordRL">Password</label>
               <input type="password" class="form-control" id="passwordRL" name ="password" placeholder="contraseña" required>
             </div>
             {if !empty($error) }
               <div class="alert alert-danger" role="alert">{$error}</div>
             {/if}
             <button type="submit" class="btn btn-default">Login</button>
           </form>
           <h3>Si aún no se registró, puede hacerlo completando sus datos aquí:</h3>
           <form action="registrarUsuario" method="post">
             <div class="form-group">
               <label for="email">Email</label>
               <input type="text" class="form-control" id="usuarioN" name="usuario" placeholder="usuario" required>
             </div>
             <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" id="passwordN" name ="password" placeholder="contraseña" required>
             </div>
             <div class="form-group">
               <label for="password2">Vuelva a ingresar su Password</label>
               <input type="password" class="form-control" id="password2" name ="password2" placeholder="contraseña" required>
             </div>
             {if !empty($error) }
               <div class="alert alert-danger" role="alert">{$error}</div>
             {/if}
             <button type="submit" class="btn btn-default">Crear Usuario</button>
           </form>
           <form action="entradaInvitado" method="post">
             <div class="form-group">
               <input type="hidden" id="usuarioI" name="usuarioI" value="Invitado">
             </div>
           <button type="submit" id="botoninvitado" class="btn btn-primary">Entrar como invitado</button>
           </form>
         </div>
       </div>
