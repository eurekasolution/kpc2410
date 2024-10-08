Readme dafd

https://github.com/eurekasolution/kpc2410

http://localhost



main()
{
    a();
    printf("a");
    b();
    printf("b");
    c();
    printf("c");
    fflush(stdout); // ob.flush()
    d();
    printf("d");
     fflush(stdout);
    e();
    printf("e");
     fflush(stdout);
}

a
b

create table members (
    idx integer auto_increment primary key,
    id  varchar(20) unique,
    pass varchar(50),
    name varchar(20)
);

insert into members (id, pass, name) values ('test', '1111', '테스트');
insert into members (id, pass, name) values ('admin', '1111', '관리자');

ㅁ

ALTER DATABASE kpc CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
ALTER TABLE members CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


$id : test
$pass : 1234

select * from members where id='test' and pass='1234'
id : xxx' or 2>1 limit 1, 1 -- 
$sql = "select * from members where id='$id' and pass='$pass' ";
$sql = "select * from members where id='xxx' or 2>1 -- ' and pass='$pass' ";

localhost/phpmyadmin

다음과 같은 조건의 index.php 파일을 하나 만들어줘.
- HTML5, bootstrap5를 이용
- <body>의 상단에는 navbar를 이용해서 메뉴를 구성
- 메뉴1, 메뉴2, 메뉴3을 드랍다운 형태로 구성
- 메뉴1에는 메뉴1-1, 메뉴1-2가 있음.
- 메뉴2에는 메뉴2-1, 메뉴2-2가 있음.
- 메뉴3에는 메뉴3-1, 메뉴3-2가 있음.

- 메뉴아래에는 세션정보를 이용해서 $_SESSION["sess_id"]가 있으면 홍길동님 <button>로그아웃</button>
_ 세션정보가 없으면 아이디(id), 비번(pass)으로 로그인 입력창 만들기

- body에는 $cmd = $_GET["cmd"]; 에서 $cmd가 없으면 init.php를 include하고, $cmd가 있으면 include "$cmd.php"



login.php 를 다운받아서 login.php 파일을 만들고 붙여넣기 후 저장(Ctrl+s)

172.30.1.72

javascript:alert(document.cookie);

$data["content"]

안녕하세요
<script>
    for(var i=1; i<=3; i++) alert(i);
</script>

<  : &lt;
>  : &gt;

HTML : Hyper Text Markup Language

<b>동해물과<u>백두산이</u></b> 마르고 닳도록


1.2.3.4

0000000
1111111

0000 0000
0111 1111 0~ 127 : A class
1000 0000 1011 111 : 128 : 191 B class

150.30.*. *

1100 0000 1101111

Web proxy


https://www.security.org/how-secure-is-my-password/ 

create table bbs (
    idx integer auto_increment primary key,
    title   varchar(100),
    name    varchar(100),
    html    mediumtext,
    time    datetime
);

bbs table 스키마가 위와 같아.
다음 조건을 만족하는 bbs.php 파일을 하나 제안해 줘.
- HTML5와 Bootstrap5로 구성
- index.php파일은 $cmd = $_GET["cmd"];일 때 $cmd가 없으면 include "init.php"
- $cmd가 있을 때는 include "$cmd.php"로 동작
- bbs는 $mode로 동작을 구분
- $mode = $_GET["mode"];
- $mode 가 없으면 $mode = "list";
- $mode에는 글쓰기(write), 목록보기(list), 글보기(show)가 있음.
- 목록 보기는 bbs테이블의 정보를 제목, 작성자, 작성일을 테이블 형태로 표시
- 목록의 제목을 클릭하면 index.php?cmd=bbs&mode=show&idx=키값
- 목록보기 하단에는 "글쓰기" 버튼
- 글쓰기 버튼은 index.php?cmd=bbs&mode=write로 이동
- 글쓰기는 제목(title) 작성자(name), 내용(html)을 입력 받아 등록버튼 클릭시 mode=db_write에서
  bbs테이블에 등록버튼
- 글내용 보기는 idx값을 보고 bbs테이블 정보를 가져와 출력


http://www.daum.net
https://zaproxy.org


<img src='a.jpg' alt='보안강의'>