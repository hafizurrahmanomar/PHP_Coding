<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Hello World! <br/>";

    $fName = "Hafizur";
    $lName = "Rahman";
    $age = 36;
    $height = 6.5;
    // printf()
    printf("My Name is %s %s age %d and height %f fet <br/>", $fName, $lName, $age, $height);
    printf("My Name is %s %s age %d and height %.2f fet <br/>", $fName, $lName, $age, $height);
    printf("My Name is %s %s age %u and height %g fet<br/>", $fName, $lName, $age, $height);
    // sprintf()
    $sprintf = sprintf("My Name is %s %s age %d and height %f fet <br/>", $fName, $lName, $age, $height);
    echo $sprintf;
    ?>

</body>

</html>