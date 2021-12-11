<?php
require_once "db.php";
$sql="select *,animanga.nev as animenev,tipus.nev as tipusnev, kategoria.nev as kategorianev from animanga inner join kategoria on kategoriaaz=kaz inner join tipus on tipusaz=taz";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>