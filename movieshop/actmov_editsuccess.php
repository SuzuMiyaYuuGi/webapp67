<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editting data</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
        <?php
            require 'conn.php';
            $sql_update="UPDATE actormovie SET Act_Name='$_POST[Act_Name]',Act_LastName='$_POST[Act_LastName]' ,MovieName='$_POST[Movie_Name]' WHERE Act_ID='$_POST[Act_ID] ,Movie_ID='$_POST[Movie_ID]' ";
            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

                echo "<script>alert('Edit Successful'); window.location.href = 'actmov_mainmenu.php';</script>";
                header("refresh: 1; url=actmov_mainmenu.php");
            }

        ?>

</body>
</html>