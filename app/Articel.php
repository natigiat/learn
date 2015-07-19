<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Articel extends Model {

	protected $fillable = [
		'title',
		'body',
		'publish_at',
		'user_id'

	];

    protected $dates = ['publish_at'];



	public function setPublishAtAttribute($date) 
	{
		$this->attributes['publish_at'] = \Carbon\Carbon::createFromFormat('Y-m-d' , $date);
	}


	public function user()
	{
		return $this->belongsTo('App\User');
	}

}


