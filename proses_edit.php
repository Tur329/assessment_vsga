<?php
include "koneksi.php";

$id = $_POST['id'];
$product_nama = $_POST['product_nama'];
$product_harga = $_POST['product_harga'];
$current_image = $_POST['current_image'];

if (isset($_FILES['product_gambar']) && $_FILES['product_gambar']['error'] === UPLOAD_ERR_OK) {
    $product_gambar = $_FILES['product_gambar']['name'];
    $temp_name = $_FILES['product_gambar']['tmp_name'];
    $upload_dir = "../img/";

    move_uploaded_file($temp_name, $upload_dir . $product_gambar);

    if (file_exists($upload_dir . $current_image)) {
        unlink($upload_dir . $current_image);
    }
} else {
    $product_gambar = $current_image;
}

$query = "UPDATE prd SET product_nama='$product_nama', product_harga='$product_harga', product_gambar='$product_gambar' WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Update Sukses'); window.location.href='../admin/admin.php#product';</script>";
} else {
    echo "<script>alert('Gagal Update'); window.location.href='../admin/admin.php#product';</script>";
}

mysqli_close($koneksi);
?>
