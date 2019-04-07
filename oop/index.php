<?php
include 'newclass.php';

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    # Initialize Object Properties #
    $users = new Users('Jan', 'Lang', 'Brown', 'Green');
    echo $users->first;

    echo $users->fullName();

    # Static #
//    echo NewClass::staticMethod();

    # Set class #
////    $object2 = new NewClass();


    # Unset variable #
////    unset($object);

    # Echo full class #
//     echo $object2;

    # Echo function #
////    $object2->setNewProperty("New data Two");
////    echo $object2->getProperty();


    ?>

</body>
</html>