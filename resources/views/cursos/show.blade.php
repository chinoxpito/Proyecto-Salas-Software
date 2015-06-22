@extends('cursos.plantilla')
@section('contenido')
<p>
  <ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class="active"><a aria-expanded="false" href="/asignaturas" data-toggle="tab">Asignaturas</a></li>
    <li class=""><a aria-expanded="false" href="/cursos" data-toggle="tab">Cursos</a></li>
    <li class=""><a aria-expanded="false" href="/horarios" data-toggle="tab">Horarios</a></li>
    <li class=""><a aria-expanded="false" href="/periodos" data-toggle="tab">Periodos</a></li>
    <li class=""><a aria-expanded="false" href="/asignaturascursadas" data-toggle="tab">Asignaturas Cursadas</a></li>
  </ul>
	<table>
	   <td width=505><h2>Registro de cursos</h2></td>
  </table>
</p>
<h4>Información del curso "{{$curso->asignatura->nombre}}" </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($curso))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$asignatura->nombre}}</td>
            <tr>
              <td width=250><h5><b>La seccion de este curso es la numero:</b></h5></td>
              <td>{{$curso->seccion }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>El profesor asignado es:</b></h5></td>
              <td>{{$docente->nombres}}</td>
          </tr>
          @else
          <p>
            No existe información de este curso.
          </p>
          @endif
      </tbody>
  </table>
  <table>
     <td><a href="/cursos" class="btn btn-default btn-sm">Volver</a>
          {!! Html::link(route('cursos.edit', $curso->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
@stop
