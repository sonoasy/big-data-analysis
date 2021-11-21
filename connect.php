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
<br>

  
<?php

if(array_key_exists('sports', $_POST)){  
  $php_sport=$_POST['sports'];
  if($php_sport==1){
    $sport_name="축구";
  }
  else{
  $sport_name="야구";
  }
    
}
if(array_key_exists('season', $_POST)){  
  $php_season=$_POST['season'];
  if($php_season==0){
    $sport_season="없음";
  }
  else if($php_season==1){
  $sport_season="시범 경기";
  }
   else if($php_season==2){
  $sport_season="정규 시즌";
  }
  else{
   $sport_season="포스트 시즌";
  
  }
}
if(array_key_exists('year', $_POST)){  
  $php_year=$_POST['year'];
  $sport_year=$php_year;
 
    
}
  
if(array_key_exists('day', $_POST)){  
  $php_day=$_POST['day'];
  $sport_week=$php_day;
   
    
}
 if(array_key_exists('time', $_POST)){  
  $php_time=$_POST['time'];
  $sport_time=$php_time;
   
    
}
      
  
  
 
  $con=mysqli_connect("localhost","team27","team27","team27");
  if(mysqli_connect_error()){
     printf("MariaDB 접속 실패!:%s\n",mysqli_connect_error());
     exit();
  }
  else{
	 
	 $sql_byday="select * from byday where ride_ctg='하차'";
	 
	 $sql_bymonth="select * from bymonth  ";
	 
	 $sql_rank_out_day="select *, rank() over (order by people desc) as rank from rank_out_day ";
	 $resr=mysqli_query($con,$sql_rank_out_day);
	  $resd=mysqli_query($con,$sql_byday);
	   $resm=mysqli_query($con,$sql_bymonth);
	 
     if($resr){
		 echo"<b>일 평균 지하철 이용 인원 순위</b>","<br>","<br>";
	    while($rowr=mysqli_fetch_array($resr)){
			 
			 
			 if($rowr['station']=='선릉'){
			     echo  "<b>",$rowr['rank'],"</b>","\t","<b>",$rowr['station'],"</b>"," ","<b>",$rowr['people'],"</b>","명\t","<br>"; 
			 }
			 else{
				  echo  $rowr['rank'],"\t",$rowr['station']," ",$rowr['people'],"명\t","<br>";
			 }
		    
		 }
		 
	 
	 }
	 if($resd){
		 echo"<br>";
		 echo"<br>";
		 echo"<b>하루 시간대별 선릉역 지하철 이용 인원</b>","<br>";
	    while($rowd=mysqli_fetch_array($resd)){
			 
			 
			 
		     echo  $rowd['line'],"\t",$rowd['station']," ",$rowd['ride_ctg'],"\t","<br>";
		     echo "오전 6시 이전:"," ",$rowd['before_6'],"명","<br>";
			 echo "오전 6시-7시"," ",$rowd['6_to_7'],"명","<br>";
			 echo "오전 7시-8시"," ",$rowd['7_to_8'],"명","<br>";
			 echo "<b>오전 8시-9시</b>"," ","<b>",$rowd['8_to_9'],"</b>","명","<br>";
			 echo "<b>오전 9시-10시</b>"," ","<b>",$rowd['9_to_10'],"</b>","명","<br>";
			 echo "오전 10시-11시"," ",$rowd['10_to_11'],"명","<br>";
			 echo "오전 11시-12시"," ",$rowd['11_to_12'],"명","<br>";
			 echo "오후 12시-13시"," ",$rowd['12_to_13'],"명","<br>";
			 echo "오후 13시-14시"," ",$rowd['13_to_14'],"명","<br>";
			 echo "<b>오후 14시-15시</b>"," ","<b>",$rowd['14_to_15'],"</b>","명","<br>";
			 echo "<b>오후 15시-16시</b>"," ","<b>",$rowd['15_to_16'],"</b>","명","<br>";
			 echo "<b>오후 16시-17시</b>"," ","<b>",$rowd['16_to_17'],"</b>","명","<br>";
			 echo "<b>오후 17시-18시</b>"," ","<b>",$rowd['17_to_18'],"</b>","명","<br>";
			 echo "오후 18시-19시"," "," ",$rowd['18_to_19']," ","명","<br>";
			 echo "오후 19시-20시"," ",$rowd['19_to_20'],"명","<br>";
			 echo "오후 20시-21시"," ",$rowd['20_to_21'],"명","<br>";
			 echo "오후 21시-22시"," ",$rowd['21_to_22'],"명","<br>";
			 echo "오후 22시-23시"," ",$rowd['22_to_23'],"명","<br>";
			 echo "23시 이후"," ",$rowd['after_23'],"명","<br>";
			 
			 
			 
			 
			 
		 }
		 
	 
	 }
	 if($resm){
		 echo"<br>";
		 echo"<br>";
		 echo"<b>월평균 선릉역 이용 인원 </b>","<br>","<br>";
	    while($rowm=mysqli_fetch_array($resm)){
			 
		     echo  "1월: ",$rowm['january'],"명","<br>";
			 echo  "2월: ",$rowm['february'],"명","<br>";
			 echo  "3월: ",$rowm['march'],"명","<br>";
			 echo  "4월: ",$rowm['april'],"명","<br>";
			 echo  "5월: ",$rowm['may'],"명","<br>";
			 echo  "6월: ",$rowm['june'],"명","<br>";
			 echo  "<b>7월: </b>","<b>",$rowm['july'],"</b>","명","<br>";
			 echo  "8월: ",$rowm['august'],"명","<br>";
			 echo  "9월: ",$rowm['september'],"명","<br>";
			 echo  "10월: ",$rowm['october'],"명","<br>";
			 echo  "11월: ",$rowm['november'],"명","<br>";
			 echo  "12월: ",$rowm['december'],"명","<br>";
			 
			 
		 }
		 
	 
	 }
	 
	  echo "<h3><b>필터 조건 🔍️<br>","종목:",$sport_name,"   ","시즌: "," ",$sport_season,"   ","요일 : "," ",$sport_week,"    시간:",$sport_time,"시</b></h3><br>";
	  
	 
	 
	 
	  
	  if($php_year=='2018'){
	  $sql="select * from play where w_date<20190101 and ctgry='".$_POST['sports']."' and w_time='".$php_time."'";
		
		$sqlg1="select bef_two_h,w_date from play where w_date<20190101 and ctgry='".$_POST['sports']."' group by bef_two_h,bef_one_h,run_h";
		
		
	  }
      else if($php_year=='2019'){
	   $sql="select * from play2 where w_date>20181231 and w_date<20200101 and ctgry='".$_POST['sports']."' and w_time='".$php_time."'";
	   $sqlg1="select bef_two_h,w_date from play2 where w_date>20181231 and w_date<20200101 and ctgry='".$_POST['sports']."' group by bef_two_h,bef_one_h,run_h";
	  }		  
	  else if($php_year=='2020'){
	    $sql="select * from play3 where w_date>20191231 and ctgry='".$_POST['sports']."' and w_time='".$php_time."' ";
		$sqlg1="select bef_two_h,w_date from play3 where w_date>20191231 and ctgry='".$_POST['sports']."' group by bef_two_h,bef_one_h,run_h";
	  }
	  
	  
	  
	  
	  
	  
	  
	  $res=mysqli_query($con,$sql);
	  $res2=mysqli_query($con,$sql);
	  if($res){
		 $cnt=mysqli_num_rows($res); 
		 if($cnt==0){
           printf("데이터가 비어있습니다. 다른 조건을 선택해주세요.\n");  
		 }			 
		 else{
		 
		
	
	
		 $max_two=0;
		 $max_date_two=1000000;
		 $sum_two=0;
		 $sum_one=0;
		 $sum_zero=0;
		 $min_date_two;
		 $min_two=10000000;
		 $max_date_one;
		 $min_date_one;
         $max_date_zero;
		 $min_date_zero;		 
		 $max_one=0;
		 $min_one=100000000;
		 $max_zero=0;
		 $min_zero=100000000;
		 
		 
		while($row2=mysqli_fetch_array($res2)){
		  $sum_two+=$row2['bef_two_h'];
		  $sum_one+=$row2['bef_one_h'];
		  $sum_zero+=$row2['run_h'];
		  if($max_two<$row2['bef_two_h']){
			    $max_two=$row2['bef_two_h'];
		     	$max_date_two=$row2['w_date'];
		  }
		  if($min_two>$row2['bef_two_h']){
			    $min_two=$row2['bef_two_h'];
				$min_date_two=$row2['w_date'];
		  }
			 
          if($max_one<$row2['bef_one_h']){
			    $max_one=$row2['bef_one_h'];
				$max_date_one=$row2['w_date'];
		  }
		  if($min_one>$row2['bef_one_h']){
			    $min_one=$row2['bef_one_h'];
				$min_date_one=$row2['w_date'];
		  }
		  if($max_zero<$row2['run_h']){
			    $max_zero=$row2['run_h'];
				$max_date_zero=$row2['w_date'];
		  }
		  if($min_zero>$row2['run_h']){
			    $min_zero=$row2['run_h'];
				$min_date_zero=$row2['w_date'];
		  }
		 
		
		}	
		$num=mysqli_num_rows($res2);
		
		$sum_two/=$num;
		$sum_one/=$num;
		$sum_zero/=$num;
		
		
		echo"<b>경기 시작 전 최대 이용 인원(하차) 해당 날짜 및 인원 정보</b><br><br>";
			
		echo"경기 <font color=red>2시간 전</font> 최대 인원 날짜 및 인원 정보:  ".$max_date_two."";echo "  ,";echo $max_two;echo"명<br>";
		echo"경기 <font color=red>1시간 전</font> 시간 최대 인원 날짜 및 인원 정보:  ".$max_date_one."";echo "  , ";echo $max_one;echo"명<br>";
		echo"경기 <font color=red>시작 시간</font> 최대 인원 날짜 및 인원 정보:  ".$max_date_zero."";echo "  , ";echo $max_zero;echo"명<br>";
		echo"<br>";
		$maxx=0;
		$max_times;
		if($maxx<$max_two){
		   $maxx=$max_two;
		   $max_times="2 시간전";
		}
		if($maxx<$max_one){
		   $maxx=$max_one;
		    $max_times="1 시간전";
		}
		if($maxx<$max_zero){
		  $maxx=$max_zero;
		    $max_times="시작 시간";
		}
		echo "<font color=purple>경기",$max_times,"에 ",$maxx,"명으로 이용 최대 인원이 가장 많습니다.<br><br></font>";
		echo "<br><br>경기 <font color=red>2 시간전</font> 평균 이용 인원:","$sum_two","명<br>", "경기 <font color=red>1 시간 전</font> 평균 이용 인원:","$sum_one" ,"명<br>", "경기 <font color=red>시작 시간</font> 평균 이용 인원:","$sum_zero","명<br><br>";
		
		$sumx=0;
		$sum_time;
		if($sumx<$sum_two){
		   $sumx=$sum_two;
		   $sum_times="2 시간전";
		}
		if($sumx<$sum_one){
		   $sumx=$sum_one;
		    $sum_times="1 시간전";
		}
		if($sumx<$sum_zero){
		   $sumx=$sum_zero;
		    $sum_times="시작 시간";
		}
		echo "<font color=purple>경기",$sum_times,"에 ",$sumx,"명으로 평균 이용 인원이 가장 많습니다.<br><br><br></font>";
		
		
		
		
		
		echo"<b>******************상세 정보******************************</b><br><br>";
		echo  "경기일\t /요일/시간/2시간 전"," ","/1시간 전"," ","/경기 시작 인원(명)"; echo"<br>";echo"<br>";
		
		
	    while($row=mysqli_fetch_array($res)){
			 
			 
			 
		     echo  $row['w_date'],"\t",$row['w_week']," ",$row['w_time'],"시  ",$row['bef_two_h'],"\t",$row['bef_one_h'],"\t",$row['run_h'],"<br>";
		 }
		 
		 
		 
		



		 
		 
		 }			 
		  
		 
		 
		 
	  }
	  else{
		  printf("테이블을 가져올수 없습니다:%s\n",mysqli_error($con));
	  }
    }

  mysqli_close($con);

?>

</body>
</html>