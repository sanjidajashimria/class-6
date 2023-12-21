<!DOCTYPE html>
<html lang="en">
<head>
    <meta charser="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

<?php

$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

$emailn="sanjidajashim92@gmail.com";
$passwordn='5678';


if($email==$emailn && $password==$passwordn);
{
    echo "login successful";

}
else
{
    echo"incorrect email address or password";
}

?>
</body>
</html>


