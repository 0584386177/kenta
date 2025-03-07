<?php

class App
{
    public  $controller = "HomePage";
    public $action = "index";
    public $params = [];
    public function __construct()
    // Array ( [0] => Controller [1] => Action [2] => 123 )
    {
        $array = $this->UrlProcess();

        if ($array === null) {
            $array = [$this->controller];
        }

        // Xử lý controller
        if ($array != NULL) {
            if (file_exists("./app/controllers/" . $this->controller . ".php")) {
                $this->controller = $array[0];
                unset($array[0]);
            }
        }
        require_once "./app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;


        //Xử lý action
        if (isset($array[1])) {
            if (method_exists($this->controller, $array[1])) {
                $this->action = $array[1];
                unset($array[1]);
            }
        }

        // Xử lý params

        $this->params = $array ? array_values($array) : [];
        $this->params = $array ? array_values($array) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }




    public function UrlProcess()
    {
        // Controller/Action/123
        if (isset($_GET['url'])) {
            return explode("/", filter_var(trim($_GET['url'], "/")));
        }
    }
}
