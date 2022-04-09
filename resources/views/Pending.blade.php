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
        <a href="/Pending" class="w3-bar-item w3-button">Data Reservasi</a><br>
        <a href="#" class="w3-bar-item w3-button bg-success mt-5 ">Logout</a><br>
    </div>

    <!-- Page Content -->
    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
        <div class="d-inline ">
            <h3 class="d-inline "><b>Pending</b></h3>
        </div>

    </div>
    <h3 class="d-inline container"><b>Data Reservasi</b></h3>
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link text-black bg-info" href="/Pending">Pending</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black bg-info" href="/Ongoing">Ongoing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black bg-info" href="/History">History</a>
        </li>
      </ul>
    <div>
        <form method="GET">
            <div class="mb-3 mt-3 container">
                <label for="cari" class="form-label text-black">Cari</label>
                <div class="d-flex flex-row">
                    <div class="d-flex flex-row">
                        <input type="text" class="form-control rounded-10 form-brown me-1" id="cari"
                            aria-describedby="button-addon2">
                        <button class="btn btn-info btn-1 me-1" type="button" id="button-addon2">Cari</button>
                    </div>
                    <button class="btn btn-info btn-1" type="button" id="button-addon2">+ Tambah Data</button>
                </div>
            </div>
        </form>
        <div class="card bg-info mt-4 container">
            <div class="card-body">
                <table class="table table-hover table-responsive form-brown text-form-white">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Jumlah Kamar</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle" scope="row">1</th>
                            <td class="align-middle">Adi</td>
                            <td class="align-middle">Deluxe</td>
                            <td class="align-middle">1</td>
                            <td class="align-middle">2022-04-01</td>
                            <td class="align-middle">2022-04-02</td>
                            <td class="align-middle">adi@mail.com</td>
                            <td class="align-middle">0812394848393</td>
                            <td class="align-middle">
                                <a href="" class="btn btn-success btn-1 text-white rounded-10 ">Check In</a>
                                <a href="" class="btn btn-danger btn-2 text-brown rounded-10 ">Tolak</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
