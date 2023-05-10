<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hanndle Form</h1>
    <pre>

<?php

// echo isset($_POST['submit']); 

if (isset($_POST['submit'])) {


    print_r($_POST);


    // print_r($_GET);


    ?>





        </pre>

        <h1>Welcome
            <?php echo $_POST['fname']; ?>
        </h1>

    <?php } ?>

</body>

</html>