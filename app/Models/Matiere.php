<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Matiere
 * 
 * @property int $matiere_id
 * @property string $matiere_nom
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Cour[] $cours
 * @property Collection|Enseignant[] $enseignants
 * @property Collection|Note[] $notes
 *
 * @package App\Models
 */
class Matiere extends Model
{
	protected $table = 'matiere';
	protected $primaryKey = 'matiere_id';

	protected $fillable = [
		'matiere_nom'
	];

	public function cours()
	{
		return $this->hasMany(Cour::class, 'fk_cours_matiere_id');
	}

	public function enseignants()
	{
		return $this->hasMany(Enseignant::class, 'fk_enseignant_matiere_id');
	}

	public function notes()
	{
		return $this->hasMany(Note::class, 'fk_note_matiere_id');
	}
}
