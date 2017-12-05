<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Idopontok</title>
    <link href="../view/style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<form method="get" action="ReservationController.php">

<input type="hidden" name="day" value="<?= $_GET["day"]?>">
    <input type="hidden" name="hour" value="<?= $_GET["time"]?>">
    <input type="text" name="name"><br>
    <input type="submit" name="submit">



</form>

</body>
</html>