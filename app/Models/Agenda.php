<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Agenda
 * 
 * @property int $agenda
 * @property Carbon $date_agenda
 * @property int|null $enseignant_id
 * @property int|null $fk_etudiant_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Enseignant|null $enseignant
 * @property Etudiant|null $etudiant
 *
 * @package App\Models
 */
class Agenda extends Model
{
	protected $table = 'agenda';
	protected $primaryKey = 'agenda';

	protected $casts = [
		'date_agenda' => 'datetime',
		'enseignant_id' => 'int',
		'fk_etudiant_id' => 'int'
	];

	protected $fillable = [
		'date_agenda',
		'enseignant_id',
		'fk_etudiant_id'
	];

	public function enseignant()
	{
		return $this->belongsTo(Enseignant::class);
	}

	public function etudiant()
	{
		return $this->belongsTo(Etudiant::class, 'fk_etudiant_id');
	}
}
