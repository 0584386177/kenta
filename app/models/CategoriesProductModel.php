<?php

class CategoriesProductModel extends Model
{
    public $table = 'categories';
    public function getAllCategoriesProduct()
    {
        try {
            // Make sure to select all needed columns
            $sql = "SELECT * FROM " . $this->table . " WHERE is_active = 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getMenuStructure()
    {
        $categories = $this->getAllCategoriesProduct();
        $menu = [];

        // First, identify all parent categories (NULL parent_id)
        foreach ($categories as $category) {
            if ($category['parent_id'] === NULL) {
                // Chỉ số menu đầu tiên là 1 sẽ lưu id và name của category
                $menu[$category['category_id']] = [
                    'category_id' => $category['category_id'],
                    'category_name' => $category['category_name'],
                    'children' => []
                ];
            }
        }

        // Then, add all child categories to their respective parents
        foreach ($categories as $category) {
            if ($category['parent_id'] !== NULL) {
                // Check if the parent exists in our menu array
                if (isset($menu[$category['parent_id']])) {
                    $menu[$category['parent_id']]['children'][] = [
                        'category_id' => $category['category_id'],
                        'category_name' => $category['category_name']
                    ];
                }
            }
        }

        return $menu;
    }

    // CREATE 
    public function create($category_name,$parent_id)
    {
        if(!$this->conn){
           throw new Exception("Không có kết nối database") ;
        }

        $this->conn->beginTransaction();
        try {
            $sql = "INSERT INTO " . $this->table . "(category_name,parent_id,is_active) VALUES (:category_name,:parent_id,1)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":category_name", $category_name,PDO::PARAM_STR);
            
                $stmt->bindParam(":parent_id", $parent_id);
            // $stmt->bindParam(":parent_id",$parent_id);
            $result = $stmt->execute();
            if($result){
                $this->conn->commit();
                return true;
            }

            $this->conn->rollback();
            return false;
        } catch (PDOException $e) {
            if ($this->conn) {
                $this->conn->rollBack();
            }
            error_log("Database Error: " . $e->getMessage());
            return false;
        }
    }
}
