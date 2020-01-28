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
		return self::request("GET", $url, $params);
	}

	public static function post($url, $data)
	{
		return self::request("POST", $url, $data);
	}

	public static function request($method, $url, array $data = [])
	{
		$self = new self();
		return $self->send($method, $url, $data);
	}

	public function send($method, $url, array $data = [])
	{
		return $this->http->request($method, $url, $data);
	}
}