<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>회원 탈퇴</title>
    
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
	  mysqli_autocommit($con, FALSE);
	  $sql="delete from user_info where  name='".$name."' and password='".$password."'";
	  $result=mysqli_query($con,$sql);

      if($result) { 
	   
	      echo" <b>회원 탈퇴 완료😭</b>";
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