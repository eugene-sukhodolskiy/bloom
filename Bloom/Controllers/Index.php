<?php

namespace Bloom\Controllers;

class Index extends \Bloom\Middleware\Controller{
	public function home(){
		$local_people = file_get_contents(FCONF["local_net"]["output_file"]);
		dd($local_people);
		return $this -> new_template() -> make("home", compact('local_people'));
	}
}