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
    <title>비밀번호 변경</title>
    
  </head>
  <style>

    body { background-color: #D8F781; }

   

    p { background-color: #D8F781; }

</style>
  <body>
    <h1>비밀번호 변경</h1>
    <form action="edited.php" method="POST">
      <p>아이디 <input type="text" name="username" required>
	  <p>기존 비밀번호 <input type="opassword" name="opassword" required></p>
      <p>새 비밀번호 <input type="npassword" name="npassword" required></p>
      <p><input type="submit" value="비밀번호 변경"></p>

  </body>
  </html>
