
<!DOCTYPE html>
<html>
  <head>
    <title>User Input Form</title>
  </head>
  <body class="p-4">
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Profile Picture</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $csv_file = fopen('users.csv', 'r');
        while (($data = fgetcsv($csv_file)) !== false) {
            echo '<tr>';
            echo '<td>' . $data[0] . '</td>';
            echo '<td>' . $data[1] . '</td>';
            echo '<td><img src="uploads/' . $data[2] . '"></td>';
            echo '</tr>';
        }
        fclose($csv_file);
        ?>
    </tbody>
</table>
     </body>
</html>
