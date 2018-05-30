<?php
class Koneksi {
    private $server = "localhost";
    private $username = "fifidwi14@gmail.com"; //root
    private $password = "12345"; //""
    private $db = "id4905138_stok_barang";
    function getKoneksi() {
        return new mysqli($this->server, $this->username,
        $this->password, $this->db);
    }
}
?>