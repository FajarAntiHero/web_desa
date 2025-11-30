<?php
    require_once 'connection.php';

    $getData = new Database("localhost", "root", "", "product_database", "../initiation/product_query.sql");
    $koneksi = $getData->getConnection();

    // Get All News
    function getAllProducts() {
        global $koneksi;
        $query = "SELECT * FROM product_table";
        $result = $koneksi->query($query);
        $news = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $news[] = $row;
            }
        }
        return $news;
    }

?>