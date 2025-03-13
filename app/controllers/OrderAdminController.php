<?php
session_start();
ob_start();
class OrderAdminController extends Controller
{
    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'products/OrderAdmin',
        ]);
        $this->view("admin/templates/footer");
    }
}
