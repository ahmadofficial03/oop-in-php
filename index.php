<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require('constructors.php');
    $commet = new Commet("Nice Music to ", "222345");
    ?>

    <p><?php 
    echo $commet->title . "by the user " . $commet->userId;
    ?></p>
</body>
</html>



