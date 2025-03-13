<?php
session_start();
ob_start();
class UsersAdminController extends Controller
{
    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'users/UsersAdmin',
        ]);
        $this->view("admin/templates/footer");
    }
}
