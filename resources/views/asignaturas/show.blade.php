@extends('asignaturas.plantilla')
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
	   <td width=505><h2>Registro de Asignaturas</h2></td>
	 </table>
</p>
<h4>Información de {{$asignatura->nombre}} </h4>
  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($asignatura))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$asignatura->nombre}}</td>
            <tr>
              <td width=250><h5><b>Pertenece al departamento:</b></h5></td>
              <td>{{$departamento->nombre }}</td>
            </tr>
            <tr>
              <td width=100><h5><b>Codigo Asignatura:</b></h5></td>
              <td>{{$asignatura->codigo}}</td>
          </tr>
          <tr>
              <td width=250><h5><b>Descripcion:</b></h5></td>
              <td>{{$asignatura->descripcion}}</td>
            </tr>
          @else
          <p>
            No existe información de esta asignatura.
          </p>
          @endif
      </tbody>
  </table>
  <table>
    <td><a href="/asignaturas" class="btn btn-default btn-sm">Volver</a>
            {!! Html::link(route('asignaturas.edit', $asignatura->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
@stop
