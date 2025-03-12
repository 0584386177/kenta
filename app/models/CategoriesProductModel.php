<?php

class CategoriesProductModel extends Model{

    public function getAllCategoriesProduct(){
       try{
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
       }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
       }
    }
    public function getMenuStructure(){
        $categories = $this->getAllCategoriesProduct();
        $menu = [];
        foreach($categories as $category){
            if($category['parent_id'] === NULL){
                $menu[$category['category_id']] = [
                    'category_id' => $category['category_id'],
                    'name' => $category['category_name'],
                    'children' => []
                ];
            }
        }
        return $menu;
    }
}
