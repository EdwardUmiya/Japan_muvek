<?php
require_once "db.php";
$nev=$_GET['nev'];
$kiado=$_GET['kiado'];
$resz=$_GET['resz'];
$mufaj=$_GET['mufaj'];
$tipus=$_GET['tipus'];

$sql="insert into `animanga`(`nev`, `kiado`, `reszek`, `kategoriaaz`, `tipusaz`) values ('${nev}','${kiado}','${resz}','${mufaj}','${tipus}')";
$stmt=$db->exec($sql);
if($stmt)
echo "sikeres insert";
else
echo "sikertelen művelet!";

?>