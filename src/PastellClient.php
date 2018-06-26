<?php

namespace Libriciel;

class PastellClient {

	private $pastell_url;
	private $login;
	private $password;

	public function __construct($pastell_url,$login,$password) {
		$this->pastell_url = $pastell_url;
		$this->login = $login;
		$this->password = $password;
	}

	/**
	 * @return string
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function version(){
		//TODO gérer les logs en PSR3

		// TODO injection de la dépendance
		$client = new \GuzzleHttp\Client();

		// TODO gérer les exceptions, le timeout
		$res = $client->request(
			'GET',
			$this->pastell_url."/api/v2/Version", //TODO constante magique
			[
				'auth' => [
					$this->login,
					$this->password
				]
			]
		);

		// TODO gérer plus de retour
		return $res->getBody()->getContents();
	}


}