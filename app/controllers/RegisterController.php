<?php

class RegisterController extends Controller{
    
    public function index(){
       $this->view("templates/header");
       $this->view("templates/navbar");
       $this->view("account/Register");
       $this->view("templates/footer");
    }
}
?>