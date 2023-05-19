<?php include 'header.php' ?>
<?php

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $course = $_POST['course'];
    $fileName = $_FILES['img']['name'];
    $tmpName = $_FILES['img']['tmp_name'];
    $fileType = $_FILES['img']['type'];
    if ($fileType == 'image/jpeg' || $fileType == 'image/jpg' || $fileType == 'image/png') {


        $query = "UPDATE `students`
        SET  `firstName` = '$firstName', `lastName` = '$lastName',
         `age` = '$age', `gender` = '$gender', `email` = '$email', `contact` = '$contact', `course` = '$course' , `picture` = '$fileName' 
        WHERE `id` = $id";
           $res = mysqli_query($conn, $query);
           if ($res) {
       
            if (move_uploaded_file($tmpName, "uploads/" . $fileName)) {

                echo "<script> alert('Image uploaded') </script>";
                echo "<script>window.location.href = 'showdata.php'</script>";
    
            }
            //    echo "<script> window.location.href = 'showdata.php' </script>";
       
           }
       }
       else {

        echo "<script> alert('Image is Not Uploaded , Please use JPG,JPEG or PNG file ') </script>";

        // header('location: form.php');


    }


    


    } 







?>

<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #f093fb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }
</style>

<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT * FROM `students` where `id` = $id ";
    $res = mysqli_query($conn, $query);
    // print_r($res->num_rows)

    // print_r(mysqli_fetch_assoc($res));
    $data = mysqli_fetch_assoc($res);
    // print_r($data);

    ?>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Details</h3>
                            <form action="update.php" method="post" enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="firstName" name="id" value="<?php echo $data['id'] ?>"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="firstName"></label>
                                        </div>

                                        <div class="form-outline">
                                            <input type="text" id="firstName" name="fname"
                                                class="form-control form-control-lg"
                                                value="<?php echo $data['firstName'] ?>" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="lastName" name="lname"
                                                class="form-control form-control-lg"
                                                value="<?php echo $data['lastName'] ?>" />
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="number" name="age" class="form-control form-control-lg"
                                                id="birthdayDate" value="<?php echo $data['age'] ?>" />
                                            <label for="birthdayDate" class="form-label">Age</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                                value="female" <?php if ($data['gender'] === 'female') {
                                                    echo "checked";
                                                } ?> />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                                value="male" <?php if ($data['gender'] === 'male') {
                                                    echo "checked";
                                                } ?> />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                                value="other" <?php if ($data['gender'] === 'other') {
                                                    echo "checked";
                                                } ?> />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" id="emailAddress" name="email"
                                                class="form-control form-control-lg" value="<?php echo $data['email'] ?>" />
                                            <label class="form-label" for="emailAddress">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="tel" id="phoneNumber" name="contact"
                                                class="form-control form-control-lg"
                                                value="<?php echo $data['contact'] ?>" />
                                            <label class="form-label" for="phoneNumber">Phone Number</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="file" id="img" name="img" class="form-control form-control-lg"
                                                value="<?php echo $data['picture'] ?>" />
                                            <label class="form-label" for="img">Upload Image</label>
                                        </div>

                                    </div>
                                </div>




                                <div class="row">
                                    <div class="col-12">

                                        <select class="select form-control-lg" name="course">
                                            <option disabled>Choose option</option>
                                            <option value="sub 1" <?php if ($data['course'] === 'sub 1') {
                                                echo "selected";
                                            } ?>>Subject 1</option>
                                            <option value="sub 2" <?php if ($data['course'] === 'sub 2') {
                                                echo "selected";
                                            } ?>>Subject 2</option>
                                            <option value="sub 3" <?php if ($data['course'] === 'sub 3') {
                                                echo "selected";
                                            } ?>>Subject 3</option>
                                        </select>
                                        <label class="form-label select-label">Choose option</label>

                                    </div>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" name="update" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';
} ?>