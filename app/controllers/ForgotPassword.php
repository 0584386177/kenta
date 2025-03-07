<?php

class ForgotPassword extends Controller{
    
    public function index(){
       $this->view("templates/header");
       $this->view("templates/navbar");
       $this->view("account/ForgotPassword");
       $this->view("templates/footer");
    }
}
?>