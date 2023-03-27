<?php
class Database {
    private $host;
    private $user;
    private $password;
    private $dbname;
    public $conn;

    public function __construct() {
        $this->host = '127.0.0.1:8889';
        $this->user = 'root';
        $this->password = '';
        $this->dbname = 'module8';
    }

    public function connect() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function close() {
        mysqli_close($this->conn);
    }

    public function checkUserExist($email) {
        $this->connect();
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);
        $return = false;
        if (mysqli_num_rows($result) > 0) {
            $return = true;
        }
        $this->close();
        return $return;
    }

    public function registerUser($firstname, $lastname, $email, $password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname', '$lastname', '$email', '$hashed_password')";
        $this->connect();
        $return = false;
        if (mysqli_query($this->conn, $sql)) {
            $return = true;
        } else {
            $return = mysqli_error($this->conn);
        }

        $this->close();
        return $return;
    }

    public function getUserByEmail($email) {
        $this->connect();
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $this->close();
            return $user;
        } else {
            $this->close();
            return null;
        }
    }
}
