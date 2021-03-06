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
    <td width=505>
      <h2>Roles</h2>
    </td>
    
  </table>
</p>
<h4>Listado de roles</h4>
<table class="table table-striped table-hover ">
  <tbody>
    @foreach($roles as $rol)
    <tr>
      <td width=450>{{ $rol->nombre }}</td>
      <td>
        {!! Html::link(route('roles.show', $rol->id), 'Detalles', array('class' => 'label label-info')) !!}
        {!! Html::link(route('roles.edit', $rol->id), 'Editar', array('class' => 'label label-success')) !!}
        <td>
          {!! Form::open(array('route' => array('roles.destroy', $rol->id), 'method' => 'DELETE')) !!}
            <button class="label label-danger">Eliminar</button>
          {!! Form::close() !!}
        </td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<p>
  @if(Session::has('message'))
    <div class="btn btn-info disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</p>
<table>
  <td>
      <a href="/roles/create" class="btn btn-warning btn-sm">Agregar Roles</a>
    </td>
  <td width= 505><a href="/admin/menu" class="btn btn-danger btn-xs">Cerrar</a></td>
    <div class="col-md-12">
</table>
@stop
