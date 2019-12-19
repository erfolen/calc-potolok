<?php
function clearStr($data){
    global $link;
    mysqli_real_escape_string(link, trim(strip_tags($data)));
}
function clearInt($data){
    return abs((int)($data));
}
/*function addZakaz($name, $telefon, $id_materia, $id_lampa){
    global $link;
    $sqlZakaz = "INSERT INTO zakaz(name,telefon, id_materia, id_lampa) VALUES (?, ?, ?, ?)";
    if (!$stmt = mysqli_prepare($link, $sqlZakaz))
        return false;
    mysqli_stmt_bind_param($stmt, ssii, $name, $telefon, $id_materia, $id_lampa);
    mysqli_stmt_execute($stmt);
}
*/
