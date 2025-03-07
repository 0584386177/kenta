<?php
class ProductAllController extends Controller{
    
    public function index(){
        $this->view("templates/header");
        $this->view("templates/navbar");
        $this->view("products/ProductAll");
        $this->view("templates/footer");
    }


}