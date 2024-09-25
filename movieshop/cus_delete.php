<?php
require 'conn.php';

// รับค่า ID ของนักศึกษาที่ต้องการลบจาก URL
$Cus_ID = $_GET['Cus_ID'];

// สร้างคำสั่ง SQL เพื่อลบข้อมูล
$sql = "DELETE FROM customer WHERE Cus_ID = '$Cus_ID'";

// ดำเนินการลบข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: cus_mainmenu.php"); // เปลี่ยนไปยังหน้าแสดงข้อมูลนักศึกษา
} else {
    echo "Error deleting record: " . $conn->error;
}s

$conn->close();
?> 