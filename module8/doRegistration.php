<?php
require_once 'db.php';
class UserRegistration {
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $confirmPassword;
    private $db;
  
    public function __construct($firstname, $lastname, $email, $password, $confirmPassword) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
        $this->db = new Database();
    }
  
    public function validateUser() {
        // Check if all fields are filled
        if (empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->password) || empty($this->confirmPassword)) {
            return "All fields are required.";
        }
        // Check if email is valid
        elseif (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }
        // Check if password and confirm password match
        elseif ($this->password != $this->confirmPassword) {
            return "Password and Confirm Password do not match.";
        }
        else {
            // Check if user already exists
            if ($this->db->checkUserExist($this->email)) {
                return "User already exists.";
            }
        }
        return true;
    }

    public function registerUser() {
        $return = $this->validateUser();
        if(true === $return){
            $return = $this->db->registerUser($this->firstname, $this->lastname, $this->email, $this->password);
            if (true === $return) {
                $return = 'Registration successful';
            }
        }
        return $return;
    }
}
  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new UserRegistration($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['confirm_password']);
    session_start();
    $_SESSION['message'] = $user->registerUser();
    header('Location: registration.php');
    exit();
}
