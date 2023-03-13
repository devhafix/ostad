<!DOCTYPE html>
<html>
  <head>
    <title>User Input Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="p-4">
    <form method="post" action="process_data.php" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <br>
      <br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <br>
      <label for="profile_picture">Profile Picture:</label>
      <input type="file" id="profile_picture" name="profile_picture" required>
      <br>
      <br>
      <input type="submit" value="Submit">
  </form>

     </body>
</html>
