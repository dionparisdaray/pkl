<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Alumni FTII Uhamka | Home</title>

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


    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript"> 
    function lihatbarang(){
                      $.ajax({
                      type:"GET",
                      url:"/data"
                      }).done(function(data){
                      $('#tabel').html(data);
                      });
                      }

                      function caribarang(){
        var tahunmasuk = document.getElementById("tahunmasuk").value;
        $.ajax({
                      type:"GET",
                      url:"/cari/"+tahunmasuk
                      }).done(function(data){
                      $('#tabel').html(data);
                    //   alert("Data ditemukan!");
                      });
                   }
                      </script>

</head>

<body onload="lihatbarang();" id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="bi bi-mortarboard-fill"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Data Alumni TI Uhamka</div>
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
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Fitur Data Alumni:</h6>
            <a class="collapse-item" href="/data">Data Alumni</a>
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
            <a class="collapse-item" href="/daftarfilm">Organisasi</a>
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
        <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">
        <h2 class="text-white">Website Alumni TI Uhamka</h2>
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
        <div class="container-fluid">
          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary" id="sejarah">Data Alumni</h6>
                </div>
                <div class="card-body">
                  <ul><ul><ul>
                  <form class="d-flex" role="search">
                    <input class="form-control ms-auto" type="search" placeholder="Tahun Angkatan" aria-label="Search" id="tahunmasuk" style="width:230px;">
                    <ul></ul>
                    <button type="button" id="submit" class="btn btn-success btn" style="width:100px;" onclick="caribarang();">Cari</button>
                  </form>
                      </ul></ul></ul>
                  <div id="tabel">
                  </div>
                </div>
          </div>
        </div>



      <!-- End of Page Wrapper -->
      <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Social Media</h2>
            <ul class="list-unstyled">
            <li><i class="bi bi-instagram py-2 d-block" style="font-style: normal !important;">instagram FT</i></li>
            <li><i class="bi bi-facebook py-2 d-block" style="font-style: normal !important;">facebook FT</i></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-3">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Address</h2>
            	<div class="block-23 mb-3">
	              <ul>
                  <li><span class="bi bi-geo-alt-fill"></span><span class="text">Jl. Tanah Merdeka No.6, RT.10/RW.5, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830</span></li>
	                <li><a href="#"><span class="bi bi-telephone-fill"></span><span class="text">(021) 87782739</span></a></li></br>
	                <li><a href="#"><span class="bi bi-envelope-at-fill"></span><span class="text">ft@uhamka.ac.id</span></a></li>
	              </ul>    
	            </div>
              
            </div>
            
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63454.34265576803!2d106.79724519245228!3d-6.277347586831607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed581fd04607%3A0x98b000ec597ad204!2sFakultas%20Teknik%20Uhamka!5e0!3m2!1sid!2sid!4v1677029547796!5m2!1sid!2sid" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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



      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      

</body>

</html>