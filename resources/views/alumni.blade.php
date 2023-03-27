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
    function lihatalumni(){
                      $.ajax({
                      type:"GET",
                      url:"/data"
                      }).done(function(data){
                      $('#tabel').html(data);
                      });
                      }

                      function cariangkatan(){
        var tahunmasuk = document.getElementById("tahunmasuk").value;
        $.ajax({
                      type:"GET",
                      url:"/cari/"+tahunmasuk
                      }).done(function(data){
                      $('#tabel').html(data);
                    //   alert("Data ditemukan!");
                      });
                   }

                   function cariprodi(){
        var prodi = document.getElementById("prodi").value;
        $.ajax({
                      type:"GET",
                      url:"/cariprodi/"+prodi
                      }).done(function(data){
                      $('#tabel').html(data);
                    //   alert("Data ditemukan!");
                      });
                   }
                   
                      function carinim(){
        var nim = document.getElementById("nim").value;
        $.ajax({
                      type:"GET",
                      url:"/carinim/"+nim
                      }).done(function(data){
                      $('#tabel').html(data);
                    //   alert("Data ditemukan!");
                      });
                   }

                      function carinama(){
        var nama = document.getElementById("nama").value;
        $.ajax({
                      type:"GET",
                      url:"/carinama/"+nama
                      }).done(function(data){
                      $('#tabel').html(data);
                    //   alert("Data ditemukan!");
                      });
                   }
                      </script>

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

<body onload="lihatalumni();" id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

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
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Fitur Data Alumni:</h6>
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
        <nav class="navbar navbar-expand navbar-light bg-gradient topbar mb-4 static-top shadow" style="background-color:	#19B37C;">
        <h2 class="text-white">Alumni FTII Uhamka</h2>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" style=" font-weight: bold; color: #ffff;" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style=" font-weight: bold; color: #ffff;"href="/"> Sejarah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style=" font-weight: bold; color: #ffff;"href="/">Visi Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style=" font-weight: bold; color: #ffff;"href="/">Berita</a>
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
                <div class="d-flex">
                 <div class=" me-auto">
                  <form class="d-flex " role="search">
                    <input class="form-control" type="search" placeholder="NIM" aria-label="Search" id="nim" style="width:500px;">
                    <ul></ul>
                    <button type="button" id="submit" class="btn btn-success btn" style="width:100px;" onclick="carinim();">Cari</button>
                  </form>
                  <br>
                  <form class="d-flex" role="search">
                    <input class="form-control me-auto" type="search" placeholder="Nama" aria-label="Search" name="search" id="nama" style="width:500px;">
                    <ul></ul>
                    <button type="button" id="submit" class="btn btn-success btn" style="width:100px;" onclick="carinama();">Cari</button>
                  </form>
                 </div>
                 <div class="ms-auto">
                 <select class="dropdown form-select" aria-label="Default select example" id="tahunmasuk" onclick="cariangkatan();" style="width:500px;">
                    <option selected>Tahun Angkatan</option>
                    <option value="2023">2022</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                  </select>
                  <br>
                  <select class="dropdown form-select" aria-label="Default select example" id="prodi" onclick="cariprodi();" style="width:500px;">
                    <option selected>Program Study</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                  </select>
                  <br>
                  <form action="">
                  <button type="button" id="submit" class="btn btn-outline-success" style="width:500px;" onclick="lihatalumni();">Tampilkan Data Alumni</button>
                  </form>
                 </div>
                 </div>
                  <div class="pt-3" id="tabel">
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
      <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact">
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
	              <ul>
                <div class="mv-gd-widget-20"
                          data-width="350px"
                          data-height="500px"
                          data-id="4927700">
              </div>
	              </ul>    
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



      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      

</body>

</html>