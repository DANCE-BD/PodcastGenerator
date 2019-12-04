<?php
require "checkLogin.php";
require "../core/include_admin.php";

generateRSS();
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo htmlspecialchars($config["podcast_title"]); ?> - Regenerate Feed</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../core/bootstrap/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $config["absoluteurl"]; ?>favicon.ico">
</head>

<body>
    <?php
    include "js.php";
    include "navbar.php";
    ?>
    <br>
    <div class="container">
        <h1 style='color: green;'>Successfully regenrated RSS feed</h1>
        <a href="index.php">Return</a>
    </div>
</body>

</html>