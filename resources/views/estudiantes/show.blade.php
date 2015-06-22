@extends('campus.plantilla')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class=""><a aria-expanded="false" href="/docentes" data-toggle="tab">Docentes</a></li>
    <li class="active"><a aria-expanded="false" href="/estudiantes" data-toggle="tab">Estudiantes</a></li>
    <li class=""><a aria-expanded="false" href="/funcionarios" data-toggle="tab">Funcionarios</a></li>
    <li class=""><a aria-expanded="false" href="/salas" data-toggle="tab">Salas</a></li>
    <li class=""><a aria-expanded="false" href="/tiposdesalas" data-toggle="tab">Tipos de Salas</a></li>
    </ul>
	<table>
		<td width=505><h2>Registro de Estudiantes</h2></td>
	</table>
</p>
<h4>Información del Estudiante "{{$estudiante->nombres}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($estudiante))
            <tr height= 10>
              <td width=100>
                <h5><b>Carrera:</b></h5>
              </td>
              <td>{{$carrera->nombre}}</td>
            <tr>
              <td width=100><h5><b>RUT:</b></h5></td>
              <td>{{$estudiante->rut}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Nombres:</b></h5></td>
              <td>{{$estudiante->nombres}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Apellidos:</b></h5></td>
              <td>{{$estudiante->apellidos}}</td>
            </tr>
            <tr>
              <td width=100><h5><b>E-mail:</b></h5></td>
              <td>{{$estudiante->email}}</td>
            </tr>
          @else
          <p>
            No existe información de este Estudiante.
          </p>
          @endif
      </tbody>
  </table>
  <table>
    <td><a href="/estudiantes" class="btn btn-default btn-sm">Volver</a>
    {!! Html::link(route('estudiantes.edit', $estudiante->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
@stop
