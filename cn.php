<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $upzila = $_POST['upazila'];
 $phone = $_POST['phone'];
 $item = $_POST['item'];
 
$conn = new mysqli ('localhost', 'id18515422_shopadmin', 'Iamtanver247#2', 'id18515422_shopdb');

if($conn->connect_error)
{die('Connection Failed : '.$conn->connect_error);
}else{
$stmt = $conn->prepare("insert into ordered(name,email,address, upazila, phone,item) values(?,?,?,?,?,?)");

$stmt->bind_param("ssssss",$name,$email,$address,$upzila,$phone,$item);
$stmt->execute();
echo "Data Submitted";
$stmt->close();
$conn->close();
}

 ?>