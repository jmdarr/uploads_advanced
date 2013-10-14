<?php

class user {

    # $_SESSION vars:
    #   logged_in : whether the user is logged in or not.
    #       default: false
    #       expected: Boolean
    #   user_name : client username
    #       default: ""
    #       expected: Integer

    private $mysql_handler;
    private $logged_in = false;

    public function __construct() {
        if(!isset($_SESSION['logged_in'])) { $_SESSION['logged_in'] = false; }
        if(!isset($_SESSION['user_name'])) { $_SESSION['user_name'] = ""; }
    }

    public function set_mysql_handler($handler) {
        $this->mysql_handler = $handler;
    }

    public function isLoggedIn() {
        return $_SESSION['logged_in'];
    }

    public function setLoggedIn(boolean $logged_in) {
        $_SESSION['logged_in'] = $logged_in;
    }

    /*public function logIn(string $username, string $passhash) {
        $query = "select * from  
    }*/
}

?>
