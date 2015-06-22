<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HorariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("horarios.index")->with('horarios', \App\Horario::paginate(5)->setPath('horario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$sala = \App\Sala::lists('nombre','id');
		$periodo = \App\Periodo::lists('bloque','id');
		$curso = \App\Curso::lists('seccion','id');
		return view('horarios.create')->with('sala',$sala)->with('periodo',$periodo)->with('curso',$curso);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$horarios = new \App\Horario;

		$horarios->fecha = \Request::input('fecha');
		$horarios->sala_id = \Request::input('sala_id');
		$horarios->periodo_id = \Request::input('periodo_id');
		$horarios->curso_id = \Request::input('curso_id');


		$horarios->save();

		return redirect()->route('horarios.index')->with('message', 'horario Agregado');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$horarios = \App\Horario::find($id);
		$sala = \App\Sala::find($horarios->sala_id);
		$periodo = \App\Sala::find($horarios->periodo_id);
		$curso = \App\Sala::find($horarios->curso_id);
		return view('horarios.show')->with('horario',$horarios)->with('sala',$sala)->with('periodo',$periodo)->with('curso',$curso);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sala = \App\Sala::lists('nombre','id');
		$periodo = \App\Periodo::lists('bloque','id');
		$curso = \App\Curso::lists('seccion','id');
		return view('horarios.edit')->with('horario', \App\Horario::find($id))->with('sala',$sala)->with('periodo',$periodo)->with('curso',$curso);;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$horarios = \App\Horario::find($id);

		$horarios->fecha = \Request::input('fecha');
		$horarios->sala_id = \Request::input('sala_id');
		$horarios->periodo_id = \Request::input('periodo_id');
		$horarios->curso_id = \Request::input('curso_id');

		$horarios->save();
		return redirect()->route('horarios.index', ['horario' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$horario = \App\Horario::find($id);

		$horario->delete();

		return redirect()->route('horarios.index')->with('message', 'Horario eliminado con éxito');
	}

}

