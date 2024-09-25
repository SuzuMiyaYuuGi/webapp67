<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show Inserting data</title>
    <link rel="stylesheet"  href="style1.css">
</head>
<body>
<form method="post" action="actmov_insertsuccess.php">
        
        <p>

        <label>Actor ID</label>
        <input type="text" name="Act_ID" id="Act_ID">

        </p>

        <p>

        <label>Movie ID</label>
        <input type="text" name="Movie_ID" id="Movie_ID">

        </p>

        <p>

            <label>ชื่อนักแสดง</label>
            <input type="text" name="Act_Name" id="Act_Name">

        </p>

        <p>

            <label>นามสกุลนักแสดง</label>

            <input type="text" name="Act_LastName" id="Act_LastName">

        </p>

        <p>

            <label>ชื่อหนัง</label>

            <input type="text" name="Movie_Name" id="Movie_Name">

        </p>
        <input type="submit" value="บันทึก">
        <a href='actmov_mainmenu.php'> <button type = "button">Back</button></a>
    </form>

</body>
</html>