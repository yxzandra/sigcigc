@extends('plantillas.dashboard')

@section('titulo')
  Control de Vacaciones
@stop

@section('content')
<form role="form">
  <div class="form-group">
    <div class="col-md-3">
      <input id="prependedtext" name="prependedtext" class="form-control" placeholder="Ficha del empleado" type="text">
    </div>
      <div class="col-md-1">
         <input type="submit" class="btn btn-primary form-control" id="buscar" value="Buscar"> 
      </div> 
  </div>
</form>
<br>
<form role="form" style="background: #FFFFFF;MARGIN-TOP: 50PX;">
  <div class="table-responsive"> 
    <table class="table">
      <thead>
        <tr>
          <th>Departamentos</th>
          <th>#</th>
          <th>Ficha</th>
          <th>Nombres y Apellidos</th>
          <th></th>
          <th>ENE</th>
          <th>FEB</th>
          <th>MAR</th>
          <th>ABR</th>
          <th>MAY</th>
          <th>JUN</th>
          <th>JUL</th>
          <th>AGO</th>
          <th>SEP</th>
          <th>OCT</th>
          <th>NOV</th>
          <th>DIC</th>
          <th>Observación</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <th scope="rowgroup" rowspan="3">GENRECIA CIGC
            <th scope="rowgroup" rowspan="3">1
            <th scope="rowgroup" rowspan="3">5843
            <th scope="rowgroup" rowspan="3">GRAFFE G. JOSE LUIS
        </tr>
        <tr>
            <th scope="row">P</th>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td scope="rowgroup" rowspan="3"> prueba</td>
            <td scope="rowgroup" rowspan="3"><span class="glyphicon glyphicon-pencil"></span></td>
        </tr>
        <tr>
            <th scope="row">R</th>
            <td>1</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
            <td>2</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-2 pull-right">
   <button type="submit" class="btn btn-primary form-control " id="Bpdf" value="Generar PDF"><i class="glyphicon glyphicon-share"></i> Generar PDF</button>
  </div> 
  </form>
  @stop