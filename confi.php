<?php

$con=new mysqli('localhost','root','','myvote');
if($con->connect_errno)
{
    echo $con->connect_error;
    die();
}

$an=$_POST['adminname'];
$npass=$_POST['pass'];
$npol=$_POST['pol'];
//${'p'.$i}=$_POST['pool'.$i];
//echo ${'p'.$i};

$sql="CREATE TABLE $an(adminname VARCHAR(50), PASSWOR VARCHAR(50))";
$mysqli="INSERT INTO $an (adminname, PASSWOR) VALUES ('$an', '$npass')";
$result = $con->query($sql);
$out= $con->query($mysqli);

for($i=1;$i<=$npol;$i++){
    ${'p'.$i}=$_POST['pool'.$i];
$mysql="ALTER TABLE $an ADD ${'p'.$i} VARCHAR (50) NOT NULL";
$put=$con->query($mysql);
}




?>