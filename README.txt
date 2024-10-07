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
