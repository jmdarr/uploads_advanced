<?php

class mysql_handler {
    require_once("includes/config.php");
    private $config = new config();

    private string $db_host;
    private string $db_user;
    private string $db_pass;
    private string $db_name;
    private string $db_port;

    public function __construct() {
        $this->db_host = $this->config->get_mysql_setting("db_host");
        $this->db_user = $this->config->get_mysql_setting("db_user");
        $this->db_pass = $this->config->get_mysql_setting("db_pass");
        $this->db_name = $this->config->get_mysql_setting("db_name");
        $this->db_port = $this->config->get_mysql_setting("db_port");
    }

    public function query(string $query) {
        $session = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name, $this->dbPort);
        if($session->connect_error) {
            printf("Connect Error (%d): %s\n", $session->connect_errorno, $session->connect_error);
            exit();
        }
        if(!$session->ping()) {
            printf("Connect Error (%d): %s\n", $session->errorno, $session->error);
            exit();
        }

        $return_array = array();
        if(!$result_obj = $session->query($query)) {
            printf("Query Error (%d): %s\n", $session->errorno, $session->error);
            exit();
        }
        else {
            while($row = $result_obj->fetch_assoc()) {
                array_push($return_array, $row);
            }
        }
        $result_obj->free();
        $session->close();
        return $return_array;
    }
}

?>
