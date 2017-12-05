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
<?php $apadpicsaja=array('Hetfo','Kedd','Szerda','Csütörtök','Péntek');?>

    <?php for($i=15;$i<19;$i++): ?>
 <tr>
     <?php for($j=0;$j<5;$j++) : ?>
     <td class="apad">
     <?= $apadpicsaja[$j].": ".$i." óra"?>
     </td>
     <?php endfor; ?>
 </tr>
    <?php endfor; ?>















</table>


</body>
</html>
