<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_nama = $_POST['product_nama'];
    $product_harga = $_POST['product_harga'];
    $product_gambar = $_FILES['product_gambar']['name'];
    $target_dir = "../img/";
    $target_file = $target_dir . basename($product_gambar);

    $check = getimagesize($_FILES["product_gambar"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["product_gambar"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO prd (product_nama, product_harga, product_gambar) VALUES ('$product_nama', '$product_harga', '$product_gambar')";
            if (mysqli_query($koneksi, $sql)) {
                echo "The file ". basename($product_gambar). " has been uploaded.";
                header("location: ../admin/admin.php#product");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
    }
}

mysqli_close($koneksi);
?>
