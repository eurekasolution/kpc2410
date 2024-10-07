<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $sql = "select * from members where id='$id' and pass='$pass' ";
    echo "sql = $sql<br>";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    echo "id = $data[id]<br>";
?>