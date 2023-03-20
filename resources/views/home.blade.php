<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Alumni FT TI Uhamka | Home</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Link Bootstrap 5 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">

  <!-- Custom styles for this template-->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!-- Link Css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Link Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  <!-- Link GoogleFonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;1,500;1,700&display=swap"
    rel="stylesheet">

  <!-- Link Toastr -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- javascript maps -->
  <script>(function(d, s, id){
                   var js, fjs = 
            d.getElementsByTagName(s)[0];
                   var ro =
            !!d.getElementById(id);
                   js = d.createElement(s);
            js.id = id;
                   js.src = 
            "https://widgets.moovit.com/ws/F7002C6D397B5E1AE0530100007FF3E5/4927700";
            fjs.parentNode.insertBefore(js, fjs);
            })
            (document, 'script' , 'moovit-jsw');</script>


</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="bi bi-mortarboard-fill"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Data Alumni FTII Uhamka</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/">
          <i class="bi bi-house-fill"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>

      <!-- Nav Item - Anggota Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="bi bi-people-fill"></i>
          <span>Alumni</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" >
          <div class="bg-white py-2 collapse-inner rounded" >
            <h6 class="collapse-header" >Fitur Data Alumni:</h6>
            <a class="collapse-item" href="/tampil">Data Alumni</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Film Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="bi bi-info-circle-fill"></i>
          <span>Info Kampus</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Fitur Info Kampus:</h6>
            <a class="collapse-item" href="/organisasi">Organisasi</a>
            <a class="collapse-item" href="/dosen">Dosen</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-gradient topbar mb-4 static-top shadow" style="background-color:	#4169E1;">
        <h2 class="text-white">Alumni FTII Uhamka</h2>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" style=" font-weight: bold; color: #ffff;" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style=" font-weight: bold; color: #ffff;"href="#sejarah"> Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style=" font-weight: bold; color: #ffff;"href="#visimisi">Visi Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style=" font-weight: bold; color: #ffff;"href="#berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style=" font-weight: bold; color: #ffff;"href="#contact">Contact</a>
          </li>

        </ul>
      </div>
        </nav>
        <!-- End of Topbar -->

        <!-- INI KONTEN NYA -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
          </div>

          <!-- Section Anggota Kelompok -->
          <h1 class="mb-0 text-gray-800">Fakultas Teknik Industri dan Informatika Uhamka</h1>
          <div class="team-list">
            <div class="team-member">
              <img
                src="https://1.bp.blogspot.com/-hxFpj53wUxc/XkuoN0gxAgI/AAAAAAAAD3E/rwzPhWodPqUuq4jIMCTgsMUMjDP6HZniQCLcBGAsYHQ/s640/WhatsApp%2BImage%2B2020-02-17%2Bat%2B1.13.38%2BPM%25281%2529.jpeg"
                alt="Avatar of team member 1" class="avatar">
             
            </div>
            <div class="team-member">
              <img
                src="https://1.bp.blogspot.com/-twG7cc-NxGQ/Xkum7m_qAMI/AAAAAAAAD24/8gRwMyFUQbEBxMQSmy8Ze3vcBkHXUC9JwCLcBGAsYHQ/s1600/FT.jpg"
                alt="Avatar of team member 2" class="avatar">
              
            </div>
            <div class="team-member">
              <img
                src="https://3.bp.blogspot.com/-5pJg8Ifhl9M/V-4dCpybN3I/AAAAAAAAGg8/PfuTCh6EOV02mMbRU5wcRPDdqF5-Qk3rACLcB/s1600/TB1.jpg"
                alt="Avatar of team member 3" class="avatar">
             
            </div>
            <div class="team-member">
              <img
                src="https://ft.uhamka.ac.id/wp-content/uploads/2019/04/695A2674.jpg"
                alt="Avatar of team member 4" class="avatar">
             
            </div>
          </div>

          <div class="container-fluid">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="sejarah">Sejarah FTII Uhamka</h6>
              </div>
              <div class="card-body">
                  Fakultas Teknik (FT) Universitas Muhammadiyah Prof.DR. HAMKA (UHAMKA) didirikan pada tanggal 30 Mei 1997 sesuai SK Direktorat Jenderal Pendidikan Tinggi Departemen Pendidikan dan Kebudayaan Republik Indonesia Nomor 138/DIKTI/Kep/1997. Saat ini Fakultas Teknik UHAMKA mengelola tiga Program Studi yang ketiganya telah terakreditasi yaitu:
                  <ul>
                  <li>Informatika, jenjang Strata Satu (S-1)</li>
                  <li>Teknik Elektro, jenjang Strata Satu (S-1)</li>
                  <li>Teknik Mesin, jenjang Strata Satu (S-1)</li>
                  <li>Sistem Teknologi Informasi, jenjang Strata Satu (S-1)</li>
                  </ul>
              </div>
              <!-- End Section Anggota Sejarah -->
            </div>

            <!-- Collapsable Card Example -->
            <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary" id="visimisi">Visi Misi FTII Uhamka</h6>
              </a>
              <!-- Card Content - Collapse -->
              <div class="collapse " id="collapseCardExample">
                <div class="card-body">
                  <h2>Visi</h2>
                  <ul>
                    <li>Menjadi prophetic teaching faculty yang mencerdaskan secara spiritual, intelektual, emosional, dan sosial dalam menghasilkan karya teknologi unggul.</li>
                  </ul>
                    <h2>Misi</h2>
                    <ul>
                    <li>Menyelenggarakan pendidikan sains dan teknologi terintegrasi nilai-nilai Al Islam dan Kemuhammadiyahan;</li>
                    <li>Menyelenggarakan penelitian untuk menghasilkan karya teknologi unggul untuk masyarakat yang berkemajuan;</li>
                    <li>Menyelenggarakan pengabdian kepada masyarakat untuk peradaban umat;</li>
                    <li>Menghasilkan mahasiswa cerdas secara spiritual, intelektual, emosional, dan sosial;</li>
                    <li>Membangun layanan berbasis teknologi informasi terpadu.</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <!-- INI KONTEN NYA -->

        </div>
        <!-- End of Content Wrapper -->

      </div>
      <div class="container-fluid" style="width:97%;">
        <div class="card shadow mb-4 " >
          <a href="#collapseCardExample" class="d-block card-header py-3" 
            aria-expanded="true" aria-controls="collapseCardExample">
              <h6 class="m-1 font-weight-bold text-primary" id="berita">Berita</h6>
                </a>
            <div class="container-fluid">
            <div class="row d-flex pt-3">
            <div class="col-6 ">
            <h3 class="mb-3">Berita </h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12" >
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://ft.uhamka.ac.id/wp-content/uploads/2020/01/695A2204.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://ft.uhamka.ac.id/wp-content/uploads/2019/04/695A2874.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://ft.uhamka.ac.id/wp-content/uploads/2019/04/695A2187.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4 " data-bs-interval="10000">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840" data-bs-interval="10000">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e" data-bs-interval="10000">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129" data-bs-interval="10000">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
    </div>

