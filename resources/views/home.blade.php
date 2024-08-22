<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>PT. Gema Kreasi Nusantara</title>
    <link rel="icon" type="image/x-icon" href="assets/img/LOGO.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="tailwind.config.js">
</head>

<body id="page-top">
    <!-- Navigation-->

    <x-navbar />

    <!-- Mashead header-->
    <header class="masthead bg-cover bg-center min-h-screen flex items-center justify-center"
        style="background-image: url('assets/bg/BG2.png');">
        <div class="container px-3 px-sm-5">
            <div class="row gap-3 gap-sm-5 items-center">
                <div class="col-12 col-lg-6">
                    <div class="mb-4 mb-lg-0 text-center text-lg-start">
                        <div class="flex flex-col items-center items-lg-start">
                            <div class="text-center text-lg-start text-4xl">
                                <h3 class="font-alt mt-0 mb-2 responsive-heading-large"
                                    style="font-family: 'Poppins', sans-serif; color: #FFFFFF; font-weight: bold; line-height: 1.2; font-size: 1.5em;">
                                    Mitra terpercaya dalam pengadaan barang dan jasa
                                </h3>
                                <h4 class="font-alt mt-2 mb-0 responsive-heading-medium"
                                    style="font-family: 'Poppins', sans-serif; color: #FFFFFF; font-weight: bold; line-height: 1.2; font-size: 1.25em;">
                                    Pengadaan Cepat, Layanan Terpercaya
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- App features section-->
    <section id="tentang-kami" class="relative overflow-hidden">
        <div class="absolute inset-0 w-1/2 hidden lg:flex justify-center items-center">
            <img src="assets/isian/ngobrolcw.png" alt="Tentang Kami" class="object-cover w-3/4 h-3/4">
        </div>
        <div class="container px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-center min-h-screen">
                <div class="lg:hidden">
                    <img src="assets/isian/ngobrolcw.png" alt="Tentang Kami" class="object-cover w-full">
                </div>
                <div class="lg:col-start-2">
                    <div class="flex justify-start items-start">
                        <div class="bg-transparent border-0 p-3 max-w-90">
                            <h1 class="font-bold mb-2 text-left">Tentang Kami</h1>
                            <hr class="w-25 my-0 mb-3 border-2 border-yellow-500 opacity-100">
                            <div class="text-justify">
                                <p class="text-gray-500 mb-2">
                                    <span class="text-2xl font-bold">PT. Gema Kreasi Nusantara (GKN)</span> merupakan
                                    perusahaan penyedia pengadaan barang & jasa,
                                    yang berdedikasi untuk memenuhi kebutuhan perusahaan di berbagai sektor industri.
                                    Kami ingin menghadirkan solusi pengadaan satu pintu yang kami sebut sebagai "<i>One
                                        Stop Procurement Services</i>".
                                    Pengadaan barang kami lebih berfokus pada bidang IT Produk, Elektronik, Alat Tulis
                                    Kantor (Office Supplies), dan Garment (seragam kantor) serta barang lainnya.
                                    GKN hadir sebagai solusi pengadaan jangka panjang perusahaan, dengan pengalaman kami
                                    yang luas, dan mitra-mitra terpercaya,
                                    kami berkomitmen untuk memberikan solusi pengadaan inovatif, terpercaya, dan
                                    berkualitas untuk kebutuhan perusahaan anda.
                                </p>
                            </div>
                        </div>
                        <img src="assets/LOGOGRAM.png" alt="Logo GKN" class="ms-3" style="width: 40px; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section-->
    <section class="bg-light">
        <div class="container px-5">
            <h1 class="text-center mb-3">Produk Kami</h1>
            <hr class="w-5/12 mx-auto my-5 border-2 border-yellow-500 opacity-100">
        </div>
    </section>

    <section class="bg-light">
        <div class="container px-5 py-4">
            <h2 class="text-center mb-4">IT Produk</h2>
            <h3 class="text-center mb-3">Hardware & Software</h3>
            <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/acer.jpeg" class="object-contain h-40 w-40" alt="Microsoft">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/advan.png" class="object-contain h-40 w-40" alt="IBM">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/apple.png" class="object-contain h-32 w-32" alt="Apple">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/asus.png" class="object-contain h-40 w-40" alt="Lenovo">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/brother.png" class="object-contain h-40 w-40"
                                    alt="McAfee">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/canon.png" class="object-contain h-40 w-40" alt="Acer">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/cisco.png" class="object-contain h-40 w-40"
                                    alt="Canon">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/dell.png" class="object-contain h-40 w-40"
                                    alt="Xiaomi">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/ecross.png" class="object-contain h-40 w-40"
                                    alt="Xiaomi">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/epson.png" class="object-contain h-40 w-40"
                                    alt="Kaper">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/fujit.png" class="object-contain h-40 w-40"
                                    alt="Asus">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/hp.png" class="object-contain h-40 w-40" alt="HP">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/ibm.png" class="object-contain h-40 w-40" alt="Intel">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/intel.png" class="object-contain h-40 w-40"
                                    alt="NVIDIA">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/kaper.png" class="object-contain h-40 w-40"
                                    alt="Adobe">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/lenovo.png" class="object-contain h-40 w-40"
                                    alt="Cisco">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/logitech.jpeg" class="object-contain h-40 w-40"
                                    alt="Oracle">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/mcafee.png" class="object-contain h-40 w-40"
                                    alt="SAP">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/microsoft.png" class="object-contain h-40 w-40"
                                    alt="VMware">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/oracle.png" class="object-contain h-40 w-40"
                                    alt="Symantec">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/samsung.png" class="object-contain h-40 w-40"
                                    alt="Autodesk">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/spc.png" class="object-contain h-40 w-40" alt="Red Hat">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/tplink.png" class="object-contain h-40 w-40"
                                    alt="Salesforce">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/zyrex.png" class="object-contain h-40 w-40"
                                    alt="Salesforce">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/IT/hik.png" class="object-contain h-40 w-40"
                                    alt="Salesforce">
                                </< /div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel1"
                        data-bs-slide="prev" class="bg-gradient-to-r from-black to-transparent">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel1"
                        data-bs-slide="next" class="bg-gradient-to-l from-black to-transparent">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel1"
                        data-bs-slide-to="0" class="bg-yellow-500"></button>
                    <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel1"
                        data-bs-slide-to="1" class="bg-yellow-500"></button>
                    <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel1"
                        data-bs-slide-to="2" class="bg-yellow-500"></button>
                    <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel1"
                        data-bs-slide-to="3" class="bg-yellow-500"></button>
                    <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel1"
                        data-bs-slide-to="4" class="bg-yellow-500"></button>
                </div>
            </div>
    </section>

    <section class="bg-light">
        <div class="container px-5 py-4">
            <h2 class="text-center mb-4">Elektronik</h2>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/auxac.png" class="object-contain h-40 w-40"
                                    alt="Microsoft">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/bardi.png" class="object-contain h-40 w-40"
                                    alt="IBM">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/broco.png" class="object-contain h-40 w-40"
                                    alt="Dell">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/canon.png" class="object-contain h-40 w-40"
                                    alt="Lenovo">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/daikin.png" class="object-contain h-40 w-40"
                                    alt="McAfee">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/gree.png" class="object-contain h-40 w-40"
                                    alt="Acer">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/lg.png" class="object-contain h-40 w-40"
                                    alt="Canon">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/miyako.png" class="object-contain h-40 w-40"
                                    alt="Xiaomi">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/panas.png" class="object-contain h-40 w-40"
                                    alt="Apple">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/samsung.png" class="object-contain h-40 w-40"
                                    alt="Kaper">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-4">
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/sanken.png" class="object-contain h-40 w-40"
                                    alt="Asus">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/sony.png" class="object-contain h-40 w-40"
                                    alt="HP">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/tosh.png" class="object-contain h-40 w-40"
                                    alt="Intel">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/xiaomi.png" class="object-contain h-40 w-40"
                                    alt="NVIDIA">
                            </div>
                            <div class="flex items-center justify-center">
                                <img src="assets/Product/elektronik/philips.png" class="object-contain h-40 w-40"
                                    alt="Adobe">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                    data-bs-slide="prev" class="bg-gradient-to-r from-black to-transparent">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                    data-bs-slide="next" class="bg-gradient-to-l from-black to-transparent">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="text-center mt-4">
                <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel"
                    data-bs-slide-to="0" class="bg-yellow-500"></button>
                <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel"
                    data-bs-slide-to="1" class="bg-yellow-500"></button>
                <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel"
                    data-bs-slide-to="2" class="bg-yellow-500"></button>
                <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel"
                    data-bs-slide-to="3" class="bg-yellow-500"></button>
                <button type="button" class="btn mx-1 btn-sm" data-bs-target="#productCarousel"
                    data-bs-slide-to="4" class="bg-yellow-500"></button>
            </div>
        </div>

        <div class="container text-center mt-5">
            <a href="produk" class="btn btn-primary" style="font-size: 100%;">
                Lihat Selengkapnya
            </a>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />
</body>

</html>
