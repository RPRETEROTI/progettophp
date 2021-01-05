<?php
session_start();
if (isset($_SESSION["utente"])) {
  $ut = $_SESSION["utente"];
  header("Location:homepage.php?profilo=$ut");
  exit();
} else {
  header("Location:homepage.php");
  exit();
}
