<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $sql = "select * from members where id='$id' and pass='$pass' ";
    echo "sql = $sql<br>";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if($data){
        echo "id = $data[id]<br>";
        $_SESSION["sess_id"] = $data["id"];
        $_SESSION["sess_name"] = $data["name"];
        $msg = "안녕하세요";
    }else
    {
        $msg = "아이디와 비번을 입력하세요.";
    }

    echo "
    <script>
        alert('$msg');
        location.href='index.php';
    </script>
    ";
        
?>