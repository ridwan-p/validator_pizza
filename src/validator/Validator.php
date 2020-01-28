<?php
namespace ValidatorPizza\Validator;

use ValidatorPizza\Http\Client;

/**
 * validator
 */
class Validator
{
	protected $url = 'https://www.validator.pizza';

	public function email($email)
	{
		$req = Client::get("{$this->url}/email/{$email}");

		return $req;
	}

	public function domain($domain)
	{
		$req = Client::get("{$this->url}/domain/{$domain}");

		return $req;
	}
}