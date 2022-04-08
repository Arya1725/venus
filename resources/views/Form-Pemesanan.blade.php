<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="assets/image/LogoV.png" type="image/x-icon">
    <title>
        FORM PEMESANAN
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->

</head>

<body class="leading-normal tracking-normal text-white gradient bg-info" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info"
        style="background: linear-gradient(80deg, teal 0%, #00FFFF 100%)">


        <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
            <ul class="navbar-nav mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <b><a class="nav-link active text-white" aria-current="page" href="/">Beranda</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-white " href="#">Tentang Kami</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-white " href="#">Fasilitas</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-white " href="/Kamar">Kamar</a></b>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <center>
        <div class="card mt-5 mb-5 bg-cyan-100 "
            style="width: 50rem; height: 50rem;background: teal; border-radius: 20px; outline: none; box-shadow: 2px 2px 4px rgba(11, 13, 14, 0.6), -2px -2px 4px rgb(13, 17, 13); border: none letter-spacing: 2px; background: none btn-active; ">
            <div class="card-body">
                <div class="text-center">
                    <p>
                    <h5><b> Form Pemesanan</b></h5>
                    </p>
                </div>
                <form class="row g-5">
                    <div class="col-md-4">
                        <label for="input" class="form-label">Tanggal Check in</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="input" class="form-label">Tangggal Check Out</label>
                        <input type="date" class="form-control" id="">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Jumlah Kamar</label>
                        <input type="number" class="form-control" id="" min="1">
                    </div>
                    <div class="col-12">
                        <label for="inputnamapemesanan" class="form-label">Nama Pemesanan</label>
                        <input type="text" class="form-control" id="inputnamapemesanan" placeholder="">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Email</label>
                        <input type="email" class="form-control" id="">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Nama Tamu</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="col-12">
                        <select class="form-select form-control  col-12" aria-label="Default select example">
                            <option selected>Silahkan pilih kamar yang di inginkan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>
                    <center>
                    <a href="resi" class="btn btn-info text-white  d-inline right: 100%;"
                        style="border-radius: 20px; outline: none; width: 90%; box-shadow: 2px 2px 4px rgba(15, 17, 17, 0.6), -2px -2px 4px rgb(17, 19, 17); border: none letter-spacing: 2px; background: none btn-active; ">Konfirmasi
                        Sekarang</a>
                    </center>

                </form>
            </div>
        </div>
    </center>
    <footer class="section footer-classic context-dark bg-image mt-5"
        style="background: linear-gradient(80deg, teal 0%, #00FFFF 100%)">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                    <div class="pr-xl-4"><a class="brand" href="index.html"><img
                                class="brand-logo-light" src="assets/image/lOGOv.png" alt="" width="300" height="100"
                                srcset=""></a>

                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <h5>Kontak Kami</h5>
                    <dl class="contact-list">
                        <dt>Alamat:</dt>
                        <dd>JL. Soekarno-Hatta No:17 Bandung, Indonesia 408989</dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>email:</dt>
                        <dd><a href="mailto:#">infovenushotel@email.com</a></dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>phones:</dt>
                        <dd><a href="tel:#">+62 88 1234567</a> <span>or</span> <a href="tel:#">+62
                                89 2345678</a>
                        </dd>
                    </dl>
                </div>

            </div>
        </div>

    </footer>
