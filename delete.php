<?php

require_once "config.db.php";
$dataJSON = json_decode(file_get_contents('php//input'), true);
$massage = array();

$id =$_GET['id'];

$delete = "DELETE FROM 'members' WHERE 'id' = '$id' ";
$qr_delete = mysqli_query($conn,$delete);

