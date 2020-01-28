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
		return $this->validate('email', $email);
	}

	public function domain($domain)
	{
		return $this->validate('domain', $domain);
	}

	public function validate($name, $value)
	{
		$req = Client::get("{$this->url}/{$name}/{$domain}");

		return $req;
	}
}