
<?php
$json = array();
$kod = $_POST["kod"];

if($kod==0)
{
    $ad = $_POST["ad"];
    $telefon = $_POST["telefon"];
    $adres = $_POST["adres"];
    $email = $_POST["email"];
    include_once 'db_functions.php';
    
    $db = new DB_Functions();


    $res = $db->storeCorporateUser($ad, $telefon, $adres, $email);
    $subject = "Ad=" . $ad  . " \nTelefon = " . $telefon ." \nAdres = ".$adres. " \nE-mail= " . $email;
 
    $success = mb_send_mail("admin@cicekbornova.com", "Kurumsal_talep", $subject, "admin@cicekbornova.com");

}else{
    
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $telefon = $_POST["telefon"];
    $zaman = $_POST["zaman"];
    $alan_ad = $_POST["alan_ad"];
    $alan_soyad = $_POST["alan_soyad"];
    $alan_adres = $_POST["alan_adres"];
    $alan_not = $_POST["alan_not"];
    include_once './db_functions.php';


    $db = new DB_Functions();


    $res = $db->storeUser($ad, $soyad, $telefon, $kod, $zaman, $alan_ad, $alan_soyad, $alan_adres, $alan_not);
    $subject = "Ad=" . $ad . " \nSoyad= " . $soyad . " \nTelefon = " . $telefon ." \nZaman = ".$zaman. " \nUrun kodu= " . $kod. " \nAlicinin Adi= " . $alan_ad. " \n        Soyadi= " . $alan_soyad. " \n        Adresi= " . $alan_adres. " \n        Notu= " . $alan_not;
 
    $success = mb_send_mail("admin@cicekbornova.com", "yeni talep", $subject, "admin@cicekbornova.com");
    
}
?>