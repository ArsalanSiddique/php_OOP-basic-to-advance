<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php # Script 4.2 - hello_object.php
    /* This page uses the HelloWorld class.
 * This page just says "Hello, world!".
 */

    // Include the class definition:
    require('HelloWorld.php');

    // Create the object:
    $obj = new HelloWorld();

    // Call the sayHello() method:
    $obj->sayHello();

    // Say hello in different languages:
    $obj->sayHello('Italian');
    $obj->sayHello('Dutch');
    $obj->sayHello('French');

    // Delete the object:
    unset($obj);
    ?>


</body>

</html>