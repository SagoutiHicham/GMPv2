<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Enseignant
 * 
 * @property int $enseignant_id
 * @property int $fk_enseignant_user_id
 * @property int $fk_enseignant_matiere_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Matiere $matiere
 * @property User $user
 * @property Collection|Agenda[] $agendas
 *
 * @package App\Models
 */
class Enseignant extends Model
{
	protected $table = 'enseignant';
	protected $primaryKey = 'enseignant_id';

	protected $casts = [
		'fk_enseignant_user_id' => 'int',
		'fk_enseignant_matiere_id' => 'int'
	];

	protected $fillable = [
		'fk_enseignant_user_id',
		'fk_enseignant_matiere_id'
	];

	public function matiere()
	{
		return $this->belongsTo(Matiere::class, 'fk_enseignant_matiere_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'fk_enseignant_user_id');
	}

	public function agendas()
	{
		return $this->hasMany(Agenda::class);
	}
}
