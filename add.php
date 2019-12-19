<?php
require 'config.php';
require 'lib.php';

$material=$_POST['material'];
$uroven=clearInt($_POST['uroven']);
$dlina=clearInt($_POST['dlina']);
$schirina=clearInt($_POST['schirina']);
$plosh=$schirina*$dlina;
$lampa=$_POST['lampa'];
$kol=clearInt($_POST['kol']);
$sqlPriceM="SELECT price FROM materia WHERE name ='$material'";
$resultM=mysqli_query($link,$sqlPriceM);
$itemsM=mysqli_fetch_all($resultM,MYSQLI_ASSOC);
$priceM=$itemsM[0]["price"];
$sqlPriceL="SELECT price FROM lampa WHERE name ='$lampa'";
$resultL=mysqli_query($link,$sqlPriceL);
$itemsL=mysqli_fetch_all($resultL,MYSQLI_ASSOC);
$priceL=$itemsL[0]["price"];
?>
Предварительная стоимость: <?=$res=$priceM*$dlina*$schirina+$uroven*100+$priceL*$kol?>. Укажите ваши данные и мы вам перезвоним!
<form action="add2.php" method="post">
    <label>Ваше имя</label><br>
    <input name="name" required type="text"><br>
    <label>Телефон</label><br>
    <input name="telefon" required type="text"><br><br>
    <input type="submit" value="Перезвоните мне">
</form>
<?php
$nameZ=$_POST['name'];
$telefonZ=$_POST['telefon'];
$message="$nameZ.' : '.$telefonZ/r/n $material.' : '.$plosh.' : '$uroven/r/n$lampa.' : '.$kol/r/nИтого : $res";
mail('tiangleweb@icloud.com','Заказ',$message);
?>