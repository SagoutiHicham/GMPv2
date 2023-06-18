<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Alternance
 * 
 * @property int $alternance_id
 * @property string $alternance_nom
 * @property Carbon $alternance_date_debut
 * @property Carbon $alternance_date_fin
 * @property string $alternance_detail
 * @property string $alternance_rue
 * @property int $alternance_code_postal
 * @property string $alternance_ville
 * @property string $alternance_email
 * @property bool $confirmed
 * @property int|null $fk_user_id
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Alternance extends Model
{
	protected $table = 'alternance';
	protected $primaryKey = 'alternance_id';
	public $timestamps = false;

	protected $casts = [
		'alternance_date_debut' => 'datetime',
		'alternance_date_fin' => 'datetime',
		'alternance_code_postal' => 'int',
		'confirmed' => 'bool',
		'fk_user_id' => 'int'
	];

	protected $fillable = [
		'alternance_nom',
		'alternance_date_debut',
		'alternance_date_fin',
		'alternance_detail',
		'alternance_rue',
		'alternance_code_postal',
		'alternance_ville',
		'alternance_email',
		'confirmed',
		'fk_user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'fk_user_id');
	}
}
