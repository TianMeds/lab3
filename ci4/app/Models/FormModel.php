<?php

namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Exceptions\PageNotFoundException;

class FormModel extends Model
{
    protected $table = 'messages';

    protected $allowedFields = ['fullname', 'email', 'services', 'messages'];


    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}