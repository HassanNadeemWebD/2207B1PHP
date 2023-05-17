<?php include 'header.php'; ?>
<section>


    <pre>
<?php


$query = "SELECT * FROM `students`";
$res = mysqli_query($conn, $query);
print_r($res);

// print_r(mysqli_fetch_all($res));


// print_r(mysqli_fetch_assoc($res));
// print_r(mysqli_fetch_assoc($res));
// print_r(mysqli_fetch_assoc($res));



?>

<table border="2" cellpadding = "10">

<tr>
<th>id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Gender</th>
<th>Email</th>
<th>Contact</th>
<th>Course</th>
<th>Image</th>
<th>Delete/Update</th>
</tr>


<?php while ($row = mysqli_fetch_assoc($res)) {




    // print_r($row);
    ?>
        <tr>
    <?php

    // foreach ($row as $item) {



    //     echo "<td> $item </td>";
    // }


?>

<td><?php echo $row['id'];?></td>
<td><?php echo $row['firstName'];?></td>
<td><?php echo $row['lastName'];?></td>
<td><?php echo $row['age'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['course'];?></td>
<td><img height="100" width="100" src="uploads/<?php echo $row['picture'];?>" alt=""> </td>
<td><a href="update.php?id=<?php echo $row['id']?>"> <button class="btn btn-primary " >Update</button></a>
<a href="delete.php?id=<?php echo $row['id']?>"> <button class="btn btn-danger" >Delete</button></a></td>







        </tr>

<?php } ?>



</table>



</pre>







</section>


<?php include 'footer.php'; ?>