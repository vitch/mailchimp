<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Demo_Mailchimp extends Controller_Demo_OAuth2 {

	protected $api_endpoint;

	public function before()
	{
		parent::before();

		$this->api_endpoint = $this->session->get($this->key('api_endpoint'));
	}

	public function demo_metadata()
	{
		$meta = $this->provider->metadata($this->token);

		$this->session->set($this->key('api_endpoint'), $meta->api_endpoint);

		$this->content = Debug::vars($meta);
	}

	public function demo_logout()
	{
		if (Arr::get($_GET, 'confirm'))
		{
			$this->session->delete($this->key('api_endpoint'));
		}

		return parent::demo_logout();
	}

}
