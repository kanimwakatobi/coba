<?php 
 if(isset($_POST['submit'])){
    $namaLengkap = $_POST['namaLengkap'];
    $ttl = $_POST['ttl'];
    $jk = $_POST['jk'];
    $noHp = $_POST['noHp'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    $motivasi = $_POST['motivasi'];

 }
 else{
    echo "Form Belum Di Input!!";
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="form.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/ikram.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">La Ode Ikramuddin Samad</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">

                    
                <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="form.html" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Penginputan Data</a>
                    <a href="nilai.php" class="nav-item nav-link active"><i class="fas fa-desktop"></i>Hasil</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Pesan</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/ikram1.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Akbar Mengirimkan Anda Pesan </h6>
                                        <small>15 menit yang lalu</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/ikram2.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Cinta Mengirimkan Anda Pesan</h6>
                                        <small>1 jam yang lalu</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/ikram3.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Kuya Mengirimkan Anda Pesan</h6>
                                        <small>10 menit yang lalu</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Semua Pesan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notifikasi</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Pembaharuan Profile</h6>
                                <small>15 Menit yang lalu</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Pengguna Baru</h6>
                                <small>15 menit yang lalu</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Perubahan Password</h6>
                                <small>20 menit yang lalu</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Semua Notifikasi</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/ikram.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">La Ode Ikramuddin Samad</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Profil Saya</a>
                            <a href="#" class="dropdown-item">Pengaturan</a>
                            <a href="#" class="dropdown-item">Keluar</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="main-content">
            <div class="col-sm-24 col-xl-12">     
                      <table  class="table table-dark">
                                            <thead>
                                                <tr >
                                                    <th>Nama Lengkap</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th >No Hp</th>
                                                    <th >Jurusan</th>
                                                    <th >Email</th>
                                                    <th >Motivasi</th>
                                                  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <tr >
                                   <td>
                                        <?php 
                                        if(isset($namaLengkap)){
                                            echo $namaLengkap;
                                        }
                                        else  echo "belum diisi!!"
                                        ?>
                                    </td>
                                    <td> <?php 
                                        if(isset($ttl)){
                                            echo $ttl;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></td>
                                    <td> <?php 
                                        if(isset($jk)){
                                            echo $jk;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></td>
                                    <td> <?php 
                                        if(isset($noHp)){
                                            echo $noHp;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></td>
                                    <td> <?php 
                                        if(isset($jurusan)){
                                            echo $jurusan;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></td>
                                    <td> <?php 
                                        if(isset($email)){
                                            echo $email;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></td>
                                    <td> <?php 
                                        if(isset($motivasi)){
                                            echo $motivasi;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></td>
                            
                        
                              
                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          
    
                           
                               <!-- <table border='2'  bgcolor="white" cellspacing="0"
                               style="width:90%;margin:0 auto;">
                                <tr style="height:10vh;text-align:center;font-size:3vh;">
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No Hp</th>
                                    <th>Jurusan</th>
                                    <th>Alamat Email</th>
                                    <th>Motivasi</th>
                                </tr>
                                <tr style="height:10vh;text-align:center;">
                                    <th>
                                        <?php 
                                        if(isset($namaLengkap)){
                                            echo $namaLengkap;
                                        }
                                        else  echo "belum diisi!!"
                                        ?>
                                    </th>
                                    <th> <?php 
                                        if(isset($ttl)){
                                            echo $ttl;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></th>
                                    <th> <?php 
                                        if(isset($jk)){
                                            echo $jk;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></th>
                                    <th> <?php 
                                        if(isset($noHp)){
                                            echo $noHp;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></th>
                                    <th> <?php 
                                        if(isset($jurusan)){
                                            echo $jurusan;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></th>
                                    <th> <?php 
                                        if(isset($email)){
                                            echo $email;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></th>
                                    <th> <?php 
                                        if(isset($motivasi)){
                                            echo $motivasi;
                                        }
                                        else  echo "belum diisi!!"
                                        ?></th>
                            
                        
                              
                                </tr>
                               </table> -->
                       
                 
                </div>
            </div>
    
        </div>
    
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Data2023. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>