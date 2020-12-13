<?php

namespace Bloom\Controllers;

class Welcome extends \Bloom\Middleware\Controller{
	public function index(){
		return $this -> new_template() -> make("welcome");
	}
}