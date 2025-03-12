<?php

define("domain", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://localhost");
// define("APP_ROOT",$_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
define("FOLDER_ROOT",explode("/",trim($_SERVER['SCRIPT_NAME'],'/'))[0]);