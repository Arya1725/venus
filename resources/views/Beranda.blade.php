<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="assets/image/LogoV.png" type="image/x-icon">
    <title>
        VENUS HOTEL
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
    <style>
        .gradient {
            background: linear-gradient(80deg, teal 0%, #00FFFF 100%);
        }

    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-pink float-end">


        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-5">
                <li class="nav-item">
                    <b><a class="nav-link active text-white" aria-current="page" href="/">Beranda</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-white " href="/#tentang_kami">Tentang Kami</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-white " href="/#fasilitas">Fasilitas</a></b>
                </li>
                <li class="nav-item">
                    <b><a class="nav-link text-white " href="/Kamar">Kamar</a></b>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <!--Hero-->
    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Kami Memberikan Yang Terbaik
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    Kami menyediakan kamar, ruang pertemuan, pelayanan terbaik, fasilitas dan segala yang anda perlukan
                    dengan kualitas terbaik.
                </p>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-4 justify-content-end">
                <img class="w-full md:w-4/5 z-50 mx-auto" src="assets/image/back.jpg" />
            </div>
        </div>
    </div>
    <div class="relative -mt-12 lg:-mt-24">
        <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <path
                        d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
                    </path>
                </g>
            </g>
        </svg>
    </div>

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" id="fasilitas">
                Fasilitas
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-75 my-0 py-0 rounded-t"></div>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators mt-5">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/image/12.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block ">
                            <h5>Kolam Renang</h5>
                            <p>Nikmati kolam renang yang luas dan nyaman.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/image/11.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>GYM</h5>
                            <p>Nikmati GYM yang bersih dan nyaman.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/image/14.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Taman</h5>
                            <p>Nikmati suasana yang indah dan segar di taman yang begitu nyaman.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="container max-w-5xl mx-auto m-8">
                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Kamar
                </h1>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-75 my-0 py-0 rounded-t"></div>
                </div>

                <div class="container mt-5">


                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 20rem;">
                                <img src="assets/image/deluxe.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-yellow-500">Executive</h5>
                                    <p class="card-text text-black">Kamar Executive menampilkan kombinasi gaya art deco
                                        yang kaya dengan akomodasi hotel modern berkualitas tinggi di dalamruang seluas
                                        55 meter persegi, memberikan kesempatan ekslusif utuk menikmati pemandangan kota
                                        di salah satu kamar hotel terbaik di kota ini.</p>
                                    <h5 class="card-title text-yellow-500">Rp. 680,000 / Malam</h5>
                                    <a href="/Kamar" class="btn btn-white text-info d-inline btn-active"
                                        style="border-radius: 20px; outline: none; box-shadow: 2px 2px 4px rgba(11, 13, 14, 0.6), -2px -2px 4px rgb(10, 12, 10); border: none letter-spacing: 2px; background: none btn-active; ">Selengkapnya</a>
                                    <a href="/Form-Pemesanan" class="btn btn-info text-white d-inline btn-active"
                                        style="border-radius: 20px; outline: none; box-shadow: 2px 2px 4px rgba(11, 13, 14, 0.6), -2px -2px 4px rgb(13, 17, 13); border: none letter-spacing: 2px; background: none btn-active; ">Reservasi
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>

                        <section class="bg-white border-b py-8 mt-5">
                            <div class="container max-w-5xl mx-auto m-8">
                                <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800"
                                    id="tentang_kami">
                                    Tentang Kami
                                </h1>
                                <div class="w-full mb-4">
                                    <div class="h-1 mx-auto gradient w-64 opacity-75 my-0 py-0 rounded-t"></div>
                                </div>
                                <div class="flex text-center">
                                    <p class="text-gray-600 mb-8 text-center">
                                        Lepaskan diri anda ke HOTEL VENUS,dikelilingi oleh pemandangan yang begitu
                                        mewahnya, kolam arus, dan
                                        desain bangunan sangat berkualitas.
                                        Nikmati malam yang indah oleh suasana di hotel kami dengan berenang di kolam
                                        arus,kolam renang dan
                                        nikmati bar yang kami sediakan.
                                        Halaman yang luas, menawarkan beragam fasilitas dan kegiatan olahraga yang
                                        komplit dengan
                                        fasilitasnya.Convention Center
                                        kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung,
                                        mampu mengakomodasi
                                        hingga 5.000
                                        delegasi.Manfaatkan ruang penyelenggaraan konvensi,mewujudkan acara pernikahan
                                        adat yang mewah.
                                        <br />
                                        <br />
                                    </p>
                                </div>



                            </div>
                        </section>
                        <footer class="section footer-classic context-dark bg-image mt-5"
                            style="background: linear-gradient(80deg, teal 0%, #00FFFF 100%)">
                            <div class="container">
                                <div class="row row-30">
                                    <div class="col-md-4 col-xl-5">
                                        <div class="pr-xl-4"><a class="brand" href="index.html"><img
                                                    class="brand-logo-light" src="assets/image/LogoV.png" alt=""
                                                    width="300" height="100" srcset=""></a>

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
                    </div>
                </div>



            </div>


            <!-- Change the colour #f8fafc to match the previous section colour -->


            <!--Footer-->


            <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
            <script>
                var scrollpos = window.scrollY;
                var header = document.getElementById("header");
                var navcontent = document.getElementById("nav-content");
                var navaction = document.getElementById("navAction");
                var brandname = document.getElementById("brandname");
                var toToggle = document.querySelectorAll(".toggleColour");

                document.addEventListener("scroll", function() {
                    /*Apply classes for slide in bar*/
                    scrollpos = window.scrollY;

                    if (scrollpos > 10) {
                        header.classList.add("bg-white");
                        navaction.classList.remove("bg-white");
                        navaction.classList.add("gradient");
                        navaction.classList.remove("text-gray-800");
                        navaction.classList.add("text-white");
                        //Use to switch toggleColour colours
                        for (var i = 0; i < toToggle.length; i++) {
                            toToggle[i].classList.add("text-gray-800");
                            toToggle[i].classList.remove("text-white");
                        }
                        header.classList.add("shadow");
                        navcontent.classList.remove("bg-gray-100");
                        navcontent.classList.add("bg-white");
                    } else {
                        header.classList.remove("bg-white");
                        navaction.classList.remove("gradient");
                        navaction.classList.add("bg-white");
                        navaction.classList.remove("text-white");
                        navaction.classList.add("text-gray-800");
                        //Use to switch toggleColour colours
                        for (var i = 0; i < toToggle.length; i++) {
                            toToggle[i].classList.add("text-white");
                            toToggle[i].classList.remove("text-gray-800");
                        }

                        header.classList.remove("shadow");
                        navcontent.classList.remove("bg-white");
                        navcontent.classList.add("bg-gray-100");
                    }
                });
            </script>
            <script>
                /*Toggle dropdown list*/
                /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

                var navMenuDiv = document.getElementById("nav-content");
                var navMenu = document.getElementById("nav-toggle");

                document.onclick = check;

                function check(e) {
                    var target = (e && e.target) || (event && event.srcElement);

                    //Nav Menu
                    if (!checkParent(target, navMenuDiv)) {
                        // click NOT on the menu
                        if (checkParent(target, navMenu)) {
                            // click on the link
                            if (navMenuDiv.classList.contains("hidden")) {
                                navMenuDiv.classList.remove("hidden");
                            } else {
                                navMenuDiv.classList.add("hidden");
                            }
                        } else {
                            // click both outside link and outside menu, hide menu
                            navMenuDiv.classList.add("hidden");
                        }
                    }
                }

                function checkParent(t, elm) {
                    while (t.parentNode) {
                        if (t == elm) {
                            return true;
                        }
                        t = t.parentNode;
                    }
                    return false;
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>
</body>

</html>
