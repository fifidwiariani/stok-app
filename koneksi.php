<?php
class Koneksi {
    private $server = "localhost";
    private $username = "dev"; //root
    private $password = ""; //""
    private $db = "id4905138_stok_barang";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>