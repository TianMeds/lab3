<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsModel extends Model
{
    protected $table = 'cbmedallada_news';

    protected $allowedFields = ['title', 'slug', 'body'];
	
    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

	
	
	
}