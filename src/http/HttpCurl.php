<?php
namespace ValidatorPizza\Http;

/**
 * HttpCurl
 */
class HttpCurl
{
	protected $method;

	protected $url;

	protected $curl;

	protected $options = [];


	public function __construct(array $attributes = [])
	{
		$this->setUrl( isset($attributes['url']) ? $attributes['url'] : null )
			->setOptions( isset($attributes['options']) ? $attributes['options'] : [] )
			->setMethod( isset($attributes['method']) ? $attributes['method'] : null );
	}

	////////////////////////
	// setter
	////////////////////////
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

	public function setOptions(array $options)
	{
		$this->options = $options;
		return $this;
	}

	public function setMethod($method)
	{
		$this->method = $method;
		return $this;
	}

	///////////////////////////
	// gettter
	///////////////////////////
	public function getMethod()
	{
		return $this->method;
	}

	public function getOption()
	{
		return $this->options;
	}

	public function getUrl()
	{
		return $this->url;
	}
}