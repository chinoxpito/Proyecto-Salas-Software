<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model {

	protected $table = 'estudiantes';
	protected $fillable = ['nombres','apellidos','rut','email','carrera_id'];
	protected $guarded = ['id'];

}
