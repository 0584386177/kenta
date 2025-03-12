<?php
session_start();
ob_start();
class DashboardController extends Controller

{
    public function index()
    {
        if (!isset($_SESSION['logged'])) {
            header("Location: /" . FOLDER_ROOT . "/LoginAdminController ");
            exit();
        } else {

            $this->view("admin/templates/header");
            $this->view("admin/templates/layout", [
                'nav' => 'navbarMenu',
                'sidebar' => "sidebar",
                'layout' => 'HomePage',


            ]);
            $this->view("admin/templates/footer");
        }
    }

    
}
