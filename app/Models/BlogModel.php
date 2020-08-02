<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Services;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';

    public function getBlog($slug = false)
    {
        if ($slug === false)
        {
            return $this->orderBy('id', 'DESC')
                        ->findAll();
        }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
    }

    public function getBlogs($limit = false, $offset = 0)
    {
        return $this->orderBy('id', 'DESC')
                    ->findAll($limit, $offset);
    }

}