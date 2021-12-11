<?php
require_once "db.php";
$aaz=$_GET['aaz'];
$nev=$_GET['nev'];
$kiado=$_GET['kiado'];
$reszek=$_GET['reszek'];

$sql="update animanga set nev='{$nev}',kiado='{$kiado}',reszek=$reszek where animanga.aaz=$aaz";
$stmt=$db->exec($sql);

if($stmt)
echo "sikeres update";
else
echo "sikertelen művelet!";

?>