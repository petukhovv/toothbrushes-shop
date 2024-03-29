<?php

define("HOME_DIR", $_SERVER["DOCUMENT_ROOT"]);
define("SYS_DIR", HOME_DIR . "/../engine/system");
define("STORAGE_DIR", SYS_DIR . "/storage");
define("APP_DIR", HOME_DIR . "/../engine/application");
define("FRONT_CONTROLLERS_DIR", APP_DIR . "/front_controllers");
define("BACK_CONTROLLERS_DIR", APP_DIR . "/back_controllers");
define("TEMPLATES_DIR", APP_DIR . "/templates");

require_once APP_DIR . "/bootstrap.php";