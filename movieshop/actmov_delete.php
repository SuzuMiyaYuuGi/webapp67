<?php
require 'conn.php';

// รับค่า ID ของนักศึกษาที่ต้องการลบจาก URL
$Act_ID = $_GET['Act_ID'];

// สร้างคำสั่ง SQL เพื่อลบข้อมูล
$sql = "DELETE FROM actormovie WHERE Act_ID = '$Act_ID'";

// ดำเนินการลบข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: actmov_mainmenu.php"); // เปลี่ยนไปยังหน้าแสดงข้อมูลนักศึกษา
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 