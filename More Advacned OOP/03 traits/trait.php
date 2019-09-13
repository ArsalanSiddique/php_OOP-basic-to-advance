<?php

// require('rectangle.php');
// require('traitDebug.php');
// $obj = new Rectangle(24, 24);
// $obj->traitDebug();
// unset($obj);



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trait</title>
</head>

<body>
    <?php # Script 6.7 - trait.php
    // This page uses the tDebug trait through the Rectangle object.

    // Include the trait definition:
    require('tDebug.php');

    // Include the class definition:
    require('rectangle.php');

    // Create a new object:
    $r = new Rectangle(42, 37);

    // Dump the information:
    $r->dumpObject();

    // Delete the object:
    unset($r);

    ?>
</body>

</html>