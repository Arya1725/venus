<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="assets/image/LogoV.png" type="image/x-icon">
<title>Kelas Kamar</title>
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
        <img class="w-full md:w-3/5 z-50 mx-auto" src="assets/image/LogoV.png" />
        <button onclick="w3_close()" class="w3-bar-item w3-large">Kembali &times;</button>
        <a href="Admin" class="w3-bar-item w3-button">Dashboard</a><br>
        <a href="/KamarAdmin" class="w3-bar-item w3-button">Kamar</a><br>
        <a href="/KelasKamar" class="w3-bar-item w3-button">Kelas Kamar</a><br>
        <a href="/FasilitasKamar" class="w3-bar-item w3-button">Fasilitas Kamar</a><br>
        <a href="/FasilitasHotel" class="w3-bar-item w3-button">Fasilitas Hotel</a><br>
        <a href="#" class="w3-bar-item w3-button bg-success">Logout</a><br>
    </div>

    <!-- Page Content -->
    <div class="w3-teal">
        <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
        <div class="d-inline ">
            <h3 class="d-inline "><b>Kelas Kamar</b></h3>
        </div>
    </div>
    <center>
        <div class="card mt-5" style="width: 70rem;">
            <div class="card-body"
                style="background: #00FFFF; border-radius: 5px; outline: none; width: 100%; box-shadow: 2px 2px 4px rgba(15, 17, 17, 0.6), -2px -2px 4px rgb(17, 19, 17); border: none letter-spacing: 2px;">
                <form class="d-flex float-start col-md-4">
                    <input class="form-control me-2 mb-5" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success mb-5 me-3" type="submit">Search</button>
                  </form>
                  <form class="d-flex float-start col-md-4">
                    <button class="btn btn-outline-success mb-5" type="submit">+ Tambah Data</button>
                  </form>
                <table class="table border border-dark">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Kamar</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Gambar
                            <th class="text-center" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Executive</td>
                            <td>Kamar Executive menampilkan kombinasi gaya art deco
                                yang kaya dengan akomodasi hotel modern berkualitas tinggi di dalamruang seluas
                                55 meter persegi, memberikan kesempatan ekslusif utuk menikmati pemandangan kota
                                di salah satu kamar hotel terbaik di kota </td>
                            <td><img src="assets/image/deluxe.jpg" class="card-img-top" style="max-width: 250px"
                                    alt="...">
                            </td>
                            <td class="text-center"> <button type="button" class="btn btn-outline-success">Edit</button>
                                <button type="button" class="btn btn-outline-danger">Hapus</button>
                            </td>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </center>
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
