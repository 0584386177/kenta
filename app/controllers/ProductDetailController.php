<?php
class ProductDetailController extends Controller{
    
    public function index(){
        $this->view("templates/header");
        $this->view("templates/navbar");
        $this->view("templates/breadcumb");
        $this->view("products/ProductDetail");
        $this->view("templates/footer");
    }

}