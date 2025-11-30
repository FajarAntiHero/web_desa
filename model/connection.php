<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "db_contoh"; 
    private $sql_file = "setup_tabel.sql";
    private $sql_seed = "";

    public $koneksi;

    public function __construct($host, $user, $password, $database, $sql_file) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->sql_file = $sql_file;          
        
        // Flag untuk menandai apakah database baru saja dibuat
        $db_baru_dibuat = false;

        // 1. Coba koneksi ke MySQL Server tanpa menyebut database
        $server_koneksi = new mysqli($this->host, $this->user, $this->password);
        if ($server_koneksi->connect_error) {
            die("Koneksi ke MySQL Server gagal: " . $server_koneksi->connect_error);
        }

        // 2. Cek apakah database sudah ada
        $db_check_query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$this->database'";
        $result = $server_koneksi->query($db_check_query);

        if ($result && $result->num_rows == 0) {
            // Database belum ada, maka buat database
            // echo "Database **'$this->database'** tidak ditemukan. Mencoba membuat database...<br>";
            $sql_create_db = "CREATE DATABASE $this->database";
            
            if ($server_koneksi->query($sql_create_db) === TRUE) {
                // echo "Database **'$this->database'** berhasil dibuat!<br>";
                // Set flag ke TRUE
                $db_baru_dibuat = true; 
            } else {
                die("Gagal membuat database: " . $server_koneksi->error);
            }
        }
        
        // $server_koneksi->close();

        // 3. Buat koneksi final ke database spesifik
        $this->koneksi = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->koneksi->connect_error) {
            die("Koneksi final ke database **'$this->database'** gagal: " . $this->koneksi->connect_error);
        }
        
        // 4. Jalankan Setup SQL HANYA JIKA database baru dibuat
        if ($db_baru_dibuat) {
            $this->jalankanSetupSQL();
        } else {
            // echo "Database **'$this->database'** sudah ada. Melewati setup tabel.<br>";
        }
        
        // echo "Koneksi ke **'$this->database'** siap digunakan!<br>";
    }

    // --- (Method jalankanSetupSQL() dan getConnection() tetap sama) ---
    
    /**
     * Membaca dan menjalankan semua perintah SQL dari file eksternal.
     * Catatan: Syntax CREATE TABLE IF NOT EXISTS di dalam file SQL sudah menjamin 
     * bahwa tabel tidak akan dibuat ulang jika sudah ada.
     */
    private function jalankanSetupSQL() {
        if (!file_exists($this->sql_file)) {
            echo "Peringatan: File SQL setup **'$this->sql_file'** tidak ditemukan.<br>";
            return;
        }

        $sql_content = file_get_contents($this->sql_file);
        // echo $sql_content;
        
        if ($this->koneksi->multi_query($sql_content)) {
            // echo "Struktur tabel awal berhasil di-setup dari file **'$this->sql_file'**.<br>";

            // Pembersihan hasil multi_query
            do {
                if ($result = $this->koneksi->store_result()) {
                    $result->free();
                }
            } while ($this->koneksi->more_results() && $this->koneksi->next_result());

        } else {
            echo "Gagal menjalankan setup SQL: " . $this->koneksi->error . "<br>";
        }
    }

    public function getConnection() {
        return $this->koneksi;
    }

    public function closeConnection() {
        if ($this->koneksi) {
            $this->koneksi->close();
        }
    }
}

?>