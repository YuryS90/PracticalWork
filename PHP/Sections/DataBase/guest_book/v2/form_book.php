<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("connect.php");

    $query = "SELECT * FROM book";
    $result = mysqli_query($link, $query)
        or die("Не удалось выполнить запрос");

    echo "<table border='1'>\n";
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td> <a href='delete.php?id=$row[0]'>" . $row[0] . "</a></td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }

    echo  "</table>\n";

    mysqli_free_result($result);
    mysqli_close($link);
    ?>

    <form action="add.php" method="POST">
        <textarea name="text" cols="30" rows="10"></textarea>
        <input type="text" name="name">
        <input type="submit" value="ok">
    </form>
</body>

</html>