<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        $this->view('admin/categories/create');
    }

    public function store()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:3', 'max:255']
        ]);

        if(! $validation){
            foreach($this->request()->errors() as $filed => $errors){
                $this->session()->set($filed, $errors);
            }

            $this->redirect('/admin/categories/create');
        }

        $this->db()->insert('categories', [
            'name' => $this->request()->input('name')
        ]);

        $this->redirect('/admin');
    }
}