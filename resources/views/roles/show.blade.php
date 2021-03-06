@extends('roles.plantilla')
@section('contenido')
<p>
  <ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
    <li class=""><a aria-expanded="false" href="/asignaturas" data-toggle="tab">Asignaturas</a></li>
    <li class=""><a aria-expanded="false" href="/cursos" data-toggle="tab">Cursos</a></li>
    <li class=""><a aria-expanded="false" href="/horarios" data-toggle="tab">Horarios</a></li>
    <li class=""><a aria-expanded="false" href="/periodos" data-toggle="tab">Periodos</a></li>
    <li class="active"><a aria-expanded="false" href="/roles" data-toggle="tab">Roles</a></li>
    </ul>
	<table>
	   <td width=505><h2>Rol elegido: "{{$rol->nombre}}"</h2></td>
  </table>
</p>

  <table class="table table-striped table-hover ">
    <tbody>
          @if (!empty($rol))
            <tr height= 10>
              <td width=100>
                <h5><b>Nombre:</b></h5>
              </td>
              <td>{{$rol->nombre}}</td>
            <tr>
              <td width=250><h5><b>Descripcion:</b></h5></td>
              <td>{{$rol->descripcion }}</td>
            </tr>
          @else
          <p>
            No existe información de este rol.
          </p>
          @endif
      </tbody>
  </table>
  <table>
     <td><a href="/roles" class="btn btn-default btn-sm">Volver</a>
          {!! Html::link(route('roles.edit', $rol->id), 'Editar', array('class' => 'btn btn-warning btn-sm')) !!}</td>
  </table>
@stop
