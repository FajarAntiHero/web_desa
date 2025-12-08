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

    function getComment($product_id) {
        global $koneksi;
       $query = "SELECT 
                comment_time_send, 
                comment_text, 
                comment_date_send 
              FROM 
                product_comment 
              WHERE 
                product_id = '$product_id'";

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