@extends('plantillas.dashboard')

@section('titulo')
  Gestión de Usuarios
@stop

@section('miga')
  Usuarios
@stop
@section('content')
<br>
<div class="row">
    <div class="col-lg-12">
        <?php if(Session::has('message')) { ?>
        <div class="alert alert-success fade in">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
           <h4>Notificacion</h4>
           <p>{{Session::get('message')}}</p>
        </div>    
        <?php 
        Session::forget('message');
        } 
        ?>      
        <div class="panel panel-default">
            <div class="panel-heading">
                Listado Usuarios
                  <div class="pull-right">
                     <span class="clickable" data-toggle="modal" data-target="#userAccion" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>',0,0)" title="Agregar Usuario" data-container="body">
                        <i class="glyphicon glyphicon-plus"></i>                        
                     </span>                     
                  </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" >Login</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1"  >Apellido</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Nombre</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Ficha</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Depart</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Correo</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" >Accion</th></tr>
                        </thead>
                        <tbody>                
                        @foreach ($usuarios as $usuario)                       
                        <tr class="gradeA odd">
                                <td class="sorting_1">{{$usuario->usu_login}}</td>
                                <td class=" ">{{$usuario->usu_apellido}}</td>
                                <td class=" ">{{$usuario->usu_nombre}}</td>
                                <td class="center ">{{$usuario->usu_ficha}}</td>
                                <td class="center ">{{$usuario->usu_departamento}}</td>
                                <td class="center ">{{$usuario->usu_correo}}</td>
                                <td class="center ">{{$usuario->created_at}}</td>
                                <td style="padding-left: 35px;">
                                   <a class="clickable" data-toggle="modal" data-target="#userAccion" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>','1','{{$usuario->id}}')" ><span class="glyphicon glyphicon-pencil"></span></a>                              
                                   <a class="clickable" data-toggle="modal" data-target="#userAccion" onclick="showAccion('<?php echo URL::to('backend/users_action'); ?>','2','{{$usuario->id}}')" ><span class="glyphicon glyphicon-trash"></span></a>                                       
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="userAccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog" id="modal-dialog">
 <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div><!-- /.modal-content -->
 </div>
 </div>
@stop