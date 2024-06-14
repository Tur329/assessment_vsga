<?php 

session_start();
include "../action/koneksi.php";

if($_SESSION['status']!="sudah_login"){
    
header("location:../index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <title>Sports MotorBike</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="index.php" class="navbar-brand ms-3">
                        <h1 class="text-primary display-5">Sports MotorBike</h1>
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="#home" class="nav-item nav-link">Home</a>
                            <a href="#about" class="nav-item nav-link">About Us</a>
                            <a href="#daftar" class="nav-item nav-link">Daftar Klien</a>
                            <a href="#product" class="nav-item nav-link">Product</a>
                            <a href="#gallery" class="nav-item nav-link">Gallery</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                            <a href="#inputProductModal" data-bs-toggle="modal" class="nav-item nav-link">Input Product</a>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0" style="margin-left: 15px;">
                            <a href="../action/proses_logout.php" class="btn-hover-bg btn btn-primary text-white py-2 px-4 me-3">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


       <!-- Carousel Start -->
        <div class="container-fluid carousel-header vh-100 px-0" id="home">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="../img/carousel-1.png" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="p-3" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Sports MotorBike</h4>
                                <p class="mb-5 fs-5">
                                    Sports motorbike adalah jenis sepeda motor yang dirancang untuk kecepatan dan performa tinggi. Dikenal dengan desain aerodinamis dan mesin bertenaga, mereka menjadi pilihan utama bagi para penggemar kecepatan dan adrenalin, baik untuk balap maupun penggunaan sehari-hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fluid about  py-5" id="about">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-5">
                        <div class="h-100">
                            <img src="../img/about-1.jpg" class="img-fluid w-100 h-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <h5 class="text-uppercase text-primary">About Us</h5>
                        <p class="fs-5 mb-4">
                            Sports Motorbike adalah perusahaan yang bergerak di bidang desain, produksi, dan distribusi sepeda motor sport. Didirikan pada tahun 1990-an oleh sekelompok penggemar sepeda motor yang bersemangat untuk menghadirkan teknologi dan performa terdepan ke dalam dunia otomotif. Dengan dedikasi yang tinggi terhadap inovasi dan kualitas, Sports Motorbike telah tumbuh menjadi salah satu pemimpin dalam industri sepeda motor sport global. Sejak awal berdirinya, kami terus mengembangkan berbagai model sepeda motor yang menawarkan kombinasi sempurna antara kecepatan, keamanan, dan kenyamanan untuk memenuhi kebutuhan para penggemar sepeda motor di seluruh dunia.
                        </p>
                        <div class="tab-class bg-secondary p-4">
                            <ul class="nav d-flex mb-2">
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 150px;">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 150px;">Visi</span>
                                    </a>
                                </li>
                                <li class="nav-item mb-3">
                                    <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 150px;">Misi</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <p class="mb-4">
                                                        Sports Motorbike adalah perusahaan terkemuka dalam desain, produksi, dan distribusi sepeda motor sport dengan fokus pada inovasi, performa tinggi, dan keamanan.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <p class="mb-4">
                                                        Menjadi pionir dalam industri sepeda motor sport dengan terus menghadirkan inovasi terdepan, memimpin dalam teknologi, dan menjadi pilihan utama para penggemar sepeda motor di seluruh dunia.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex">
                                                <div class="text-start my-auto">
                                                    <p class="mb-4">
                                                        Mengembangkan sepeda motor sport yang tidak hanya menawarkan performa superior dan keandalan tinggi, tetapi juga memprioritaskan kenyamanan dan keamanan pengguna, sambil menjaga komitmen pada keberlanjutan lingkungan dalam semua aspek operasional kami.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Services Start -->
        <div class="container-fluid service py-5 bg-light" id="daftar">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Daftar Klien</h5>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="../img/service-1.png" class="img-fluid w-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="../img/service-2.png" class="img-fluid w-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="../img/service-3.png" class="img-fluid w-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                            <img src="../img/service-4.png" class="img-fluid w-100" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Causes Start -->
        <?php
        $query = "SELECT * FROM prd";
        $result = mysqli_query($koneksi, $query);
        ?>

        <!-- Product Section -->
        <div class="container-fluid causes py-5" id="product">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary">Product</h5>
                </div>
                <div class="row g-4">
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <div class="col-lg-6 col-xl-3">
                            <div class="causes-item">
                                <div class="causes-img">
                                    <img src="../img/<?php echo $row['product_gambar']; ?>" class="img-fluid w-100" alt="Product Image">
                                </div>
                                <div class="causes-content p-4">
                                    <h4 class="mb-3"><?php echo $row['product_nama']; ?></h4>
                                    <p class="mb-4">Rp <?php echo $row['product_harga']; ?></p>
                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="#">Beli</a>
                                    <div class="mt-3">
                                        <button type="button" class="btn btn-info btn-sm me-2" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>">Edit</button>
                                        <form action="../action/proses_hapus.php" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="editModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel<?php echo $row['id']; ?>">Edit Product</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="../action/proses_edit.php" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <div class="mb-3">
                                                <label for="editNama<?php echo $row['id']; ?>" class="form-label">Nama Produk</label>
                                                <input type="text" class="form-control" id="editNama<?php echo $row['id']; ?>" name="product_nama" value="<?php echo $row['product_nama']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editHarga<?php echo $row['id']; ?>" class="form-label">Harga Produk</label>
                                                <input type="text" class="form-control" id="editHarga<?php echo $row['id']; ?>" name="product_harga" value="<?php echo $row['product_harga']; ?>" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="editGambar<?php echo $row['id']; ?>" class="form-label">Foto Produk</label>
                                                <input type="file" class="form-control" id="editGambar<?php echo $row['id']; ?>" name="product_gambar" accept="image/*">
                                            </div>
                                            <input type="hidden" name="current_image" value="<?php echo $row['product_gambar']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>


        <!-- Gallery Start -->
        <div class="container-fluid gallery py-5 my-5 px-0" id="gallery">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">Gallery</h5>
            </div>
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img src="../img/smb2.png" class="img-fluid w-100" alt="">
                        
                        <div class="search-icon">
                            <a href="../img/smb2.png" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Sport MotorBike 1</a>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="../img/smb3.png" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="../img/smb3.png" data-lightbox="gallery-3" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Sport MotorBike 2</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img src="../img/smb1.png" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="../img/smb1.png" data-lightbox="gallery-1" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Sport MotorBike 3</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gallery-item">
                        <img src="../img/smb4.png" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="../img/smb4.png" data-lightbox="gallery-4" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Sport MotorBike 4</a>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="../img/smb5.png" class="img-fluid w-100" alt="">
                        <div class="search-icon">
                            <a href="../img/smb5.png" data-lightbox="gallery-5" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                        </div>
                        <div class="gallery-content">
                            <div class="gallery-inner pb-5">
                                <a href="#" class="h4 text-white">Sport MotorBike 5</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->

        <!-- Contact Start -->
        <div class="container-fluid bg-light py-5" id="contact">
            <div class="container py-5">
                <div class="contact p-5">
                    <div class="row g-4">
                        <div class="col-xl-5">
                            <p class="mb-4">
                                <p><strong>Alamat:</strong> Jl. UINSU NO.329, Medan</p>
                                <p><strong>No Telepon:</strong> +62 896 0882 5757</p>
                                <p><strong>Fax:</strong> +62 896 0882 5757</p>
                                <p><strong>Email:</strong> faturrhmn329@gmail.com</p>
                            </p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-10 text-center text-md-start mb-md-0">
                        <span class="text-body"><i class="fas fa-copyright text-light me-2"></i>2024. Fatur Rahman - Assessment Junior Web Developer Juni 2024 UIN Sumatera Utara, All right reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Input Product Modal Start -->
        <div class="modal fade" id="inputProductModal" tabindex="-1" aria-labelledby="inputProductModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inputProductModalLabel">Input Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="productForm" method="POST" action="../action/proses_product.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="product_nama" class="form-label">Nama Product</label>
                                <input type="text" class="form-control" id="product_nama" name="product_nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="product_harga" class="form-label">Harga Product</label>
                                <input type="text" class="form-control" id="product_harga" name="product_harga" required>
                            </div>
                            <div class="mb-3">
                                <label for="product_gambar" class="form-label">Foto Product</label>
                                <input type="file" class="form-control" id="product_gambar" name="product_gambar" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<!-- Input Product Modal End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/counterup/counterup.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="../js/main.js"></script>

    </body>

</html>