<?php

namespace App\Models;

use App\Http\Traits\TasksTrait;
use App\Http\Traits\TimestampTrait;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
		use TimestampTrait;
		use TasksTrait;

			public function getDates() {
		return ['cteated_at', 'updated_at','due_date'];
	}
    //Define the table

    protected $table = 'tasks';
    
}
