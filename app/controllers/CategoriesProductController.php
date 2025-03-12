<?php

class CategoriesProductController extends Controller
{
    public $CategoriesProductModel;
    public function __construct(){
        $this->model("CategoriesProductModel");
        $this->CategoriesProductModel = new CategoriesProductModel;

    }
    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'products/CategoriesProduct',
            'categories' => $this->CategoriesProductModel->getAllCategoriesProduct()
        ]);
        $this->view("admin/templates/footer");
    }
}
