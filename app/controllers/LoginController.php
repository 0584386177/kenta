<?php

class LoginController extends Controller{
    
    public function index(){
       $this->view("templates/header");
       $this->view("templates/navbar");
       $this->view("account/Login");
       $this->view("templates/footer");
    }
}
?>