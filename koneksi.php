<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4905138_dev"; //root
    private $password = "ariani13"; //""
    private $db = "id4905138_stok_barang";
    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>