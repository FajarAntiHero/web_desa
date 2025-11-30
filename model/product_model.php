<?php
require_once 'connection.php';

$getData = new Database("localhost", "root", "", "product_database", "../initiation/product_query.sql");
$koneksi = $getData->getConnection();

// Get All Products 
function getAllProducts() {
    global $koneksi;

    $query = "SELECT * FROM product_table";
    $stmt = $koneksi->prepare($query);

    if (!$stmt) throw new Exception("Prepare failed: " . $koneksi->error);

    $stmt->execute();
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

// Pagination
function getProductsPerPage($start, $limit) {
    global $koneksi;

    $start = (int)$start;
    $limit = (int)$limit;

    $query = "SELECT * FROM product_table LIMIT ?, ?";
    $stmt = $koneksi->prepare($query);
    if (!$stmt) throw new Exception("Prepare failed: " . $koneksi->error);

    $stmt->bind_param("ii", $start, $limit);
    $stmt->execute();

    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

// Search
function searchProducts($keyword) {
    global $koneksi;

    $keyword = "%" . trim($keyword) . "%";

    $query = "SELECT * FROM product_table WHERE product_name LIKE ?";
    $stmt = $koneksi->prepare($query);
    if (!$stmt) throw new Exception("Prepare failed: " . $koneksi->error);

    $stmt->bind_param("s", $keyword);
    $stmt->execute();

    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

?>
