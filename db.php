<?php
// 데이터베이스 연결 정보
$dbHost = "localhost";
$dbName = "kpc";
$dbUser = "kpc";
$dbPass = "1111";

// 데이터베이스 연결 함수
function connectDB() {
    global $dbHost, $dbName, $dbUser, $dbPass;
    
    // MySQL 데이터베이스에 연결 시도
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    
    // 연결 확인
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // 연결 성공 시 $conn 반환
    return $conn;
}

// 연결 예시
$conn = connectDB();
if ($conn) {
    echo "DB 연결 성공!";
}
?>
