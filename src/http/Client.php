<?php
namespace ValidatorPizza\Http;

use RuntimeException;
use ValidatorPizza\Http\Utils\Client as HttpClient;

/**
 * http
 */
class Client
{
	protected $http;

	public function __construct()
	{
		$this->http = new HttpClient();
	}

	public static function get($url, $params = [])
	{
		$self = new self();
		return $self->get($url, $params);
	}

	public static function post($url, $data)
	{
		$self = new self();
		return $self->post($url, $data);
	}

	public static function request($method, $url, array $data = [])
	{
		$self = new self();
		return $self->request($method, $url, $data);
	}
}