<?php
session_start();
ob_start();
require_once './app/helpers/Format.php';

class ProductsAdminController extends Controller
{

    public $ProductsAdminModel;
    public function __construct()
    {
        $this->model("ProductsAdminModel");
        $this->ProductsAdminModel = new ProductsAdminModel;
    }

    public function index()
    {
        $products = $this->ProductsAdminModel->getProducts();

        // Format giá tiền cho tất cả sản phẩm
        foreach ($products as &$product) {
            $product['regular_price'] = Format::formatCurrency($product['regular_price']);
            $product['sale_price'] = Format::formatCurrency($product['sale_price']);
        }

        $this->view("admin/templates/header");
        $this->view("admin/templates/layout", [
            'nav' => 'navbarMenu',
            'sidebar' => "sidebar",
            'layout' => 'products/ProductAllAdmin',
            'products' => $products
        ]);
        $this->view("admin/templates/footer");
    }
}
