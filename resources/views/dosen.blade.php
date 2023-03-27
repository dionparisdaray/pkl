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

        <!-- INI KONTEN NYA -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mb-0 text-gray-800 ps-3">Dosen</h1>
          </div>

          
          <h1 class="mb-0 text-gray-800 ps-3">Teknologi Industri dan Informatika UHAMKA</h1>

          <div class="dropdown d-flex p-3">
            <button class="btn btn-info dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dosen FTII
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#TI">Dosen TI</a></li>
              <li><a class="dropdown-item" href="#TM">Dosen TM</a></li>
              <li><a class="dropdown-item" href="#TE">Dosen TE</a></li>
              <li><a class="dropdown-item" href="#STI">Dosen STI</a></li>
            </ul>
          </div>


          <div class="container-fluid" id="TI">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="dosen">Dosen Tetap TI</h6>
              </div>
              <div class="card-body">
              <div class="row">
              <div class="col-lg-6">
              <h4>
                  <span>Arry Avorizano, S.Kom., M.Kom</span>
                </h4>
                <div class="d-flex">
                  
                  <div>
                    <img src="{{asset('storage/arry.jpeg')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0328056901
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Ilmu Komputer, Universitas Budi Luhur
                    </p>
                    <p>
                    <strong>Email: </strong>
                    avorizano@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Information system, network, security, mobile computing
                    </p>
                  </div>
                </div>
              </div>
                  <div class="col-lg-6">
                <h4>
                  <span>Erizal, S.Kom., M.Kom</span>
                </h4>
    
                <div class="d-flex">
                  <div>
                    <img src="{{asset('storage/erizal.jpeg')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0302026504
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Ilmu Komputer, Universitas Budi Luhur
                    </p>
                    <p>
                    <strong>Email: </strong>
                    erizal@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Pemrograman, Logika Fuzzy
                    </p>
                    </div>
                  </div>
                  </div>
              </div>
              
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Atiqah Muetia Hilda, S.Kom., M.Kom</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="{{asset('storage/atiqah.jpg')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0331017304
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Ilmu Komputer, Universitas Gajah Mada
                    </p>
                    <p>
                    <strong>Email: </strong>
                    atiqahmeutiahilda@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Pemrograman, Logika Fuzzy
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Hamid Al-Jufri</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-29-at-23.10.25-1-232x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0027026701
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S3-Manajemen
                    </p>
                    <p>
                    <strong>Email: </strong>
                    jufri@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Education Management
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Endy Syaiful Alim, S.T., M.T., Ph.D.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/endy.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0322077101
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S3-Computer Applied Technology, Huazhong University of Science and Technology

                    </p>
                    <p>
                    <strong>Email: </strong>
                    endy@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Computer for Education, ICT, Cloud Computing for Education
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Firman Noor Hasan, S.Kom., M.TI.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/firman-205x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0301088305
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Teknik Informatika Binus University (Information Technology Infrastructure Management)
                    </p>
                    <p>
                    <strong>Email: </strong>
                    firman.noorhasan@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    data warehouse, business intelligence
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Muchammad Sholeh, S.Kom, M.Kom..</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/sholeh.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0307128301
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Ilmu Komputer, Universitas Budi Luhur

                    </p>
                    <p>
                    <strong>Email: </strong>
                    m.sholeh@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Information Security Specialist, Cyber Security, IT Security Governance, IT Project Manager, IT Enthusiast
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span> Dimas Febriawan, S.Kom., M.TI.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/dimas-244x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0306028502
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Teknologi Informasi, Universitas Indonesia
                    </p>
                    <p>
                    <strong>Email: </strong>
                    dimas.febriawan@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    IT security
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Nuroji, M.Kom.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-29-at-23.10.25-210x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0304048505
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 

                    </p>
                    <p>
                    <strong>Email: </strong>
                    nuroji@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    informatika, sistem informasi
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Zuhri Halim, S.Kom., M.Kom.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src=" https://ft.uhamka.ac.id/wp-content/uploads/2020/02/zuhri-e1582857304798-220x300.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0313028602
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Teknik Informatika, STMIK Eresha
                    </p>
                    <p>
                    <strong>Email: </strong>
                    zuhri@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Data Mining, Sistem Informasi, Rekayasa Bisnis
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Arafat Febriandirza, S.T., M.TI., Ph.D.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/arafat-600x800.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0224028603
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    Ph.D-Communication and Transportation Engineering, Wuhan University of Technology, China

                    </p>
                    <p>
                    <strong>Email: </strong>
                    arafat@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    IT Strategic Plan, Machine Learning, Modeling, Simulation
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Mia Kamayani, S.T., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/mia-225x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0312028704
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Teknik Informatika, Institut Teknologi Bandung
                    </p>
                    <p>
                    <strong>Email: </strong>
                    mia.kamayani@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    machine learning, natural language processing, information technology
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Nunik Pratiwi, S.T., M.Kom.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/nunik-203x300.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0302069105
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Ilmu Komputer, Universitas Indonesia

                    </p>
                    <p>
                    <strong>Email: </strong>
                    npratiwi@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    image processing
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Ade Davy Wiranata, M.Kom</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-14-at-10.39.37-AM-200x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0325119302
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Teknologi Sistem Informasi, Universitas Budi Luhur
                    </p>
                    <p>
                    <strong>Email: </strong>
                    adedavy@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    informatika, sistem informasi
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Irwansyah, S.Kom., M.Kom.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2023/01/WhatsApp-Image-2022-08-27-at-16.24.01-225x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0321089205
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2-Teknologi Sistem Informasi, Universitas Budi Luhur

                    </p>
                    <p>
                    <strong>Email: </strong>
                    irwansyah@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Data Mining, Sistem Pendukung Keputusan, Sistem Pakar
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Nur Chalik Azhar, S.Kom., M.Kom</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2023/03/Nurchalik.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0321089205
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S3-Ilmu Komputer, Universitas Bina Nusantara
                    </p>
                    <p>
                    <strong>Email: </strong>
                    azharchalik@gmail.com
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Information System, Management Information System
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Wildan Toyib, M.Eng.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/WhatsApp-Image-2020-02-28-at-04.13.42-e1582931620603-218x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0715068201
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Advanced Information Science and Technology, Pukyong National
                    </p>
                    <p>
                    <strong>Email: </strong>
                    wildan.thoyib@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Big data, Bioinformatika, computational intelligence, knowledge based
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Estu Sinduningrum, S.T., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/estu-222x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0314098403
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Manajemen telekomunikasi, Universitas Telkom (Tel-U)
                    </p>
                    <p>
                    <strong>Email: </strong>
                    estu.ningrum@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Sistem digital, pengolahan citra, algoritma dan pemprograman
                    </p>
                  </div>
                </div>
              </div>
          </div>
         </div>
        </div>
        </div>

        <div class="container-fluid" id="TM">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="dosen">Dosen Tetap TM</h6>
              </div>
              <div class="card-body ">
              <div class="row">
              <div class="col-lg-6">
              <h4>
                  <span>Delvis Agusman, S.T., M.Sc.</span>
                </h4>
                <div class="d-flex">
                  
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2021/07/del-300x297.png')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0311087002
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    Computer Integrated Manufacturing (CIM) & its  management system
                    </p>
                    <p>
                    <strong>Email: </strong>
                    delvisagusman@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Teknik Produksi (Manufaktur)
                    </p>
                  </div>
                </div>
              </div>
                  <div class="col-lg-6">
                <h4>
                  <span>Dr. Dan Mugisidi, S.T., M.Si.</span>
                </h4>
    
                <div class="d-flex">
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2021/08/dan-m-300x296.png')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0301126901
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S3 Universitas Indonesia
                    S3 Universitas Diponegoro
                    </p>
                    <p>
                    <strong>Email: </strong>
                    dan.mugisidi@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Desalinasi dan Energi Hidro
                    </p>
                    </div>
                  </div>
                  </div>
              </div>
              
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Oktarina Heriyani, S.Si., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2021/12/oktarina-h-1.png')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0305067702
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Institut Teknologi Bandung (ITB)
                    </p>
                    <p>
                    <strong>Email: </strong>
                    oktarina@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    eknik dan Manajemen Industri
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Ir. Rifky, S.T., M.M., M.T., IPP.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2021/07/rifky-ss-300x291.png" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0305046501
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    Magister Teknik Mesin Universitas Pancasila
                    Program Profesi Insinyur Institut Teknologi Bandung
                    </p>
                    <p>
                    <strong>Email: </strong>
                    rifky@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Material Energi
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Agus Fikri, S.T., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2021/08/Agus-Fikri-300x296.png" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0319087101
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2

                    </p>
                    <p>
                    <strong>Email: </strong>
                    agus_fikri@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Teknik Mesin
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Mohammad Yusuf D, Drs., M.M., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2021/08/yusuf-djelly-300x296.png" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0330016001
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    Universitas Pancasila
                    </p>
                    <p>
                    <strong>Email: </strong>
                    moh_yusufd@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Rekayasa Otomotif
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Pancatatva Hesti Gunawan, ST.,MT.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2021/08/ph-gunawan-300x296.png" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0315046802
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2, Universitas Indonesia

                    </p>
                    <p>
                    <strong>Email: </strong>
                    ph_gunawan@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Teknik Mesin, Desain Produk
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span> Yos Nofendri S.Pd., MSME</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2021/08/yos2-300x296.png" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0319027901
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Universiti Kebangsaan Malaysia
                    </p>
                    <p>
                    <strong>Email: </strong>
                    yos_nofendri@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Konversi Energi
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Hendi Saryanto, S.T., M.Eng.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2023/01/1516978810603.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0301087803
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Universiti Tun Hussein Onn Malaysia 

                    </p>
                    <p>
                    <strong>Email: </strong>
                    hendisaryanto@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Material Teknik & Engineering Dessign
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Riyan Ariyansah, S.T., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src=" https://ft.uhamka.ac.id/wp-content/uploads/2023/01/WhatsApp-Image-2023-01-06-at-10.44.02-300x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0324069102
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S-2 Teknik Mesin
                    </p>
                    <p>
                    <strong>Email: </strong>
                    riyan_ariyansah@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    Manufactur
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>
            </div>  
         </div>
        </div>
        </div>      

           <div class="container-fluid" id="TE">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="dosen">Dosen Tetap TE</h6>
              </div>
              <div class="card-body ">
              <div class="row">
              <div class="col-lg-6">
              <h4>
                  <span>Harry Ramza, S.T., M.T., Ph.D.</span>
                </h4>
                <div class="d-flex">
                  
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2021/07/harry-300x297.png')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0303097006
                    </p>
                    <p>
                    <strong>Tempat, Tanggal Lahir: </strong>
                    Jakarta, 3 September 1970
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S3
                    </p>
                    <p>
                    <strong>Email: </strong>
                    hramza@uhamka.ac.id
                    </p>
                  </div>
                </div>
              </div>
                  <div class="col-lg-6">
                <h4>
                  <span>Dr. Dwi Astuti Cahyasiwi, S.T., M.T.</span>
                </h4>
    
                <div class="d-flex">
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2021/12/dw.png')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0323027401
                    </p>
                    <p>
                    <strong>Tempat, Tanggal Lahir: </strong>
                    Jakarta, 23 Februari 1974
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S3
                    </p>
                    <p>
                    <strong>Email: </strong>
                    dwi.cahyasiwi@uhamka.ac.id
                    </p>
                    </div>
                  </div>
                  </div>
              </div>
              
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>M. Mujirudin, ST., MT</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2022/05/mujirudin.jpg')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0323027401
                    </p>
                    <p>
                    <strong>Tempat, Tanggal Lahir: </strong>
                    Jakarta, 23 Februari 1974
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S3
                    </p>
                    <p>
                    <strong>Email: </strong>
                    dwi.cahyasiwi@uhamka.ac.id
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Rosalina, S.T., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2022/06/ros.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0304017001
                    </p>
                    <p>
                    <strong>Tempat, Tanggal Lahir: </strong>
                    Palembang, 04 Januari 1970
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2
                    </p>
                    <p>
                    <strong>Email: </strong>
                    rosalina@uhamka.ac.id
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Emilia Roza, S.T., M.Pd., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2022/06/emill.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0330097402
                    </p>
                    <p>
                    <strong>Tempat, Tanggal Lahir: </strong>
                    Pekanbaru, 30 September 1974
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2
                    </p>
                    <p>
                    <strong>Email: </strong>
                    emilia_roza@uhamka.ac.id
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Kun Fayakun, S.T., M.T.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2022/06/IMG_0297-257x300.jpg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0305125701
                    </p>
                    <p>
                    <strong>Tempat, Tanggal Lahir: </strong>
                    Jakarta, 05 Desember 1967
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2
                    </p>
                    <p>
                    <strong>Email: </strong>
                    kun_fayakun@uhamka.ac.id
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>
                </div>
          </div>
         </div>
         </div>


         <div class="container-fluid" id="STI">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" id="dosen">Dosen Tetap STI</h6>
              </div>
              <div class="card-body">
              <div class="row">
              <div class="col-lg-6">
              <h4>
                  <span>Erizal, S.Kom., M.Kom</span>
                </h4>
                <div class="d-flex">
                  
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2020/02/erizal-200x300.jpeg')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0302026504
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Ilmu Komputer, Universitas Budi Luhur
                    </p>
                    <p>
                    <strong>Email: </strong>
                    erizal@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    pemrograman, logika fuzzy
                    </p>
                  </div>
                </div>
              </div>
                  <div class="col-lg-6">
                <h4>
                  <span>Faldy Irwiensyah, S.Kom., M.TI.</span>
                </h4>
    
                <div class="d-flex">
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2020/02/faldy.jpeg')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0301087904
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Teknologi Informasi, Universitas Indonesia
                    </p>
                    <p>
                    <strong>Email: </strong>
                    faldy@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    ICT, SDLC & CRM
                    </p>
                    </div>
                  </div>
                  </div>
              </div>
              
                
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Achmad Rizal Dzikrillah, S.T., M.TI.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="{{asset('https://ft.uhamka.ac.id/wp-content/uploads/2020/02/arizal-198x300.jpg')}}" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0311128701
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Teknologi Informasi, Universitas Indonesia
                    </p>
                    <p>
                    <strong>Email: </strong>
                    ahmadrizaldzikrillah@uhamka.ac.id
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    DSS, artificial intelligence
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

                </div>  
              <div class="col-lg-6">
              <h4>
                  <span>Rahmi Imanda, S.Kom., M.Kom.</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/rahmi-234x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0330019204
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Ilmu Komputer, Universitas Indonesia
                    </p>
                    <p>
                    <strong>Email: </strong>
                    
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    sistem informasi
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
              </div>

                </div>
                <div class="row">
                <div class="col-lg-6">
                <h4>
                  <span>Isa Faqihuddin Hanif, S.Kom., M.MSI</span>
                </h4>
                <div class="d-flex">
                  <div>
                    <img src="https://ft.uhamka.ac.id/wp-content/uploads/2020/02/isa-221x300.jpeg" alt="" height="223" width="187">
                  </div>
                  <div class="ps-1">
                    <p>
                    <strong>NIDN: </strong>
                    0316099202
                    </p>
                    <p>
                    <strong>Pendidikan Terakhir: </strong>
                    S2 Sistem Informasi, Universitas Gunadarma
                    </p>
                    <p>
                    <strong>Email: </strong>
                    
                    </p>
                    <p>
                    <strong>Bidang Keahlian: </strong>
                    information system, software design, business management
                    </p>
                  </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                </div>  
                </div>      
          </div>
         </div>
         </div>
              <!-- End Section Anggota Kelompok -->

      
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