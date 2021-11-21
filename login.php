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
 <br>
  <h1><b> ⚾⚽ 대규모 스포츠 행사 시작 전 지하철 이용 혼잡도</b> </h1>
  <b>현재 조회 가능 역: 선릉역(잠실 경기장)</b>
<br>
<br>

  

<?php

 $con = mysqli_connect("localhost", "team27", "team27", "team27");
 if(mysqli_connect_error()){
     printf("MariaDB 접속 실패!:%s\n",mysqli_connect_error());
     exit();
  }
  else{
	  
	  $sql1="select * from play";
	  $sql2="select * from play2";
	  $sql3="select * from play3";
	  $res1=mysqli_query($con,$sql1);
	  $res2=mysqli_query($con,$sql2);
	  $res3=mysqli_query($con,$sql3);
      $cnt1=mysqli_num_rows($res1); 
	  $cnt2=mysqli_num_rows($res2); 
	  $cnt3=mysqli_num_rows($res3); 
      echo "<b>  데이터 건수</b>: 2018년: ","<font color=blue>$cnt1</font>","건","   ","2019년:"," ","<font color=blue>$cnt2</font>","건","   ","2020년: ","<font color=blue>$cnt3</font>","건</font><br />"; 
      mysqli_close($con);	  
	  
	  
	  
	  
	  
  }




?>  

<br>
<br>
<br>



<div style="width:400px; height:250px;  position: absolute; left: 400px; top: 250px;">
 <h2>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<b>로그인</b></h2>
<form method="get" action="main.php">
<h4>아이디</h4>
<input type="text" name="userid" >
<h4>비밀번호</h4>
<input type="text" name="password" >
<input type="submit" value="로그인"/>
</form>
<a href="signup.php"><button type="button">회원가입 하기</button></a>
<a href="bye.php"><button type="button">회원탈퇴 하기</button></a> &nbsp;<br />
</div>


  
</body>

</html>