<br>
<br>
<br>
<br>
<br>
      <!-- End of Page Wrapper -->
      <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact" style>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
          <div class="ftco-footer-widget mb-4">
          <h3 class="ftco-heading-2">UHAMKA</h3>
          <hr>
              <ul class="list-unstyled">
                <img src="https://sbmptmu.id/wp-content/uploads/2022/04/03-LOGO-UHAMKA-BERWARNA-.png-mochamad-elfan-1024x1024.png" alt="" style="width:300px; height:300px;">
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h3 class="ftco-heading-2">Contact</h3>
              <hr>
              <ul class="list-unstyled">
              <li><i class="bi bi-instagram py-2 d-block" style="font-style: normal !important;">instagram FT</i></li>
              <li><i class="bi bi-facebook py-2 d-block" style="font-style: normal !important;">facebook FT</i></li>
              </ul>
            </div>
          </div>      
          <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h3 class="ftco-heading-2">Social Media</h3>
            <hr>
            <ul class="list-unstyled">
                <li><span class="bi bi-geo-alt-fill"></span><span class="text">Jl. Tanah Merdeka No.6, RT.10/RW.5, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830</span></li>
	              <li><a href="#"><span class="bi bi-telephone-fill"></span><span class="text">(021) 87782739</span></a></li></br>
	              <li><a href="#"><span class="bi bi-envelope-at-fill"></span><span class="text">ft@uhamka.ac.id</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h3 class="ftco-heading-2">Ayo ke UHAMKA</h3>
              <hr>
            	<div class="block-23 mb-3">
                <div class="mv-gd-widget-20"
                          data-width="350px"
                          data-height="500px"
                          data-id="4927700">
              </div>  
	            </div>   
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>
      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

      <!-- Core plugin JavaScript-->
      <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

      <!-- Custom scripts for all pages-->
      <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

      <!-- Link Js -->
      <script src="{{ asset('js/script.js') }}"></script>
      <script src="{{ asset('js/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>

      <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>z

</body>

</html>