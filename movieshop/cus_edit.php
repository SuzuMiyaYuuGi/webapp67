<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editting Customer</title>
    <link rel="stylesheet"  href="style1.css">

</head>
<body>
<?php
        if(!isset($_GET['Cus_ID'])){
            header("refresh: 0; url=cus_mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM customer WHERE Cus_ID='$_GET[Cus_ID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="cus_editsuccess.php">
        <p>

            <label>ID</label>
            <input type="text" name="Cus_ID" id="Cus_ID" value="<?=$row['Cus_ID'];?>" hidden>
            <input type="text" name="Cus_ID" id="Cus_ID" value="<?=$row['Cus_ID'];?>" />

        </p>

        <p>

            <label>ชื่อ</label>
            <input type="text" name="Cus_ID" id="Cus_ID" value="<?=$row['Cus_ID'];?>" hidden>
            <input type="text" name="Cus_Name" id="Cus_Name" value="<?=$row['Cus_Name'];?>" />

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="Cus_LastName" id="Cus_LastName" value="<?=$row['Cus_LastName'];?>" />

        </p>

        <p>

            <label>ที่อยู่</label>

            <input type="text" name="Cus_Address" id="Cus_Address" value="<?=$row['Cus_Address'];?>" />

        </p>

        <p>

            <label>เบอร์โทร</label>

            <input type="text" name="Cus_PhoneCall" id="Cus_PhoneCall" value="<?=$row['Cus_PhoneCall'];?>" />

        </p>
        <input type="submit" value="บันทึก">
        <a href='cus_mainmenu.php'><button type = "button">Back</button></a>
    </form>

</body>
</html>