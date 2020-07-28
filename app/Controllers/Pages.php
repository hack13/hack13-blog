<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		helper('html');
		echo view('common/header');
		echo view('home');
		echo view('common/footer');
	}

	public function view($slug = null)
	{
		helper('html');
		
		if (empty($slug)) {
			$page = "home";
		} else {
			$page = $slug;
		}

		echo view('common/header');
		echo view('pages/'.$page);
		echo view('common/footer');
	}

}
