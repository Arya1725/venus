<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="assets/image/LogoV.png" type="image/x-icon">
<title>Resepsionis</title>
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
        <a href="/Resepsionis" class="w3-bar-item w3-button">Dashboard</a><br>
        <a href="/Pending" class="w3-bar-item w3-button ">Data Reservasi</a><br>
        <a href="#" class="w3-bar-item w3-button bg-success mt-5">Logout</a><br>
    </div>

    <!-- Page Content -->
    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
        <div class="d-inline ">
            <h3 class="d-inline "><b>Dashboard</b></h3>
        </div>
    </div>
    <ul class="nav nav-pills container mt-5" id="pills-tab" role="tablist">
        <div class="card card-brown nav-item rounded-10 mt-3 me-3"
            style="width: 16rem; background: #024949">
            <div class="card-body text-white">
                <h1 class="card-title">74</h1>
                <p class="card-text">Jumlah Kamar</p>
            </div>
        </div>
        <div class="card card-brown nav-item rounded-10 mt-3 me-3" style="width: 16rem;background: #024949">
            <div class="card-body text-white">
                <h1 class="card-title">74</h1>
                <p class="card-text">Kamar Tersedia</p>
            </div>
        </div>
        <div class="card card-brown nav-item rounded-10 mt-3 me-3" style="width: 16rem;background: #024949">
            <div class="card-body text-white">
                <h1 class="card-title">74</h1>
                <p class="card-text">Jumlah Tamu yang Sedang Berkunjung</p>
            </div>
        </div>
    </ul>




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
