
<?php
$json = array();


if (isset($_POST["alan_not"]) && isset($_POST["alan_adres"]) && isset($_POST["alan_soyad"]) && isset($_POST["alan_ad"]) && isset($_POST["kod"]) && isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["telefon"])&& isset($_POST["zaman"])) {
    $kod = $_POST["kod"];
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