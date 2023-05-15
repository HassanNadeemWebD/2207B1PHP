<?php
$conn = mysqli_connect('localhost', 'root', '', '2207B1');
if ($conn) {

    echo "connection established";


} 


 echo mysqli_error($conn);

?>