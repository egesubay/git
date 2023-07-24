<?php
include 'MysqlConnections.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
  
  else{
    $datatablesql = "SELECT  username, password, CONCAT(isim,' ',soyisim) as isimler,dogumTarihi FROM login inner join user on login.user_id= user.id";
$datatable = mysqli_query($conn,$datatablesql);


  }

  while($user=mysqli_fetch_assoc($datatable)){

  

  $data=[
    "draw"=> 1,
    "recordsTotal"=> 2,
    "recordsFiltered"=> 2,
    "data"=> [
      [
      "id"=> "1",
      "username"=> "$user[username]",
      "password"=> "$user[password]",
      "isimler"=> "$user[isimler]",
      "dogumTarihi"=> "$user[dogumTarihi]",
      ],
    ],
];
  }
echo json_encode($data);