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
$opassword=$_POST['opassword'];

$npassword=$_POST['npassword'];

$con = mysqli_connect("localhost", "team27", "team27", "team27");
if(mysqli_connect_error()){
     printf("MariaDB 접속 실패!:%s\n",mysqli_connect_error());
     exit();
  }
  else{
	  mysqli_autocommit($con, FALSE);

	  $sql="update user_info set password='".$npassword."' where  name='".$name."' and password='".$opassword."'";
	  $result=mysqli_query($con,$sql);

      if($result) { 
	   
	      echo" 비밀번호 변경 완료";
	      mysqli_rollback($con);
	   }
	   else{
		   echo"회원 정보가 등록되어 있지 않습니다.";
		   mysqli_rollback($con);


	   }
	   
	   mysqli_commit($con); 
	   mysqli_autocommit($con, TRUE);

      mysqli_close($con);	  
	  
	  
	  
	  
	  
  }

?>

</body></html>