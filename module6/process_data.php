<?php
session_start();

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate form inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_picture = $_FILES['profile_picture'];

    if (empty($name) || empty($email) || empty($password) || empty($profile_picture)) {
        die('All fields are required');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format');
    }

    // Save profile picture to server
    $uploads_dir = 'uploads/';
    $unique_filename = uniqid() . '_' . $profile_picture['name'];
    $destination = $uploads_dir . $unique_filename;

    if (!move_uploaded_file($profile_picture['tmp_name'], $destination)) {
        die('Error uploading profile picture');
    }

    // Save user data to CSV file
    $csv_file = fopen('users.csv', 'a');
    fputcsv($csv_file, [$name, $email, $unique_filename]);
    fclose($csv_file);

    // Set session and cookie
    $_SESSION['name'] = $name;
    setcookie('name', $name, time() + (86400 * 30), '/'); // Cookie lasts for 30 days
}
?>

<!-- Redirect to a new page -->
<meta http-equiv="refresh" content="0; url=display_data.php">
