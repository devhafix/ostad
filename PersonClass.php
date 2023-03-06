<?php

class Person {
  private $name;
  private $email;

  public function setName($name) {
    $this->name = $name;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getName() {
    return $this->name;
  }

  public function getEmail() {
    return $this->email;
  }
}

$person = new Person();
$person->setName('John Doe');
$person->setEmail('johndoe@example.com');

echo 'Name: ' . $person->getName() . '<br>';
echo 'Email: ' . $person->getEmail() . '<br>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve the user's name and email from the form
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Create a new instance of the Person class
  $person = new Person();

  // Set the name and email properties based on the form data
  $person->setName($name);
  $person->setEmail($email);

  // Display the name and email properties on the webpage
  echo 'Name: ' . $person->getName() . '<br>';
  echo 'Email: ' . $person->getEmail() . '<br>';
}





