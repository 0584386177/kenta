<?php
class ProductsAdminController extends Controller
{
    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'products/ProductAllAdmin',
        ]);
        $this->view("admin/templates/footer");
    }
}
