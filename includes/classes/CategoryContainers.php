<?php 

class CategoryContainers {

    private $conn, $username;

    public function __construct($conn, $username)
    {
        $this->conn = $conn;
        $this->username = $username;
    }

}

?>