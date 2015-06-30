<?php

class DB_Functions {

    private $db;

    //put your code here
    // constructor
    function __construct() {
        include_once './db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->db->connect();
    }

    // destructor
    function __destruct() {
        
    }

    /**
     * Storing new user
     * returns user details
     */
    public function storeUser($ad, $soyad, $telefon, $kod, $zaman, $alan_ad, $alan_soyad, $alan_adres, $alan_not) {
        // insert user into database
        $result = mysql_query("INSERT INTO clientorders(ad, soyad, telefon, zaman, kod, a_ad, a_soyad, a_adres, a_not, created_at) VALUES('$ad', '$soyad', '$telefon','$zaman','$kod','$alan_ad','$alan_soyad','$alan_adres','$alan_not', NOW())");
        // check for successful store
        if ($result) {
            // get user details
            $siraNo = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM clientorders WHERE siraNo = $siraNo") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) {
                return mysql_fetch_array($result);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

  
    /**
     * Getting all users
     */
    public function getAllUsers() {
        $result = mysql_query("select * FROM clientorders");
        return $result;
    }
    
    


}

?>