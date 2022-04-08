<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="assets/image/LogoV.png" type="image/x-icon">
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Simple landind page" />
<meta name="keywords" content="" />
<meta name="author" content="" />
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
<!--Replace with your tailwind.css once created-->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-border-right" style="background: #00FFFF; display:none;" id="mySidebar">
        <img class="w-full md:w-3/5 z-50 mx-auto" src="assets/image/LogoV.PNg" />
        <button onclick="w3_close()" class="w3-bar-item w3-large">Kembali &times;</button>
        <a href="#" class="w3-bar-item w3-button">Dashboard</a><br>
        <a href="/KamarAdmin" class="w3-bar-item w3-button">Kamar</a><br>
        <a href="/KelasKamar" class="w3-bar-item w3-button">Kelas Kamar</a><br>
        <a href="/FasilitasKamar" class="w3-bar-item w3-button">Fasilitas Kamar</a><br>
        <a href="/FasilitasHotel" class="w3-bar-item w3-button">Fasilitas Hotel</a><br>
        <a href="#" class="w3-bar-item w3-button bg-success mt-5">Logout</a><br>
    </div>

    <!-- Page Content -->
    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
        <div class="d-inline ">
            <h3 class="d-inline "><b>Dashboard</b></h3>
        </div>
    </div>

    <ul class="nav " id="pills-tab" role="tablist">
        <div class="col-xl-3 col-md-4 mb-4 mt-5 nav-item">
            <div class="card border-left-primary shadow h-100 py-1 container"
                style="background: #024949; border-radius: 5px; outline: none; width: 90%; border: none letter-spacing: 2px; ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div><b class="text-xs font-weight-bold text-white text-uppercase mb-2">
                                    Jumlah Seluruh Kamar</b></div>
                            <div class="h5 mb-0 font-weight-bold text-white">100</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-book-reader"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-4 mb-4 mt-5 nav-item">
            <div class="card border-left-primary shadow h-100 py-1 container"
                style="background: #024949; border-radius: 5px; outline: none; width: 90%; border: none letter-spacing: 2px; background: none btn-active; ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div><b class="text-xs font-weight-bold text-white text-uppercase mb-2">
                                    Jumlah Kamar Tersedia</b></div>
                            <div class="h5 mb-0 font-weight-bold text-white">40</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-book-reader"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-4 mb-4 mt-5 nav-item">
            <div class="card border-left-primary shadow h-100 py-1 container"
                style="background:#024949; border-radius: 5px; outline: none; width: 90%; border: none letter-spacing: 2px; background: none btn-active; ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div><b class="text-xs font-weight-bold text-white text-uppercase mb-2">
                                    Jumlah Kamar Fasilitas</b></div>
                            <div class="h5 mb-0 font-weight-bold text-white">10</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-book-reader"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-4 mb-4 mt-5 nav-item">
            <div class="card border-left-primary shadow h-100 py-1 container"
                style="background: #024949; border-radius: 5px; outline: none; width: 90%; border: none letter-spacing: 2px; background: none btn-active; ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div><b class="text-xs font-weight-bold text-white text-uppercase mb-2">
                                    Total Tamu Yang Pernah Berkunjung</b></div>
                            <div class="h5 mb-0 font-weight-bold text-white">940</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-book-reader"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-4 mb-4 mt-5 nav-item">
            <div class="card border-left-primary shadow h-100 py-1 container"
                style="background: #024949; border-radius: 5px; outline: none; width: 90%; border: none letter-spacing: 2px; background: none btn-active; ">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div><b class="text-xs font-weight-bold text-white text-uppercase mb-2">
                                    Jumlah Tamu Yang Sedang Menginap</b></div>
                            <div class="h5 mb-0 font-weight-bold text-white">50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-2x fa-book-reader"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </ul>
    <center>
        <footer class="w3-teal fixed-bottom">
            <div class="d-inline">
                <h5 class="d-inline">Copyright Venus Hotel 2022.All Right Reserved</h5>
            </div>
        </footer>
    </center>

    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>

</body>

</html>
