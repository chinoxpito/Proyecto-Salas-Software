<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Curso extends Model {

	protected $table = 'cursos';
	protected $fillable = ['anio','semestre','seccion','docente_id','asignatura_id'];
	protected $guarded = ['id'];

public function docente()
{
        return $this->belongsTo('Docente');
}

public function asignatura()
{
        return $this->belongsTo('App\Asignatura');
}

}



