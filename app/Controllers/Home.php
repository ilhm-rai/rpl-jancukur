<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function show()
	{
		$data['title'] = 'Home';

		echo view('templates/_header', $data);
		echo view('home');
		echo view('templates/_footer');
	}
}
