


<?php

 
  $con=mysqli_connect("localhost","team27","team27","team27");
  if(mysqli_connect_error()){
     printf("MariaDB 접속 실패!:%s\n",mysqli_connect_error());
     exit();
  }
  else{
	  $sql="select * from user_info " ;
	  $res=mysqli_query($con,$sql);
	  
	  if($res){
		  
		  $cnt=mysqli_num_rows($res); 
	      echo"현재 이용자 수: ","$cnt";	  
		  
		  
	  }
	  else{
	  }
	  
  }


?>

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
    <h1>회원 탈퇴</h1>
    <form action="byebye.php" method="POST">
      <p><input type="text" name="username" required>
      <p><input type="password" name="password" required></p>
      <p><input type="submit" value="회원탈퇴"></p>

  </body>
  </html>


