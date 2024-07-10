<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="new";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Error in connection:".mysqli_connect_error();
    exit;
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$wto=$_POST['wto'];
$guest=$_POST['guest'];
$come=$_POST['come'];
$leaves=$_POST['leaves'];

$sql="insert into users (name,email,phone,adress,where_to,guest,arrives,leaves) values ('$name','$email','$phone','$adress','$wto','$guest','$come','$leaves')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "error:".mysqli_error($conn);
    exit();

}

include "common/home.php";

?>
