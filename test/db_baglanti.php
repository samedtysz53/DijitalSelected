<?php
session_start();
//SESSİON START BURADA VERDİĞİM İÇİN BU SAYFAYI İNCLUDE ETTİĞİM YERLERDE YAZMAMA GEREK KALMADI.
try {
  $db = new PDO("mysql:host=localhost;dbname=uyelik", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)));
} catch (PDOException $e) {
  print $e->getMessage();
}
/*
### bağlantı cümlesinin kullanımı
try {
  $db = new PDO("mysql:host=localhost;dbname=VERITABANI_ADI", "VERITABANI_KULLANICI_ADI", "VERITABANI_KULLANICI_SIFRESI", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)));
} catch (PDOException $e) {
  print $e->getMessage();
}
*/

?>