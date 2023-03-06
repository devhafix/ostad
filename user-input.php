<!DOCTYPE html>
<html>
  <head>
    <title>User Input Form</title>
  </head>
  <body>
    <form method="post" action="PersonClass.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
