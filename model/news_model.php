<?php
    require_once 'connection.php';

    $getData = new Database("localhost", "root", "", "news_database", "../initiation/news_query.sql");
    $koneksi = $getData->getConnection();

    // Get All News
    function getAllNews() {
        global $koneksi;
        $query = "SELECT * FROM news";
        $result = $koneksi->query($query);
        $news = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $news[] = $row;
            }
        }
        return $news;
    }

    function getNewsPerPage($start, $limit) {
        global $koneksi;
        $query = "SELECT * FROM news LIMIT $start, $limit";
        // $stmt = $koneksi->prepare($query);
        // $stmt->bind_param("ii", $start, $limit);
        // $stmt->execute();
        // $result = $stmt->get_result();
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