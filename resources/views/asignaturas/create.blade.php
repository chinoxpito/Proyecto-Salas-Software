@extends('asignaturas.plantilla')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
    <li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Inicio</a></li>
    <li class="active"><a aria-expanded="false" href="/asignaturas" data-toggle="tab">Asignaturas</a></li>
    <li class=""><a aria-expanded="false" href="/cursos" data-toggle="tab">Cursos</a></li>
    <li class=""><a aria-expanded="false" href="/horarios" data-toggle="tab">Horarios</a></li>
    <li class=""><a aria-expanded="false" href="/periodos" data-toggle="tab">Periodos</a></li>
  </ul>
	<table>
		<td width=505><h2>Agrerar Nueva Asignaturas</h2></td>
	</table>
</p>
<h4>Nueva Asignatura</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
			{!! Form::open(['route' => 'asignaturas.store']) !!}
				<div class="form-group">
					{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre de la asignatura']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('codigo', null,['class'=>'form-control', 'placeholder'=>'Codigo'])!!}
				</div>
				<div class="form-group">
					{!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
				</div>
				<div class="form-group">
					<p1>Departamento: </p1>{!! Form::select('departamento_id',$departamento)!!}
				</div>
				<div class="form-group">
					{!! Form::submit('Agregar', ["class" => "btn btn-success btn-block"]) !!}
				</div>
			{!! Form::close() !!}
      <p>
	    	@if(Session::has('message'))
          <div class="btn btn-success disabled{{ Session::get('class') }}">{{ Session::get('message')}}</div>
        @endif
      </p>
      <table>
		<td><a href="/asignaturas" class="btn btn-default btn-sm">Volver</a>
		<td><a href="/asignaturas/create" class="btn btn-warning btn-sm">Agregar Asignatura</a></td>
		
	</table>
    
@stop