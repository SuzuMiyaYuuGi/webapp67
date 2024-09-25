<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show Inserting data</title>
    <link rel="stylesheet"  href="style1.css">
</head>
<body>
<form method="post" action="cusmov_insertsuccess.php">
        
        <p>

        <label>Member ID</label>
        <input type="text" name="Cus_ID" id="Cus_ID">

        </p>

        <p>

        <label>Movie ID</label>
        <input type="text" name="Movie_ID" id="Movie_ID">

        </p>

        <p>

            <label>ชื่อสมาชิก</label>
            <input type="text" name="Cus_Name" id="Cus_Name">

        </p>

        <p>

            <label>นามสกุลสมาชิก</label>

            <input type="text" name="Cus_LastName" id="Cus_LastName">

        </p>

        <p>

            <label>ชื่อหนัง</label>

            <input type="text" name="Movie_Name" id="Movie_Name">

        </p>
        <input type="submit" value="บันทึก">
        <a href='cusmov_mainmenu.php'> <button type = "button">Back</button></a>
    </form>

</body>
</html>