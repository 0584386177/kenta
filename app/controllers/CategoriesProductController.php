<?php
session_start();
ob_start();
class CategoriesProductController extends Controller
{
    public $CategoriesProductModel;
    public function __construct()
    {
        $this->model("CategoriesProductModel");
        $this->CategoriesProductModel = new CategoriesProductModel;
    }
    public function index()
    {
        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'products/CategoriesProduct',
            'categories' => $this->CategoriesProductModel->getAllCategoriesProduct()
        ]);
        $this->view("admin/templates/footer");
    }

    public function create()
    {
        try {
            $category_name = $_POST['create-categoryName'];
            $selected_category = $_POST['select-category'] ?? null;
            $categories = [
                "none" => NULL,
                "ao-khoac" => 1,
                "quan-dai" => 13,
                "quan-short" => 19,
                "so-mi" => 10,
                "phu-kien" => 25
            ];

            if (empty($category_name)) {
                throw new Exception("Tên danh mục không được để trống");
            }
            
            if (isset($category_name)) {
                $category_id = $categories[$selected_category] ?? null;
                $this->CategoriesProductModel->create($category_name, $category_id);
                header("Location: /kenta/CategoriesProductController");
                exit();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
