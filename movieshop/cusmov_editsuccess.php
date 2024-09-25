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
            $sql_update="UPDATE customermovie SET Cus_Name='$_POST[Cus_Name]',Cus_LastName='$_POST[Cus_LastName]' ,MovieName='$_POST[Movie_Name]' WHERE Cus_ID='$_POST[Cus_ID] ,Movie_ID='$_POST[Movie_ID]' ";
            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

                echo "<script>alert('Edit Successful'); window.location.href = 'cusmov_mainmenu.php';</script>";
                header("refresh: 1; url=cusmov_mainmenu.php");
            }

        ?>

</body>
</html>