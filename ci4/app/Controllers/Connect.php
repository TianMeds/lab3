<?php

namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Connect extends BaseController
{
    public function index()
    {
        $model = model(FormModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    	
    }
	
	public function view($slug = null)
    {
        $model = model(FormModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }

    public function connect()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['fullname' => 'Create a news item'])
                . view('pages/connect')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['fullname', 'email', 'services', 'messages']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'fullname' => 'required|max_length[255]|min_length[3]',
            'email'  => 'required|max_length[5000]|min_length[10]',
            'services'  => 'required|max_length[5000]|min_length[10]',
            'messages'  => 'required|max_length[5000]|min_length[10]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['fullname' => 'Create a news item'])
                . view('pages/connect')
                . view('templates/footer');
        }

        $model = model(FormModel::class);

        $model->save([
            'fullname' => $post['fullname'],
            'email'  => $post['email'],
            'services'  => $post['services'],
            'messages'  => $post['messages'],
        ]);

        return view('templates/header', ['fullname' => 'Create a news item'])
            . view('pages/connect')
            . view('templates/footer');
    }
}	