      <div class="row centered-form">
        <div class="col-xs-12 col-md-12">
         <div class="panel panel-primary">
            <div class="panel-heading">                  
            	Agregar Usuario
                  </div>
                  <div class="panel-body">
                  <form role="form" action="{{URL::to('backend/nuevo_usuario')}}" method="post">

                     <div class="form-group">
                        <label>Usuario</label>
                        <input required type="text" name="login" id="login" class="form-control input-sm" placeholder="Usuario">
                     </div>
                     
                     <div class="form-group">
                        <label>Contraseña</label>
                        <input required type="password" name="contrasenna" id="contrasenna" class="form-control input-sm" placeholder="Contraseña">
                     </div>                     
                     
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Apellido</label>
                              <input required type="text" name="apellido" id="apellido" class="form-control input-sm" placeholder="Apellido">
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Nombre</label>
                              <input required type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
                           </div>
                        </div>
                     </div>
                     
                     <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Email</label>
                              <input required type="email" name="correo" id="correo" class="form-control input-sm" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="form-group">
                              <label>Espacialidad</label>
                              <input required type="text" name="especialidad" id="especialidad" class="form-control input-sm" placeholder="Especialidad">
                           </div>
                        </div>                        
                     </div>


                     <input type="submit" value="Registrar" class="btn btn-info btn-block">
                     <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancelar</button>                  
                  </form>
               </div>
            </div>
         </div>
      </div>   