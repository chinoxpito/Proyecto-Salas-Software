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
		<td width=505><h2>Registro de Cursos</h2></td>
	</table>
</p>
<h4>Nuevo curso</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
		{!! Form::open(['route' => 'cursos.store']) !!}
				
		<div class="form-group">
			{!! Form::text('semestre', null, ['class' => 'form-control', 'placeholder'=>'Semestre al que pertenece']) !!}
		</div>
		<div class="form-group">
			{!! Form::text('anio', null,['class'=>'form-control', 'placeholder'=>'Año academico'])!!}
		</div>
		<div class="form-group">
			{!! Form::text('seccion', null,['class'=>'form-control', 'placeholder'=>'Seccion'])!!}
		</div>
		<div class="form-group">
			<p1>Asignatura: </p1>{!! Form::select('asignatura_id',$asignatura)!!}
		</div>
		<div class="form-group">
			<p1>Docente: </p1>{!! Form::select('docente_id',$docente)!!}
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
		<td><a href="/cursos" class="btn btn-default btn-sm">Volver</a>
		<td><a href="/cursos/create" class="btn btn-warning btn-sm">Agregar curso</a></td>
	</table>
@stop
