<?php

namespace Libriciel;

class PastellClient {

	private $login;
	private $password;

	public function __construct($login,$password) {
		$this->login = $login;
		$this->password = $password;
	}

	public function version(){
		return "Not implemented";
	}


}