@extends('campus.plantilla')
@section('contenido')
<p>
	<ul class="nav nav-tabs">
		<li class=""><a aria-expanded="true" href="/admin/menu" data-toggle="tab">Principal</a></li>
		<li class=""><a aria-expanded="false" href="/campus" data-toggle="tab">Campus</a></li>
	  <li class=""><a aria-expanded="false" href="/facultades" data-toggle="tab">Facultades</a></li>
	  <li class="active"><a aria-expanded="false" href="/departamentos" data-toggle="tab">Departamentos</a></li>
	  <li class=""><a aria-expanded="false" href="/escuelas" data-toggle="tab">Escuelas</a></li>
	  <li class=""><a aria-expanded="false" href="/carreras" data-toggle="tab">Carreras</a></li>
	</ul>
	<table>
		<td width=505><h2>Registro de Departamentos</h2></td>
</p>
<h4>Nuevo Departamento</h4>
	<table class="table table-striped table-hover ">
  	<tbody>
			{!! Form::open(['route' => 'departamentos.store']) !!}
				<div class="form-group">
					{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre del Departamento']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('descripcion', null,['class'=>'form-control', 'placeholder'=>'Descripcion'])!!}
				</div>
				<div class="form-group">
					<p1>Facultad: </p1>{!! Form::select('facultad_id',$facultad)!!}
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
		<td><a href="/departamentos" class="btn btn-default btn-sm">Volver</a>
		<td><a href="/departamentos/create" class="btn btn-warning btn-sm">Agregar Departamento</a></td>
	</table>
@stop
