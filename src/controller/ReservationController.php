+
<?php
if(isset($_GET['day'])&&isset($_GET['time'])&&$_GET['day']!=null&&$_GET['time']!=null)
{
    require ("../view/ReservationView.php");

  //  if(isset($_GET['submit']))

}
function isTimeValid($time)
{
    if(15<=$time&&$time<=18)
    {
        return true;

    }else
    {
        return false;
    }

}

function isValidDay($day)
{

    switch ($day) {
        case "H":
            echo 1;
            break;
        case "K":
            echo 2;
            break;
        case "Sz":
            echo 3;
            break;
        case "Cs":
            echo 4;
            break;
        case "P":
            echo 5;
            break;
        default:return false;
            break;
    }
}
?>