<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omke Gas</title>
</head>
<body>
    <h1>Learn PHP</h1>
    <ul>
    <?php
        $phpfiles = glob("./**/*.php");

        foreach ($phpfiles as $file) {
            $file = str_replace("/index.php", "", $file);
            $file = str_replace("./", "", $file);
            echo "<li><a href='$file'>$file</a></li>";
        }
    ?>
    </ul>
</body>
</html>