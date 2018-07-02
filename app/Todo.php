<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    /**
     * @var array
     */

    protected $fillable = [
      'name','email','message',
  ];

  public function users()
    {

    	$this->belongsTo('App\User');
    }
}
