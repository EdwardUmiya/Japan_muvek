<?php
require_once "db.php";
$sql="select * from kategoria";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>