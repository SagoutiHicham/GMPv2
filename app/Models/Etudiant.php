<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Etudiant
 * 
 * @property int $etudiant_id
 * @property int|null $fk_etudiant_user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Collection|Agenda[] $agendas
 * @property Collection|Note[] $notes
 *
 * @package App\Models
 */
class Etudiant extends Model
{
	protected $table = 'etudiant';
	protected $primaryKey = 'etudiant_id';

	protected $casts = [
		'fk_etudiant_user_id' => 'int'
	];

	protected $fillable = [
		'fk_etudiant_user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'fk_etudiant_user_id');
	}

	public function agendas()
	{
		return $this->hasMany(Agenda::class, 'fk_etudiant_id');
	}

	public function notes()
	{
		return $this->hasMany(Note::class, 'fk_note_etudiant_id');
	}
}
