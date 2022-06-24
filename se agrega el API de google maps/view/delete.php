<?php
include_once '../model/config.php';

$id = $_GET['id'];

$sql = 'DELETE FROM usuarios WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute(['id'=>$id]);

header("Location:list.php");