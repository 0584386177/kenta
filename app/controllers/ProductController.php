<?php
class ProductController extends Controller
{
    public $CategoriesProductModel;
    public function __construct()
    {
        $this->model("CategoriesProductModel");
        $this->CategoriesProductModel = new CategoriesProductModel;
    }


    public function index()
    {
        $this->view("templates/header");
        $this->view("templates/navbar",
    [
        "menu" => $this->CategoriesProductModel->getMenuStructure(),
    ]);
        $this->view("templates/breadcumb");
        $this->view("products/Product");
        $this->view("templates/footer");
    }
}
