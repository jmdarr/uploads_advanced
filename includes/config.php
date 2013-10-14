<?php

class config {
    private $config_array = array();    

    public function __construct() {
        if(!$config_array = parse_ini_file("includes/config.ini", true)) {
            echo "Configuration error!\n";
            exit();
        }
        $this->config_array = $config_array;
    }

    public function get_all($var) {
        if(!isset($this->config_array[$var])) {
            echo "Config variable [\$var -> $var] not set!\n";
            exit();
        }
        return $this->config_array[$var];
    }

    public function get_mysql_setting($var) {
        if(!isset($this->config_array['mysql'][$var])) {
            echo "MySQL config variable [\$var -> $var] not set!\n";
            exit();
        }
        return $this->config_array['mysql'][$setting];
    }

    public function get_template_setting($var) {
        if(!isset($this->config_array['template'][$var])) {
            echo "Template config variable [$\var -> $var] not set!\n";
            exit();
        }
        return $this->config_array['template'][$var];
    }
}

?>
