<?php

class HomePage extends Controller{
    private $categoriesProductModel;

    public function __construct(){
        $this->model("CategoriesProductModel");
        $this->categoriesProductModel = new CategoriesProductModel;
    }
    public function index(){
        $menu = $this->categoriesProductModel->getMenuStructure();
       
        
       $this->view("templates/header");
       $this->view("templates/navbar",[
        'menu' => $this->categoriesProductModel->getMenuStructure()
       ]);
       $this->view("Home");
       $this->view("templates/footer");
    }
}
?>