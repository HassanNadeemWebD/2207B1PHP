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

print_r($_FILES['img']);


    print_r($_POST);
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $fileName = $_FILES['img']['name']; 
    $tmpName = $_FILES['img']['tmp_name'];
    $fileType = $_FILES['img']['type'];


if($fileType == 'image/jpeg' || $fileType == 'image/jpg' || $fileType == 'image/png' ){


    if(move_uploaded_file($tmpName,"uploads/".$fileName)){

        echo "<script> alert('Image uploaded') </script>";
        
        
        }


}
else{

    echo "<script> alert('Image is Not Uploaded , Please use JPG,JPEG or PNG file ') </script>";

// header('location: form.php');
echo "<script>window.location.href = 'form.php'</script>";

}


    // print_r($_GET);


    ?>





            </pre>
<img height="250" width="250" src="uploads/<?php echo  $fileName?>" alt="">
        <h1>Welcome
            <?php echo $_POST['fname']; ?>
        </h1>
        <p><?php echo "First Name:  $firstName"  ?></p>
        <p><?php echo "last Name:  $lastName"  ?></p>

    <?php } ?>

</body>

</html>