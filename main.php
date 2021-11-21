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

$id=$_GET['userid'];
$password=$_GET['password'];
 $con=mysqli_connect("localhost","team27","team27","team27");
  if(mysqli_connect_error()){
     printf("MariaDB 접속 실패!:%s\n",mysqli_connect_error());
     exit();
  }
  else{
	  
	 $sql= "select * from user_info where name='".$id."' and password='".$password."'";
	 $res=mysqli_query($con,$sql); 
	 $cnt=mysqli_num_rows($res); 
	 if($cnt){

         echo "<b>$id</b>","님 반갑습니다!  ";	 
		 
		 
	 }	
     else{
	    echo "로그인 정보를 다시 확인해주세요! 회원가입을 하지 않았으면 회원가입을 진행해주세요.";
		exit();
	 }		 
	  
  }





?>
<a href="edit.php"><button type="button">비밀번호 변경</button></a> &nbsp;<br />	
<br>
<br>
<br>

  <b>subway conjuction during big sports festival</b> 
<br>
<br>
<br>


<form method="POST" action="connect.php" >
  *종목 선택  
  <select name="sports" required >
    <option value="none" selected>=== 선택 ===</option>
    <option value='1' >축구</option>
    <option value='2'>야구</option>
  </select>
  시즌 선택  
  <select name="season" >
    <option value="none" selected>=== 선택 ===</option>
    <option value="0" >없음</option>
	<option value="1" >시범경기</option>
    <option value="2">정규시즌</option>
     <option value="3">포스트시즌</option>
  </select>
  *연도 선택  
  <select name="year" required >
    <option value="none" selected>=== 선택 ===</option>
    <option value="2018" >2018</option>
    <option value="2019">2019</option>
     <option value="2020">2020</option>
  </select>
  요일 선택  
  <select name="day" >
    <option value="none" selected>=== 선택 ===</option>
 
    <option value="화">화</option>
     <option value="수">수</option>
    <option value="목">목</option>
    <option value="금">금</option>
    <option value="토">토</option>
    <option value="일">일</option>
  </select>
  시간 선택
  <select name="time" >
    <option value="none" selected>=== 선택 ===</option>
 
    <option value="13">13</option>
     <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
  </select>
  
  
  <input type="submit" value="submit"/>
</form>
*필수 항목
  
</body>

</html>