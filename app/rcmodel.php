<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rcmodel extends Model
{
   protected $table = 'rctable';

}

class rcusers extends Model {
	protected $table = 'users';
}
