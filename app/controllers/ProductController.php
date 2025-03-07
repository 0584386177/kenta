<?php
class ProductController extends Controller{
    
    public function index(){
        $this->view("templates/header");
        $this->view("templates/navbar");
        $this->view("templates/breadcumb");
        $this->view("products/Product");
        $this->view("templates/footer");
    }

    

    
}