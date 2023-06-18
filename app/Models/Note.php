<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * 
 * @property int $note_id
 * @property int $note
 * @property int $fk_note_etudiant_id
 * @property int $fk_note_matiere_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Etudiant $etudiant
 * @property Matiere $matiere
 *
 * @package App\Models
 */
class Note extends Model
{
	protected $table = 'notes';
	protected $primaryKey = 'note_id';

	protected $casts = [
		'note' => 'int',
		'fk_note_etudiant_id' => 'int',
		'fk_note_matiere_id' => 'int'
	];

	protected $fillable = [
		'note',
		'fk_note_etudiant_id',
		'fk_note_matiere_id'
	];

	public function etudiant()
	{
		return $this->belongsTo(Etudiant::class, 'fk_note_etudiant_id');
	}

	public function matiere()
	{
		return $this->belongsTo(Matiere::class, 'fk_note_matiere_id');
	}
}
