<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editting Customer Movie</title>
    <link rel="stylesheet"  href="style1.css">

</head>
<body>
<?php
        if(!isset($_GET['Cus_ID'])){
            header("refresh: 0; url=cus_mainmenu.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM customermovie WHERE Cus_ID='$_GET[Cus_ID]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>

<form method="post" action="cusmov_editsuccess.php">
        <p>

            <label>Member ID</label>
            <input type="text" name="Cus_ID" id="Cus_ID" value="<?=$row['Cus_ID'];?>" hidden>
            <input type="text" name="Cus_ID" id="Cus_ID" value="<?=$row['Cus_ID'];?>" />

        </p>

        <p>

            <label>Movie ID</label>
            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" hidden>
            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" />
        </p>

        <p>

            <label>ชื่อสมาชิก</label>
            <input type="text" name="Cus_ID" id="Cus_ID" value="<?=$row['Cus_ID'];?>" hidden>
            <input type="text" name="Cus_Name" id="Cus_Name" value="<?=$row['Cus_Name'];?>" />


        </p>

        <p>

            <label>นามสกุลสมาชิก</label>

            <input type="text" name="Cus_LastName" id="Cus_LastName" value="<?=$row['Cus_LastName'];?>" />
        </p>

        <p>

            <label>ชื่อหนัง</label>

            <input type="text" name="Movie_ID" id="Movie_ID" value="<?=$row['Movie_ID'];?>" hidden>
            <input type="text" name="Movie_Name" id="Movie_Name" value="<?=$row['Movie_Name'];?>" />
        </p>
        <input type="submit" value="บันทึก">
        <a href='cusmov_mainmenu.php'><button type = "button">Back</button></a>
    </form>

</body>
</html>