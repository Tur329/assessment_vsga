<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    
    $query = "DELETE FROM prd WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../admin/admin.php#product");
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "Akses tidak sah.";
}
?>
