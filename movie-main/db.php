<?php
// 資料庫連線設定（XAMPP 預設）
$servername = "localhost";
$username = "root";
$password = "";  // XAMPP 預設無密碼
$dbname = "movie";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

// 設定字集為 utf-8
$conn->set_charset("utf8mb4");

// 可選：輸出成功訊息（開發用）
// echo "連線成功";
?>
