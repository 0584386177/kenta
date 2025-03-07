<?php
class LoginAdminController   extends Controller
{
    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'layout' => 'account/LoginAdmin',
        ]);
        $this->view("admin/templates/footer");
    }
}
