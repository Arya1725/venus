<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="assets/image/LogoV.png" type="image/x-icon">
    <title>
        KAMAR
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

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
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

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" id="fasilitas">
                Kamar
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-75 my-0 py-0 rounded-t"></div>
            </div>



            <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
                <!--Left Col-->
                <div class="flex flex-col w-full mt-2 md:w-5/5 justify-center items-start text-center ">

                    <center>
                        <div class="w-full md:w-3/5 py-4 justify-content-end">
                            <img class="w-full md:w-4/5 z-50 mx-auto" src="assets/image/deluxe.jpg" />
                            <div class="mb-3 mt-3 d-none d-md-block text-info">
                                <h5><b>
                                        <p>Deluxe</p>
                                    </b></h5>
                                <b>
                                    <p>Menampilkan ruang 32 meter persegi yang
                                        nyaman,berfungsi
                                        sebagai tipe kamar yang sempurna untuk tamu yang ingin menikmati keseimbangan
                                        sempurna
                                        antara akomodasi berkualitas tinggi dan penawaran bernilai tinggi selama
                                        kunjungan anda.</p>
                                </b>
                            </div>
                        </div>
                    </center>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 70rem; mt-5;">

                    <div class="card-body">
                        <h5 class="card-title text-yellow-500">Deluxe</h5>
                        <p class="card-text text-black">-LED TV <br> -TV Cable With Premium Channel <br> -Safe
                            Deposit Box <br> -Bath Amenities <br> -Tea/Milk/Coffe making facilities
                            <br>-Complimentary high-speed Internet access
                        </p>
                        <h5 class="card-title text-yellow-500">Rp. 450,000 / Malam</h5>
                        <a href="Form-Pemesanan" class="btn btn-info text-white d-inline right: 100%;"
                            style="border-radius: 20px; outline: none; box-shadow: 2px 2px 4px rgba(15, 17, 17, 0.6), -2px -2px 4px rgb(17, 19, 17); border: none letter-spacing: 2px; background: none btn-active; ">Reservasi
                            Sekarang</a>
                    </div>
                </div>
                <footer class="section footer-classic context-dark bg-image mt-5"
                    style="background: linear-gradient(80deg, teal 0%, #00FFFF 100%)">
                    <div class="container">
                        <div class="row row-30">
                            <div class="col-md-4 col-xl-5">
                                <div class="pr-xl-4"><a class="brand" href="index.html"><img
                                            class="brand-logo-light" src="assets/image/LogoV.png" alt="" width="300"
                                            height="100" srcset=""></a>

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
