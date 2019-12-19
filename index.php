<?php
require 'config.php';
require 'lib.php';
require 'db.php';
?>
<form action="add.php" method="POST">
    <label>Материал потолка</label><br>
    <select name="material"><br>
        <? foreach ($items as $vib){

            ?>
            <option value="<?=$vib['name']?>"><?=$vib['name']?></option>
        <?}; ?>
    </select><br>
    <label>Кол-во уровней потолка</label><br>
    <input name="uroven" required type="int"><br>
    <label>Длина комнаты (м)</label><br>
    <input name="dlina" required type="int"><br>
    <label>Ширина комнаты (м)</label><br>
    <input name="schirina" required type="int"><br>
    <label>Выберете вид лампы</label><br>
    <select name="lampa"><br>
        <? foreach ($itLamp as $vib){
            ?>
            <option value="<?=$vib['name']?>"><?=$vib['name']?></option>
        <?}; ?>
    </select><br>
    <input type="hidden" name="priceL" value="<?=$vib['price']?>">
    <label>Кол-во источников света</label><br>
    <input name="kol" required type="int"><br><br>
    <input type="submit" value="Расчитать стоимость">
    </form>
