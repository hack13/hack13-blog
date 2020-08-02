<?php namespace App\Controllers;

use App\Models\PagesModel;
use CodeIgniter\Controller;

class Pages extends BaseController
{

    public function view($slug = null)
    {
        helper('html');
		$model = new PagesModel();
		
		if (empty($slug))
		{
			$data['page'] = $model->getPage('home'); 
		}else{
			$data['page'] = $model->getPage($slug);
		}

		if (empty($data['page']))
		{
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the page: '. $slug);
		}

		$data['data'] = $data['page']['name'];
		$viewtype = $data['page']['contain'];

		echo view('common/header', $data);
		if ($viewtype == 1) {
			echo view('pages/view1', $data);
		}else{
			echo view('pages/view2', $data);
		}
        echo view('common/footer', $data);
    }

}
