<?php
// Získání IP adresy klienta
$clientIP = $_SERVER['REMOTE_ADDR'];

// Seznam povolených IP adres
$allowedIPs = array("86.49.238.36", "89.102.254.59", "46.13.76.0");

// Kontrola, zda se IP adresa nachází v seznamu povolených IP adres
if (in_array($clientIP, $allowedIPs)) {
  // Přesměrování na další stránku nebo akci po úspěšném přihlášení
  header("Location: http://ghast.hostify.cz:39612/");
  exit();
} else {
  echo "Neplatná IP adresa!";
}
?>
