@extends('periodos.plantilla')
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
    <td width=505>
      <h2>PERIODOS</h2>
    </td>
    
  </table>
</p>
<h4>Listado de periodos</h4>
<table class="table table-striped table-hover ">
  <tbody>
    @foreach($periodos as $periodo)
    <tr>
      <td width=450>{{ $periodo->bloque }}</td>
      <td>
        {!! Html::link(route('periodos.show', $periodo->id), 'Detalles', array('class' => 'label label-info')) !!}
        {!! Html::link(route('periodos.edit', $periodo->id), 'Editar', array('class' => 'label label-success')) !!}
        <td>
          {!! Form::open(array('route' => array('periodos.destroy', $periodo->id), 'method' => 'DELETE')) !!}
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
      <a href="/periodos/create" class="btn btn-warning btn-sm">Agregar periodos</a>
    </td>
  <td width= 505><a href="/admin/menu" class="btn btn-danger btn-xs">Cerrar</a></td>
    <div class="col-md-12">
</table>
@stop
