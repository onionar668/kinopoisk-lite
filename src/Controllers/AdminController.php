<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;
use App\Services\CategoryService;

class AdminController extends Controller
{

    public function index()
    {
        $categoryService = new CategoryService($this->db());
        $categories = $categoryService->getAllCategory();
        $this->view('admin/index');
    }
}