<?php

namespace Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Api\Entities\User;

class Platform
{
	protected $user;

	public function __construct()
	{
		$this->user = new User;	
	}

	public function getIndex()
	{
		return new JsonResponse($this->user->with('user_group')->get());
	}

}