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
  <h4>Actualizar datos de la Asignatura "{{$asignatura->nombre}}"</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
    	{!! Form::model($asignatura, ['route' => ['asignaturas.update', $asignatura->id], 'method' => 'patch']) !!}
			<div class="form-group">
				{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre de la asignatura']) !!}
			</div>
			<div class="form-group">
				{!! Form::text('codigo', null,['class'=>'form-control', 'placeholder'=>'Codigo de asignatura'])!!}
			</div>
			<div class="form-group">
				{!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
			</div>
			<div class="form-group">
				<p1>Departamento: </p1>{!! Form::select('departamento_id',$departamentos)!!}
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
		<a href="/asignaturas/create" class="btn btn-warning btn-sm">Agregar asignatura</a></td>
	</table>
@stop
