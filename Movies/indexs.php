<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie List</title>
</head>
<body>

<?php

$conn = mysqli_connect("localhost", "root", "", "db_movies");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);

?>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Year</th>
        <th>Cast</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['title']}</td>
            <td>{$row['year']}</td>
            <td>{$row['cast']}</td>
          </tr>";
    }
    ?>
    </tbody>
</table>

<?php mysqli_close($conn); ?>

</body>
</html>
