<!DOCTYPE html>
<html>
    <head>
        <title>Success - Fix Blog</title>
        <?php include_once('include/common.php'); ?>
    </head>

    <body>
        <?php include_once('include/header.php'); ?>
            <article>
                <div class="container">
                <br>
                <br>
                <br>
                <br>
                    <h1>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $name = filter_var($_POST['name']);
                            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                            $subject = filter_var($_POST['subject']);
                            $message = filter_var($_POST['message']);

                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                die('Invalid email address.');
                            }

                            $host = 'localhost';
                            $user = 'root';
                            $pass = '';
                            $dbname = 'assignment9';

                            $conn = mysqli_connect($host,$user,$pass,$dbname);
                            $sql = "INSERT INTO contact_us(name, email, subject, message) values('$name', '$email', '$subject', '$message')";
                            
                            if(mysqli_query($conn, $sql)){
                                $to = 'hafiz.ubikm@gmail.com';
                                $headers = "From: $email\r\nReply-To: $email\r\n";
                                $message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
                                mail($to, $subject, $message, $headers);

                                echo 'Your message has been sent.';
                            }
                        }
                        ?>
                    </h1>
                    
                </div>
            </article>
        <?php include_once('include/footer.php'); ?>
    </body>

</html>