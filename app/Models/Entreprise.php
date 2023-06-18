<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Entreprise
 * 
 * @property int $entreprise_id
 * @property string $entreprise_nom
 * @property string $rue
 * @property int $code_postal
 * @property string $ville
 * @property string $email
 * @property int|null $fk_entreprise_user_id
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Entreprise extends Model
{
	protected $table = 'entreprise';
	protected $primaryKey = 'entreprise_id';
	public $timestamps = false;

	protected $casts = [
		'code_postal' => 'int',
		'fk_entreprise_user_id' => 'int'
	];

	protected $fillable = [
		'entreprise_nom',
		'rue',
		'code_postal',
		'ville',
		'email',
		'fk_entreprise_user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'fk_entreprise_user_id');
	}
}
