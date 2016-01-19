      <div class="row centered-form">
        <div class="col-xs-12 col-md-12">
         <div class="panel panel-primary">
            <div class="panel-heading">                  
               Editar Usuario
                  </div>
                  <div class="panel-body">
                  <form role="form" action="{{URL::to('backend/editar_usuario')}}" method="post">



                     <div class="form-group">
                        <label>id</label>
                        <input required readonly type="text" name="id" id="id" value="{{$user->id}}" class="form-control input-sm" placeholder="Usuario">
                     </div>



                     <div class="form-group">
                        <label>Usuario</label>
                        <input required type="text" name="login" id="login" value="{{$user->usu_login}}" class="form-control input-sm" placeholder="Usuario">
                     </div>
                     
                     <div class="form-group">
                        <label>Contraseña</label>
                        <input required type="password" name="contrasenna" id="contrasenna" value="{{$user->usu_passwd}}" class="form-control input-sm" placeholder="Contraseña">
                     </div>                     
                     
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Apellido</label>
                              <input required type="text" name="apellido" id="apellido" value="{{$user->usu_apellido}}" class="form-control input-sm" placeholder="Pregunta secreta">
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Nombre</label>
                              <input required type="text" name="nombre" id="nombre" value="{{$user->usu_nombre}}" class="form-control input-sm" placeholder="Confirmar contraseña">
                           </div>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Email</label>
                              <input required type="email" name="correo" id="correo" value="{{$user->usu_correo}}" class="form-control input-sm" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Espacialidad</label>
                              <input required type="text" name="especialidad" id="especialidad" value="{{$user->usu_ficha}}" class="form-control input-sm" placeholder="Respuesta secreta">
                           </div>
                        </div>                        
                     </div>


                     <input type="submit" value="Guardar Cambios" class="btn btn-info btn-block">
                     <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancelar</button>                  
                  </form>
               </div>
            </div>
         </div>
      </div>   