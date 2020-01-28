<?php
namespace Http;

use RuntimeException;

/**
 * http
 */
class Client extends HttpCurl
{
	protected $response;
	protected $error;
	protected $errno;

	public function getResponse()
	{
		return $this->response;
	}

	public function getError()
	{
		return $this->error;
	}

	public function getErrno()
	{
		return $this->errno;
	}

	public function init()
	{
		$this->curl = curl_init($this->url);
		$this->setOptionsCurl($this->options);
		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
	}

	public function get($url = null)
	{
		return $this->request('GET', $url);
	}

	public function post($url, array $data = [])
	{
		return $this->request('POST', $url, $data);
	}

	public function request($method, $url = null, array $data = [])
	{
		$this->setUrl( isset($url) ? $url : $this->url );
		$this->init();

		if($method === 'post' || $method === 'POST') {
			$this->setMethodPost($data);
		}

		return $this->exec()
			->getResponse();
	}

	public function exec()
	{
		$this->response = curl_exec($this->curl);
		$this->error = curl_error($this->curl);
		$this->errno = curl_errno($this->curl);

		if (is_resource($this->curl)) {
            curl_close($this->curl);
        }

        if (0 !== $this->errno) {
            throw new RuntimeException($error, $errno);
        }

        return $this;
	}

	protected function setOptionCurl(array $options)
	{
		foreach ($options as $key => $val) {
            curl_setopt($this->curl, $key, $val);
        }
	}

	protected function setMethodPost(array $data = [])
	{
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}

}