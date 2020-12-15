<?php

namespace Bloom\Controllers;

class Index extends \Bloom\Middleware\Controller{
	public function home(){
		$local_people = @json_decode(file_get_contents(FCONF["local_net"]["output_file"]), true);
		return $this -> new_template() -> make("home", compact('local_people'));
	}
}