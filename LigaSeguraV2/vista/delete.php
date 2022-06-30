<?php
include_once '../modelo/config.php';

$id = $_GET['id'];

$sql = 'DELETE FROM usuarios WHERE id=:id';
$query = $pdo->prepare($sql);
$query->execute(['id'=>$id]);

header("Location:lista.php");