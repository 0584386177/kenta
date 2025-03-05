<?php

define("domain", $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']);
define("APP_ROOT",$_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);