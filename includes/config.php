<?php

class config {
    private $config_array = array();    

    public function __construct() {
        if(!$config_array = $parse_ini_file("includes/config.ini", true)) {
            echo "Configuration error!\n");
            exit();
        }
        $this->config_array = $config_array;
    }

    public function get_all_mysql() {
        return $this->config_array['mysql'];
    }

    public function get_mysql_setting(string $setting) {
        if(!isset($this->config_array['mysql'][$setting]) {
            echo "Variable not set!\n";
            exit();
        }
        return $this->config_array['mysql'][$setting];
    }
}

?>
