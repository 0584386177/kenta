<?php

class Controller
{

    public function model($model)
    {
        require_once "./app/models/" . $model . ".php";
        return new $model;
    }
    public function view($view, $data = [])
    {
        extract($data); // Giúp tạo biến từ mảng $data

        require_once "./app/views/" . $view . ".php";
    }
}
