<?php
namespace ValidatorPizza\Validator;

use RuntimeException;
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
		try {
			$req = Client::get("{$this->url}/{$name}/{$value}");
			return $this->check($req);
		} catch (RuntimeException $e) {
			return false;
		}
	}

	public function check($request)
	{
		$body = json_decode($request->getResponse());
		switch ($body) {
            case $body->status == 400:
                return false;
            case !$body->mx:
                return false;
            case $body->disposable:
                return false;
            default:
                return true;
        }
	}
}