<?php
class DashboardController extends Controller
{
    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'HomePage',
        ]);
        $this->view("admin/templates/footer");
    }
}
