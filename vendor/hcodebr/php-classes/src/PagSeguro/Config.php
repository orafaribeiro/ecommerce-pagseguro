<?php

namespace Hcode\PagSeguro;

class Config {

	const SANDBOX = true;

	const SANDBOX_EMAIL = "anthonyribeiro1910@gmail.com";
	const PRODUCTION_EMAIL = "anthonyribeiro1910@gmail.com";

	const SANDBOX_TOKEN = "2FB54E71A05D4B37BA20617329C206F8";
	const PRODUCTION_TOKEN = "2FB54E71A05D4B37BA20617329C206F8";

	const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
	const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

	const SANDBOX_URL_JS = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";	
	const PRODUCTION_URL_JS = "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";	

	public static function getAuthentication():array
	{

		if (Config::SANDBOX === true)
		{

			return array(
				"email"=>Config::SANDBOX_EMAIL,
				"token"=>Config::SANDBOX_TOKEN
			);

		} else {

			return array(
				"email"=>Config::PRODUCTION_EMAIL,
				"token"=>Config::PRODUCTION_TOKEN
			);

		}

	}

	public static function getUrlSessions():string
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_SESSIONS : Config::PRODUCTION_SESSIONS;

	}

	public function getUrlJS()
	{

		return (Config::SANDBOX === true) ? Config::SANDBOX_URL_JS : Config::PRODUCTION_URL_JS;

	}

}

?>