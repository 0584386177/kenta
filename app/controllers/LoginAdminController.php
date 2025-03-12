<?php
session_start();
ob_start();
class LoginAdminController extends Controller
{
    public $UsersModel;

    public function __construct()
    {
        $this->model("UsersModel");
        $this->UsersModel = new UsersModel;
    }
    public function index()
    {
        $error = [];
        if (isset($_POST['submit-admin'])) {
            $username = $_POST['username-admin'];
            $password = $_POST['password-admin'];
            $user = $this->UsersModel->checkUserAdmin($username);
            
            if ($user) {
                if (password_verify($password, $user['password']) && $user['role_id'] == 1 && $username == $user['username']) {
                    foreach (['id', 'fullname', 'username', 'email', 'image'] as $key) {
                        //tạo session cho admin 
                        $_SESSION["admin_$key"] = $user[$key] ?? null;
                    }
                    $_SESSION['logged'] = true;
                    session_write_close();
                    header("Location: /" . FOLDER_ROOT . "/DashboardController");
                    exit();
                } else {
                    $error['checkAuth'] = 'Tên tài khoản hoặc mật khẩu không chính xác';
                }
            } else {
                $error['checkAuth'] = 'Tài khoản không tồn tại';
            }
        }

        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'layout' => 'account/LoginAdmin',
            'error' => $error
        ]);
        $this->view("admin/templates/footer");
    }

    public function logout(){
        if(isset($_SESSION)){
            session_destroy();
            header("Location: /" . FOLDER_ROOT . "/LoginAdminController");
            exit();
        }
    }
}
