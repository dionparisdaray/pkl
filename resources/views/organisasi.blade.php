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
        <nav class="navbar navbar-expand navbar-light bg-gradient topbar mb-4 static-top shadow" style="background-color:	#4169E1;">
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

        <!-- INI KONTEN NYA -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0 text-gray-800 ps-3">Organisasi</h1>
          </div>

          
          <h1 class="mb-0 text-gray-800 ps-3">Teknologi Industri dan Informatika UHAMKA</h1>

          <br><br>

          <div class="container-fluid">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="dosen">Organisasi FTII</h6>
              </div>
              <div class="card-body">
              <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                      <div class="card">
                        <img src="https://2.bp.blogspot.com/-kVfeEqdkPCQ/T0z_YDFcPtI/AAAAAAAAAYM/P9887ywycX0/s320/hima+ti+uhamka.jpg" class="card-img-top" alt="HIMATI" style="width:200px; height:200px; margin:auto;">
                        <div class="card-body">
                          <h5 class="card-title">HIMA TI</h5>
                          <p class="card-text">HIMA TI UHAMKA adalah organisasi kemahasiswaan di tingkat Program Studi Teknik Informatika Universitas Muhammadiyah Prof. DR. HAMKA sebagai wadah penampung aspirasi seluruh mahasiswa Teknik Informatika UHAMKA. Selama periode kepengurusan, salah satu acara yang kami selenggarakan adalah IT Festival yang terdiri dari 3 serangkaian acara yaitu, lomba, workshop dan seminar.</p>
                          <a href="https://www.instagram.com/himati_uhamka/?hl=id" class="btn btn-primary">selengkapnya </a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="https://pbs.twimg.com/profile_images/3728258335/5e3a4d063af44471721b577346161ea5_400x400.jpeg" class="card-img-top" alt="HME" style="width:200px; height:200px; margin:auto;">
                        <div class="card-body">
                          <h5 class="card-title">HIMA TE</h5>
                          <p class="card-text">HIMA TE UHAMKA adalah organisasi kemahasiswaan di tingkat Program Studi Teknik Elektro Universitas Muhammadiyah Prof. DR. HAMKA sebagai wadah penampung aspirasi seluruh mahasiswa Teknik Elektro UHAMKA. Selama periode kepengurusan, salah satu acara yang kami selenggarakan adalah TE Festival yang terdiri dari 3 serangkaian acara yaitu, lomba, workshop dan seminar.</p>
                          <a href="https://www.instagram.com/hme.uhamka/?hl=id" class="btn btn-primary">selengkapnya </a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="https://pbs.twimg.com/profile_images/3772603560/425d27484586317afcf4714ef7eb65ac_400x400.jpeg" class="card-img-top" alt="HMM" style="width:200px; height:200px; margin:auto;">
                        <div class="card-body">
                          <h5 class="card-title">HIMA TM</h5>
                          <p class="card-text">HIMA TM UHAMKA adalah organisasi kemahasiswaan di tingkat Program Studi Teknik Elektro Universitas Muhammadiyah Prof. DR. HAMKA sebagai wadah penampung aspirasi seluruh mahasiswa Teknik Elektro UHAMKA. Selama periode kepengurusan, salah satu acara yang kami selenggarakan adalah TM Festival yang terdiri dari 3 serangkaian acara yaitu, lomba, workshop dan seminar.</p>
                          <a href="https://www.instagram.com/hmm_uhamka/" class="btn btn-primary">selengkapnya </a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="https://i.pinimg.com/originals/f6/68/76/f668764c816260373394cc5a53bd4ca3.png" class="card-img-top" alt="IMM" style="width:200px; height:200px; margin:auto;">
                        <div class="card-body">
                          <h5 class="card-title">IMM</h5>
                          <p class="card-text">IMM bertujuan untuk mengusahakan terbentuknya akademisi Islam yang berakhlak mulia dalam rangka mencapai tujuan Muhammadiyah, yakni menegakkan dan menjunjung tinggi Agama Islam sehingga terwujud masyarakat Islam yang sebenar-benarnya.</p>
                          <a href="https://www.instagram.com/accounts/login/?next=https%3A%2F%2Fwww.instagram.com%2Fpkimmftuhamka%2Fp%2FBqoQUY4BXD8%2F%3F__coig_login%3D1" class="btn btn-primary">selengkapnya </a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="https://scontent.fcgk3-4.fna.fbcdn.net/v/t39.30808-6/299347379_395000316077563_6973633466185777075_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEIiMetKsVJBTVDscVakGgA7YfKqe55Ok_th8qp7nk6TzQgl-TY_U50UJuG6EigxHQm7NAUVhVBEbBNgHtB7r1D&_nc_ohc=R4pXWHDIXO4AX8_Xamw&_nc_zt=23&_nc_ht=scontent.fcgk3-4.fna&oh=00_AfC0Go-Zu725_uR2ef6eiW8IbwuAhOkPqszF8HLEl_MIow&oe=641D6934" class="card-img-top" alt="..."style="width:200px; height:200px; margin:auto;">
                        <div class="card-body">
                          <h5 class="card-title">DPM FTII</h5>
                          <p class="card-text">Dewan Perwakilan Mahasiswa (DPM) adalah lembaga organisasi legislatif kemahasiswaan pada tingkat fakultas. Dalam hal ini, DPM berada di Fakultas Teknologi Industri dan Informatika (FTII) UHAMKA yang beranggotakan mahasiswa aktif di fakultas tersebut.</p>
                          <a href="https://www.instagram.com/dpmftiiuhamka/" class="btn btn-primary">selengkapnya </a>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <img src="https://3.bp.blogspot.com/-_qRbgpPsv-Q/UjtRWKNKGII/AAAAAAAAAaE/aJWSHnbylPo/s1600/ft.jpg" class="card-img-top" alt="..."style="width:200px; height:200px; margin:auto;">
                        <div class="card-body">
                          <h5 class="card-title">BEM FTII</h5>
                          <p class="card-text">BEM FTII adalah organisasi mahasiswa intra kampus yang merupakan lembaga eksekutif di tingkat pendidikan tinggi yang dipimpin oleh seorang Presiden Mahasiswa atau Ketua BEM. Dalam melaksanakan program-programnya, umumnya BEM memiliki beberapa kementerian dan departemen atau bidang.</p>
                          <a href="https://www.instagram.com/bemftiiuhamka/p/BG2vUsQnmfs/" class="btn btn-primary">selengkapnya </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Section Anggota Kelompok -->
            </div>

      <br>
      <br>
      <br>
      <br>
      <br>


</div>
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

      <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>z

</body>

</html>