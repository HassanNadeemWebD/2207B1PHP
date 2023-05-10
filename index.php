<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    //  $a = 2;

    // $b = 1.2;
    // $c= true;
    // $d = "<h1> string?? </h1>";

    // var_dump($a);
    // echo "<br>";
    // var_dump($b);
    // echo "<br>";
    // var_dump($c);
    // echo "<br>";
    // var_dump($d);
    // echo "<br>";


    // echo pi();
    // echo "<br>";
    // // echo sqrt(4);
    // // echo rand(1,100);
    // echo strlen($d);
    // // echo str_word_count($d)


    // function abc(){

    // static $var = 1;
    //  global $a;
    //  echo "<br>";
    //  echo ++$var;



    // }

    // // abc();
    // // abc();
    // // abc();
    // // abc();
    // define( "myconst" , "Hassan");
    // echo "<br>";
    // echo myconst;
    // global $var;
    // echo $var;
    // echo $d;
    // print("false");


    ?>

    <h1>Age validator</h1>

    <h3 style=" color: brown ">

        <?php

        $age = 28;


        if ($age < 18) {

            echo "age is less than 18";
        } else if ($age == 18) {

            echo "age is equal to 18";
        } else {

            echo "age is greater than 18";
        }





        // echo "<script>let age = prompt('Enter Your Age')</script>";



        ?>

    </h3>

    <ol>
        <?php
        $str = "Hassan Nadeem";
        // echo $str[0];

        for ($i = 0; $i < strlen($str); $i++) {






        ?>
            <li><?php echo $str[$i];
             ?></li>



<?php }?>

    </ol>




</body>

</html>