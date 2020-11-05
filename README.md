# Web-programming
2019년 2학년 1학기 FE, BE 개인 개발 과제
## [목차]

1. 웹사이트 기획

2. 웹사이트 구조도<br>
	- 웹사이트 사이트 맵
	- 웹페이지 파일 목록
  
3. 웹사이트 디자인
	- 내용스케치

4. 데이터베이스 설계
	- 데이터 모델 다이어그램
	- 테이블 구조

5. 웹사이트 구현결과<br><br>



# 1. 웹사이트 기획

##  기말프로젝트 주제

- 사진작가를 위한 개인 포트폴리오 및 촬영 예약 홈페이지 제작


## 개략적인 소개글

사진작가가 꿈인 동생을 위한 포토그래퍼 개인 홈페이지 제작.

- HOME : 홈. 3-4장의 사진이 배경으로 재생됨.<br>
- PORTFOLIO : 포토그래퍼의 역량과 경력, 주요 촬영 컨셉들을 알 수 있는 페이지<br>
- WORKS : 포토그래퍼가 작업한 사진과 일들을 전시하고 어디서 촬영했는지 알 수 있는 갤러리<br>
- RESERVATION : 촬영을 원하는 사람들이 촬영 예약을 할 수 있는 페이지<br>
- ABOUT ME : 작가 개인 소개와 SNS링크, 게시판, 작가에게 연락하기, 스튜디오 지도와 동영상을 볼 수 있는 페이지.<br><br><br>

# 2. 웹사이트 구조도
■ 웹사이트 사이트 맵<br>
![1](https://user-images.githubusercontent.com/40741363/98289433-88ede600-1feb-11eb-8a3f-dce37adc7f99.png)<br><br>
■ 웹페이지 파일 목록<br>
dbconn.php  // photographer db접속<br>
Home.php // 홈 화면<br>
Portfolio.php //포트폴리오<br>
Works.php // 작업물<br>
contect.php // 컨텍화면<br>
contectproc.php // 촬영 예약등록 처리<br>
aboutme.php //작가소개, 메시지보내기, 게시글 보기<br>
Login.html // 로그인 양식 폼<br>
login.php // 로그인<br>
logout.php // 로그아웃<br>
SignIn.html // 회원가입 양식 폼<br>
signin.php // 회원가입<br>
message.php //contect 메세지처리<br>
writeboard.php //게시글작성<br>
writeboardproc.php // db연결<br>
showboarditem.php //게시글 보기<br>
board.css //게시판 디자인 css<br>
camera.ico //파비콘<br>
<br><br><br><br>
# 3. 웹사이트 디자인 <br>
(웹사이트의 메인페이지부터 각 연결페이지의 내용 스케치)<br><br>
■ 화면스케치<br>
![2](https://user-images.githubusercontent.com/40741363/98289955-4973c980-1fec-11eb-89d0-8868e19ce841.PNG)
![3](https://user-images.githubusercontent.com/40741363/98289960-4aa4f680-1fec-11eb-8f4e-389748b1d829.PNG)<br><br><br>


# 4. 데이터베이스 설계
### 데이터 모델 다이어그램<br>
  ![111](https://user-images.githubusercontent.com/40741363/98291687-e5063980-1fee-11eb-8857-5b471196293a.png)<br><br>
### 테이블 구조 <br>
  ![222](https://user-images.githubusercontent.com/40741363/98291697-e7689380-1fee-11eb-8e2f-b8ff7b9f3d40.PNG)<br><br><br>

ㅊ
# 5. 웹사이트 구현결과
![4](https://user-images.githubusercontent.com/40741363/98290666-5218cf80-1fed-11eb-9421-f3ce406d7370.PNG)<br><br>
![5](https://user-images.githubusercontent.com/40741363/98290674-53e29300-1fed-11eb-9d5a-55b51e2deb9c.PNG)<br><br>
![6](https://user-images.githubusercontent.com/40741363/98290675-53e29300-1fed-11eb-94c5-9d0d8503105b.PNG)<br><br>
![7](https://user-images.githubusercontent.com/40741363/98290677-547b2980-1fed-11eb-88b5-968e54b9b18a.PNG)<br><br>
![8](https://user-images.githubusercontent.com/40741363/98290679-547b2980-1fed-11eb-8f43-42bae4135727.PNG)<br><br>
![9](https://user-images.githubusercontent.com/40741363/98290680-5513c000-1fed-11eb-985c-77f57d05ed00.PNG)<br><br>
![10](https://user-images.githubusercontent.com/40741363/98290681-5513c000-1fed-11eb-91f5-2291db0633a4.PNG)<br><br>
![11](https://user-images.githubusercontent.com/40741363/98290683-55ac5680-1fed-11eb-9827-d6bf59261f9c.PNG)<br><br>
![12](https://user-images.githubusercontent.com/40741363/98290684-55ac5680-1fed-11eb-9a10-4ab6c429a210.PNG)<br><br>
![13](https://user-images.githubusercontent.com/40741363/98290685-5644ed00-1fed-11eb-8a83-f4cdd77df21f.PNG)<br><br>
![14](https://user-images.githubusercontent.com/40741363/98290686-5644ed00-1fed-11eb-921c-fc68ac2446d3.PNG)<br><br>
![15](https://user-images.githubusercontent.com/40741363/98290688-56dd8380-1fed-11eb-8421-b9f46ae4ba3f.PNG)<br><br>
![333](https://user-images.githubusercontent.com/40741363/98291699-e8012a00-1fee-11eb-8d35-8b1c2ed82266.PNG)<br><br>
![444](https://user-images.githubusercontent.com/40741363/98291700-e8012a00-1fee-11eb-8fb7-712c10f5cb0d.PNG)<br><br>
![555](https://user-images.githubusercontent.com/40741363/98291701-e899c080-1fee-11eb-8f97-c77f2c1cf091.PNG)<br><br>
![666](https://user-images.githubusercontent.com/40741363/98291704-e9325700-1fee-11eb-9ec9-e3b459b8cd69.PNG)<br><br>
![777](https://user-images.githubusercontent.com/40741363/98291707-e9325700-1fee-11eb-842d-8bc7977c78a5.PNG)<br><br>
![888](https://user-images.githubusercontent.com/40741363/98291992-55ad5600-1fef-11eb-8cf5-5de148568492.PNG)<br><br>
![999](https://user-images.githubusercontent.com/40741363/98291993-56de8300-1fef-11eb-9e57-771c0da56c6b.PNG)<br><br>
![1010](https://user-images.githubusercontent.com/40741363/98291997-57771980-1fef-11eb-84f7-b14b589d737d.PNG)<br><br>
