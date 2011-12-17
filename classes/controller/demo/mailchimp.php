<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Demo_Mailchimp extends Controller_Demo_OAuth2 {

	public function demo_metadata()
	{
		$meta = $this->provider->metadata($this->token);

		$this->content = Debug::vars($meta);
	}

}
