<?php

namespace Api\Entities;

use Illuminate\Database\Eloquent\Model as IlluminateModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entity extends IlluminateModel
{
	use SoftDeletes;
}