<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <pre> -->

    <?php

    // Numerical Array

    $arr1 = array(1, 2, 3, 4, 5, "abc", true);


    $arr = [1, 2, 3, 4, 5, "abc", true];
    // echo $arr1[3];
    print_r($arr);

    // echo count($arr);

    echo "<ol>";
    for ($i = 0; $i < count($arr); $i++) {

        echo "<li>" . $arr[$i] . "</li>";
    }

    echo "</ol>";




    ?>
    <ul>
        <?php for ($i = 0; $i < count($arr); $i++) {





        ?>


            <li><?php echo $arr[$i] ?>
            </li>
        <?php } ?>

    </ul>

    <pre>
    <?php

    $mulArr = [[1, "Hassan", "male"], [2, "Ausaf", "male"], [3, "Zain", "male"], [4, "Ali", "male"], [5, "Owais", "male"]];

    print_r($mulArr);
    // $hassan = $mulArr[0];
    // echo $mulArr[0][1];
    // print_r("ABC");

    ?>

</pre>

    <table border="1">

        <tr>
            <th>StudentName</th>
            <th>Gender</th>

        </tr>
        <?php for ($i = 0; $i < count($mulArr); $i++) {





        ?>
            <tr>


                <td><?php echo $mulArr[$i][0] ?>
                </td>

                <td><?php echo $mulArr[$i][1] ?>
                </td>
            </tr>
        <?php } ?>

    </table>


    <table border="2">
        <tr>
            <th>StudentID</th>
            <th>StudentName</th>
            <th>Gender</th>
        </tr>

        <?php foreach ($mulArr as $item) {
        ?>

            <tr>

            <?php foreach ($item as $value) {

                echo "<td>" . $value . "</td>";
            }

            # code...
        }  ?>


            </tr>
    </table>

    <pre>

    <?php $assocArr = ["a" => 1, "b" => 2, "c" => 3, "d" =>  4, "e" => 5, "abc" => true];

    print_r($assocArr);
    // echo $assocArr["c"];
    // echo (string) $assocArr;
    $students = [
        "student1" => ["studentID" =>  1, "studentName" => "uzair ali", "gender" =>  "male", "age" => 22],                                                                                                                                                                                                              
        "student2" => ["studentID" => 2, "studentName" => "Ali", "gender" =>  "male", "age" => 42],
        "student3" => ["studentID" =>  3, "studentName" => "Saif", "gender" =>  "male", "age" => 18],
        "student4" => ["studentID" =>  4, "studentName" => "Hassam", "gender" =>  "male", "age" => 18]
    ];

    // echo  $students["student1"]["studentName"];
// print_r($students);

// foreach ($students as $Parentkey => $data) {
//     echo "</br>";
//     echo "parentkey : " . $Parentkey ;
//     echo "</br>";                                                                                                                                                                                                                                                                           
//     foreach ($data as $stdKey => $value) {
//         echo $stdKey . " : " . $value ;                                                                                                                                                                                                                                                                                                                                                                                                                                                
//         echo "</br>";


//     }




// }


    ?>
</pre>

<table border="2">

<tr>
    <th>Key</th>
<th>StudentID</th>
<th>StudentName</th>
<th>Gender</th>
<th>Age</th>

</tr>

<?php 



foreach ($students as $Parentkey => $data) {
    // echo "</br>";
    // echo "parentkey : " . $Parentkey ;
    // echo "</br>";                                                                                                                                                                                                                                                                           
 ?>


<tr>
    
<th>  <?php echo $Parentkey ?> </th>
<?php    foreach ($data as $stdKey => $value) {
        // echo $stdKey . " : " . $value ;                                                                                                                                                                                                                                                                                                                                                                                                                                                
        // echo "</br>";


   ?>

<td> <?php echo $value ?> </td>
<?php }?>
</tr>

<?php }?>
</table>
    
    



    <!-- </pre> -->

</body>

</html>