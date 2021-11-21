<!DODCTYPE.html>
<html>
<head>
<meta charset="utf-8">
  <title>subway conjuction</title>
</head>
<style>

    body { background-color: #D8F781; }

   

    p { background-color: #D8F781; }

</style>
<body>

<?php

$name=$_POST['username'];
$password=$_POST['password'];

$con = mysqli_connect("localhost", "team27", "team27", "team27");
if(mysqli_connect_error()){
     printf("MariaDB 접속 실패!:%s\n",mysqli_connect_error());
     exit();
  }
  else{
	  
	  $sql="INSERT INTO user_info(name,password)  VALUES ('".$name."','".$password."')";
	  $result=mysqli_query($con,$sql);

      if($result) { echo "<b>회원가입 성공!👏</b>"; }
      else { echo "회원가입에 실패하였습니다."; }
      mysqli_close($con);	  
	  
	  
	  
	  
	  
  }

?></body></html>