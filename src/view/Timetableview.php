<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Idopontok</title>
    <link href="../view/style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h2>Valami</h2>
<table border="2px">
<?php $apadpicsaja=array('H','K','Sz','Cs','P');?>

    <?php for($i=15;$i<19;$i++): ?>
 <tr>
     <?php for($j=0;$j<5;$j++) : ?>
     <td class="apad">
         <a href="ReservationController.php?day=<?=$apadpicsaja[$j]?>&time=<?= $i?>">
     <?= $apadpicsaja[$j].": ".$i." óra"?>
         </a>
     </td>
     <?php endfor; ?>
 </tr>
    <?php endfor; ?>




</table>


</body>
</html>
