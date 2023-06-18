<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cour
 * 
 * @property int $cours_id
 * @property string $cours_nom
 * @property string $cours_pdf
 * @property int $fk_cours_matiere_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Matiere $matiere
 *
 * @package App\Models
 */
class Cour extends Model
{
	protected $table = 'cours';
	protected $primaryKey = 'cours_id';

	protected $casts = [
		'fk_cours_matiere_id' => 'int'
	];

	protected $fillable = [
		'cours_nom',
		'cours_pdf',
		'fk_cours_matiere_id'
	];

	public function matiere()
	{
		return $this->belongsTo(Matiere::class, 'fk_cours_matiere_id');
	}
}
