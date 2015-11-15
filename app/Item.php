<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'items';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['number_in_row', 'title', 'image', 'type', 'status'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	
	/**
	 * Scope: active ads
	 *
	 * @var collection
	 */
	public function scopeActive($query){	
		return $query->where('status', '<>', -1);
	}

}
