
<?php
class DBConnection {
    private $servername = "localhost"; // Replace with your database server name or IP address
    private $username = "root"; // Replace with your database username
    private $password = ""; // Replace with your database password
    private $dbname = "event_management"; // Replace with your database name
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
