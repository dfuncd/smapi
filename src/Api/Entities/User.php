<?php

namespace Api\Entities;

class User extends Entity
{
	public function user_group()
	{
		return $this->belongsTo('Api\Entities\UserGroup');
	}
}