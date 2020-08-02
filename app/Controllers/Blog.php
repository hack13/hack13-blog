<?php namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;
use CodeIgniter\Services;

class Blog extends Controller
{
    public function index()
    {
        helper('html');
        $model = new BlogModel();

        $data = [
            'blog'  => $model->orderBy('id', 'DESC')->paginate(5),
            'pager' => $model->pager,
            'title' => 'Blog',
        ];

        echo view('common/header', $data);
        echo view('blog/overview', $data);
        echo view('common/footer', $data);

    }

    public function view($slug = null)
    {
        helper('html');
        $model = new BlogModel();

        $data['blog'] = $model->getBlog($slug);

        if (empty($data['blog']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the blog post: '. $slug);
        }

        $data['data'] = $data['blog']['title'];

        echo view('common/header', $data);
        echo view('blog/view', $data);
        echo view('common/footer', $data);
    }
}