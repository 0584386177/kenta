<?php

class ProductsAdminModel extends Model
{

    public function getProducts()
    {
        try {
            $sql = "SELECT * FROM product";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
