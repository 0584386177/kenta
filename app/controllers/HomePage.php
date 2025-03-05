<?php

class HomePage extends Controller{
    
    public function index(){
       $this->view("templates/header");
       $this->view("templates/navbar");
       $this->view("Home");
       $this->view("templates/footer");
    }
}
?>