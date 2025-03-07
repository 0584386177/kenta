<?php

class CategoriesProductController extends Controller
{

    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'products/CategoriesProduct',
        ]);
        $this->view("admin/templates/footer");
    }
}
