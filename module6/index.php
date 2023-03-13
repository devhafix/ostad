<!DOCTYPE html>
<html>
  <head>
    <title>User Input Form</title>
  </head>
  <body>
    <form method="post" action="process_data.php" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <br>
      <label for="profile_picture">Profile Picture:</label>
      <input type="file" id="profile_picture" name="profile_picture" required>
      <br>
      <input type="submit" value="Submit">
  </form>

     </body>
</html>
