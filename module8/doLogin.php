<?php
require_once('db.php');
class LoginForm {
    private $email;
    private $password;
    private $db;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
        $this->db = new Database();
    }

    public function login() {
        // Check if email and password are filled
        if (empty($this->email) || empty($this->password)) {
            return "Both fields are required.";
        } else {

            // Get the user from the database by email
            $user = $this->db->getUserByEmail($this->email);

            // Check if user exists
            if ($user) {
                // Verify the password
                if (password_verify($this->password, $user['password'])) {
                    // Login successful
                    session_start();
                    $_SESSION['user'] = $user;
                    return true;
                } else {
                    return "Invalid email or password.";
                }
            } else {
                return "Invalid email or password.";
            }
        }
    }
}

// Usage example
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginForm = new LoginForm($email, $password);
    $result = $loginForm->login();

    if(true === $result){
        session_start();
        header('Location: dashboard.php');
        exit();
    }

    session_start();
    $_SESSION['message'] = $result;
    header('Location: login.php');
    exit();
}
