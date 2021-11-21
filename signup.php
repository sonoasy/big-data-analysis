


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
	      echo"<b>현재 이용자 수: </b>","<b>$cnt</b>";	  
		  
		  
	  }
	  else{
	  }
	  
  }


?>

<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>회원 가입</title>
    
  </head>
  <style>

    body { background-color: #D8F781; }

   

    p { background-color: #D8F781; }

</style>
  <body>
  <div style="width:400px; height:250px;  position: absolute; left: 400px; top: 250px;">
    <h1>&nbsp;&nbsp;<b>회원 가입</b></h1>
    <form action="register.php" method="POST">
      <p><input type="text" name="username" required>
      <p><input type="password" name="password" required></p>
      <p><input type="submit" value="회원 가입"></p>
  </div>
  </body>
  </html>


