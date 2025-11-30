<?php
require_once 'connection.php';

$getData = new Database("localhost", "root", "", "news_database", "../initiation/news_query.sql");
$koneksi = $getData->getConnection();

// Get All News
function getAllNews() {
    global $koneksi;

    $query = "SELECT * FROM news";
    $stmt = $koneksi->prepare($query);
    if (!$stmt) throw new Exception("Prepare failed: " . $koneksi->error);

    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

// Pagination
function getNewsPerPage($start, $limit) {
    global $koneksi;

    $start = (int)$start;
    $limit = (int)$limit;

    $query = "SELECT * FROM news LIMIT ?, ?";
    $stmt = $koneksi->prepare($query);
    if (!$stmt) throw new Exception("Prepare failed: " . $koneksi->error);

    $stmt->bind_param("ii", $start, $limit);
    $stmt->execute();

    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

// Search
function searchNews($keyword) {
    global $koneksi;

    // no htmlspecialchars here (only for HTML output)
    $keyword = "%" . trim($keyword) . "%";

    $query = "SELECT * FROM news WHERE title LIKE ?";
    $stmt = $koneksi->prepare($query);
    if (!$stmt) throw new Exception("Prepare failed: " . $koneksi->error);

    $stmt->bind_param("s", $keyword);
    $stmt->execute();

    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

?>
