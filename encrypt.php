<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MD5 Encryption</h1>
<?php

$signUp = "rohail1";

$md5Signup = md5($signUp) ;
$login = "rohail123";
$loginmd5 =  md5($login);
// echo "</br>";
echo "Signup Password: ".  $md5Signup ."</br>". "length: ". strlen($md5Signup);
echo "</br>";
echo "Login Password: ".  md5($login) ."</br>". "length: ". strlen(md5($login));

if($md5Signup === $loginmd5 ){
    

    echo "Login Success";




}else{

echo "Login Failed";

}


// echo md5($md5Signup);




?>
    <h1>SHA1 Encryption</h1>

    <?php
    $sha1Signup = sha1($signUp);

    $loginSha1 = sha1($login);
    
    echo  $sha1Signup ."</br>". "length: ". strlen($sha1Signup);
    echo "</br>";
echo "Login Password: ".  $loginSha1 ."</br>". "length: ". strlen($loginSha1);

if($sha1Signup === $loginSha1 ){
    

    echo "Login Success";




}else{

echo "Login Failed";

}
?>
<h1>Blow Fish Algorithm</h1>
<?php

$bcryptSingup =   password_hash($signUp,PASSWORD_BCRYPT);
$bcryptLogin =   password_hash($login,PASSWORD_BCRYPT);

echo  $bcryptSingup ."</br>". "length: ". strlen($bcryptSingup);
echo "</br>";
echo "Login Password: ".  $bcryptLogin ."</br>". "length: ". strlen($bcryptLogin);
echo "</br>";
// echo  password_verify($login , $bcryptSingup);

if( password_verify($login , $bcryptSingup)){
    

    echo "Login Success";




}else{

echo "Login Failed";

}

?>




    
</body>
</html>