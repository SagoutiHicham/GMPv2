<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Projet
 * 
 * @property Carbon $projet_id
 * @property string $projet_nom
 * @property string $detail
 * @property int|null $fk_projet_user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Projet extends Model
{
	protected $table = 'projet';
	public $incrementing = false;

	protected $casts = [
		'projet_id' => 'datetime',
		'fk_projet_user_id' => 'int'
	];

	protected $fillable = [
		'projet_id',
		'projet_nom',
		'detail',
		'fk_projet_user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'fk_projet_user_id');
	}
}
