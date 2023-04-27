# 대규모 스포츠 행사 전 지하철역 혼잡도 분석


## 🎆 프로젝트 소개 

대규모 스포츠 행사(야구, 축구)가 열릴 때 경기장과 가장 인접한 역의 경기 시작 2시간, 경기 시작 1시간, 경기 시작 시간 단위로 이용 인원 통계를 일려주어 혼잡도를 알려주어 역 이용시 참고할수 있도록한다.

- 혼잡도: 해당 역의 하차 인원 형태로 파악

📚 사용 데이터셋: 대규모 스포츠 행사 개최 시기별 전철역 이용인원 한국철도공사 제공), 전철역 시간별 이용인원(한국철도공사 제공), 서울교통공사_하차순위(공공데이터 포털 제공), 서울교통공사_역별 일별 시간대별 승하차 인원 정보(공공데이터 포털 제공), 서울교통공사_월별 승하차인원_20191231(공공데이터 포털 제공), 서울교통공사_하차순위_20210831(공공데이터포털 제공)


## 기술 스택 

<div align=left> 
<img src="https://img.shields.io/badge/php-777BB4?style=for-the-badge&logo=php&logoColor=white">
<img src="https://img.shields.io/badge/mysql-4479A1?style=for-the-badge&logo=mysql&logoColor=white">
<img src="https://img.shields.io/badge/xampp-FB7A24?style=for-the-badge&logo=xampp&logoColor=white">
</div>


## ERP Diagram 

<img src="https://user-images.githubusercontent.com/61787171/234761044-e2db9bc6-e372-4cd2-96a0-4a0b03d6179f.png" >

### 🧾 테이블 명 및 구성설명

### 1. info : 경기장 및 근처 역 정보, 거리 데이터
  - stdm(경기장)
  - station(인접 역)
  - dist(인접 역까지 거리)

### 2. play : 2018년 경기 정보 데이터
  - stdm(경기장)
  - w_date(날짜)
  - w_time(경기 시간)
  - w_week(경기 요일)
  - ctgry (경기 종류) : 1은 축구, 2는 야구
  - bef_two_h(경기 시작 2시간전 인원 수)
  - bef_one_h(경기 시작 1시간전 인원 수)
  - run_h(경기 시작 시간 인원 수)

### 3. play2 : 2019년 경기 정보 데이터
  - stdm(경기장)
  - w_date(날짜)
  - w_time(경기 시간)
  - w_week(경기 요일)
  - ctgry (경기 종류) : 1은 축구, 2는 야구
  - bef_two_h(경기 시작 2시간전 인원 수)
  - bef_one_h(경기 시작 1시간전 인원 수)
  - run_h(경기 시작 시간 인원 수)

### 4. play3 : 2020년 경기 정보 데이터
  - stdm(경기장)
  - w_date(날짜)
  - w_time(경기 시간)
  - w_week(경기 요일)
  - ctgry (경기 종류) : 1은 축구, 2는 야구
  - bef_two_h(경기 시작 2시간전 인원 수)
  - bef_one_h(경기 시작 1시간전 인원 수)
  - run_h(경기 시작 시간 인원 수)

### 5. season_info : 개최되는 경기 시즌 정보
  - season_type(경기 시즌 종류): 0,1,2로 숫자로 구분
  - season_name (season type가 0은 없음,1은 시범경기, 2는 정규 시즌, 3은 포스트시즌)

### 6. line_info : 역과 역이 있는 호선 정보
  - line(호선)
  - station(역)

### 7. byday : 역별 하루 시간대별 평균 이용 인원
  - line(호선) 
  - station(역)
  - ride_ctg(승/하차 종류)
  - before_6 (6시 전 이용인원)
  - 6_to_7 (6시-7시 이용인원)
  - 7_to_8 (7시-8시 이용인원)
  - 8_to_9 (8시-9시 이용인원)
  - 9_to_10 (9시-10시 이용인원)
  - 10_to_11 (10시-11시 이용인원)
  - 11_to_12 (11시-12시 이용인원)
  - 12_to_13 (12시-13시 이용인원)
  - 13_to_14 (13시-14시 이용인원)
  - 14_to_15 (14시-15시 이용인원)
  - 15_to_16 (15시-16시 이용인원)
  - 16_to_17 (16시-17시 이용인원)
  - 17_to_18 (17시-18시 이용인원)
  - 18_to_19 (18시-19시 이용인원)
  - 19_to_20 (19시-20시 이용인원)
  - 20_to_21 (20시-21시 이용인원)
  - 21_to_22 (21시-22시 이용인원)
  - 22_to_23 (22시-23시 이용인원)
  - after_23 (23시 이후 이용인원)

### 8. bymonth :역별 월별 평균 이용 인원
  - line (호선)
  - station (역)
  - January (1월달 평균 이용 인원) 
  - feburary (2월달 평균 이용 인원)
  - march (3월달 평균 이용 인원)
  - april (4월달 평균 이용 인원)
  - may (5월달 평균 이용 인원)
  - june (6월달 평균 이용 인원)
  - july (7월달 평균 이용 인원)
  - august (8월달 평균 이용 인원)
  - september (9월달 평균 이용 인원)
  - october (10월달 평균 이용 인원)
  - november (11월달 평균 이용 인원)
  - december (12월달 평균 이용 인원)

### 9. rank_out_day : 하루 역별 이용인원 순위
  - station (역)
  - people (이용 하차 인원)

### 10. user_info : 사용자 로그인 정보
  - name (사용자 아이디)
  - pass


## PHP 연결 구조


login.php (로그인 첫 화면) -> main.php (검색 설정 화면) ->connect.php(결과 화면)

| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└>edit.php(비밀번호 변경 화면)-> edited.php(변경 완료화면)

└> singup.php(회원가입 화면) -> register.php(회원가입 완료 화면) 

└> bye.php(회원탈퇴 화면) -> byebye.php(회원탈퇴 완료 화면)


## 서비스 화면


https://user-images.githubusercontent.com/61787171/234763980-b8f1d9fd-b718-449c-83f4-f71039f18d48.mp4




