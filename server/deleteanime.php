<?php
require_once "db.php";
if(isset($_GET['aaz'])){
$sql="delete from animanga where aaz={$_GET['aaz']}";
$stmt=$db->exec($sql);
if($stmt)
echo "sikeres törlés";
else
echo "sikertelen művelet!";
}
?>