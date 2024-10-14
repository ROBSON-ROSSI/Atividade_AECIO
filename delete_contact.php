<?php
session_start();
if (!$_SESSION["logado"]) {
   header('Location: index.php');
}
require_once 'DatabaseRepository.php';

$id = $_GET['id'];
DatabaseRepository::deleteContact($id);
header('Location: list_contacts.php');
exit;