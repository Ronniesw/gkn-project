<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>PT. Gema Kreasi Nusantara</title>
        <link rel="icon" type="image/x-icon" href="assets/img/LOGO.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <x-navbar />
        <!-- Mashead header-->
        <header class="masthead bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('assets/bg/bisnis&produk.png');">
            <div class="container text-center">
                <h1 class="text-white text-5xl">Bisnis Kami</h1>
            </div>
        </header>

        <!-- Business Partner -->
        <section class="py-5">
            <div class="container-fluid px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="card h-100 border-0 bg-transparent">
                            <div class="card-body p-0">
                                <h2 class="mb-3">Business to Government</h2>
                                <hr class="w-5 mb-4 border-t-2 border-yellow-400">
                                <p class="text-justify text-sm">
                                    PT. Gema Kreasi Nusantara (GKN) sebagai perusahaan pengadaan barang & jasa, telah terdaftar didalam LPSE, LKPP, & E-catalog yang merupakan platform belanja pemerintah. 
                                    Kami meyakini bahwa ini merupakan sebuah peluang dan peranan penting dalam membantu pemerintah memenuhi setiap kebutuhannya. 
                                    Pada aspek ini kami  sangat mengedepankan integritas dalam proses pengadaan dan tata kelola perusahaan yang baik.
                                     Dengan melibatkan kami pemerintah dapat lebih fokus pada tugas utamanya dalam pelayanan publik, 
                                    dan dengan hadirnya GKN kami akan memastikan bahwa semua kebutuhan barang dan jasa terpenuhi dengan cara yang paling efisien dan transparan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-0 order-lg-2">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <img src="assets/client/b2g/meeting1.png" alt="Mitra Bisnis" class="img-fluid w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="keunggulan-belanja" class="py-5 bg-light">
            <div class="container px-5">
                <h2 class="text-center mb-4">Keunggulan Kami</h2>
                <hr class="w-5 mb-4 mx-auto border-t-2 border-yellow-400">
                <div class="row gx-4 justify-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 shadow" style="background-color: #004aad;">
                            <div class="card-body text-center">
                                <img src="assets/img/jaringan.png" alt="Icon Berpengalaman" class="mb-4 w-24 h-24 mx-auto">
                                <h3 class="card-title mb-4 text-white">Jaringan Pemasok Terpercaya</h3>
                                <p class="card-text text-white text-justify">
                                    Kami memiliki jaringan pemasok yang luas dan terpercaya, yang memungkinkan kami untuk menyediakan produk berkualitas dengan harga yang terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 shadow" style="background-color: #004aad;">
                            <div class="card-body text-center">
                                <img src="assets/img/kualitas.png" alt="Icon Produk Unggulan" class="mb-4 w-24 h-24 mx-auto">
                                <h3 class="card-title mb-4 text-white">Komitmen pada Kualitas</h3>
                                <p class="card-text text-white text-justify">
                                    Kami mengutamakan kualitas dalam setiap aspek layanan kami, dari pemilihan pemasok hingga pengiriman barang kepada pelanggan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 shadow" style="background-color: #004aad;">
                            <div class="card-body text-center">
                                <img src="assets/img/cfocus.png" alt="Icon Respon Cepat" class="mb-4 w-24 h-24 mx-auto">
                                <h3 class="card-title mb-4 text-white">Customer Focus</h3>
                                <p class="card-text text-white text-justify">
                                    Kami memahami bahwa setiap klien memiliki kebutuhan unik, oleh karena itu kami menawarkan solusi yang disesuaikan dengan kebutuhan pelanggan kami dengan menerapkan "Customer Focus" sebagai landasan pelayanan kami.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 shadow" style="background-color: #004aad;">
                            <div class="card-body text-center">
                                <img src="assets/img/responsif.png" alt="Icon Inovasi" class="mb-4 w-24 h-24 mx-auto">
                                <h3 class="card-title mb-4 text-white">Responsif</h3>
                                <p class="card-text text-white text-justify">
                                    Kami selalu siap dan tanggap dalam merespon setiap kebutuhan dan permintaan anda dengan cepat, dan pengiriman yang tepat waktu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container-fluid px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="card h-100 border-0 bg-transparent">
                            <div class="card-body p-0">
                                <h2 class="mb-3">Business To Business</h2>
                                <hr class="w-5 mb-4 border-t-2 border-yellow-400">
                                <p class="text-justify text-sm">
                                    PT. Gema Kreasi Nusantara Perusahaan sebagai perusahaan pengadaan barang dan jasa secara Business to Business (B2B) kami berfokus pada menyediakan produk berkualitas, 
                                    yang disesuaikan dengan kebutuhan perusahaan anda. GKN dengan B2B ini lebih berfokus membangun hubungan jangka panjang antar perusahaan dari sisi penjualan, 
                                    aftersales yang baik, dan tentunya harga terbaik bagi para client kami. Perusahaan pengadaan B2B adalah bagian integral dari rantai pasokan global, 
                                    memastikan bahwa berbagai industri dapat beroperasi dengan lancar dan efisien. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-0 order-lg-2">
                        <div class="d-flex align-items-center justify-content-center" style="height: 400px;">
                            <img src="assets/client/b2b/meeting1.png" alt="Mitra Bisnis" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Layanan Kami -->
        <section class="py-5 bg-light">
            <div class="container px-5">
                <h2 class="mb-4">Layanan Kami</h2>
                <hr class="w-20 mb-4 border-t-2 border-yellow-400" style="opacity: 100%;">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-3">
                                <img src="assets/logogram.png" alt="Logo Pengadaan" class="me-3" style="width: 50px; height: 50px;">
                                <h3 class="text-primary mb-0">Pengadaan Barang</h3>
                            </div>
                            <p class="text-justify">
                                Kami menyediakan beragam barang berkualitas mulai dari 
                                IT Hardware & Software, Elektronik, Alat Tulis & Kebutuhan Kantor (Office Supplies), Telekomunikasi, Garment , dan barang lainnya 
                                dengan mengedepankan kehandalan, kecepatan, dan ketepatan waktu.     
                            </p>
                        </div>
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-3">
                                <img src="assets/logogram.png" alt="Logo Manajemen" class="me-3" style="width: 50px; height: 50px;">
                                <h3 class="text-primary mb-0">Pengadaan Jasa  </h3>
                            </div>
                            <p class="text-justify">
                                Kami menyediakan layanan konsultasi pengadaan untuk membantu perusahaan memenuhi kebutuhan mereka dengan perencanaan yang matang dan kebutuhan barang yang sesuai.    
                            </p>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="assets/logogram.png" alt="Logo Konsultasi" class="me-3" style="width: 50px; height: 50px;">
                                <h3 class="text-primary mb-0">Pengelolaan Rantai Pasokan</h3>
                            </div>
                            <p class="text-justify">
                                Menyediakan solusi terintegrasi untuk manajemen rantai pasokan yang efisien, dan berkelanjutan    
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-end">
                        <div id="layananKamiCarousel" class="carousel slide" data-bs-ride="carousel" style="width: 100%; max-width: 500px;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/pengadaan/bar1.png" alt="Layanan Kami 1" class="d-block mx-auto img-fluid rounded" style="height: 500px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/pengadaan/bar2.png" alt="Layanan Kami 2" class="d-block mx-auto img-fluid rounded" style="height: 500px; object-fit: cover;">
                                </div>
                                <!-- <div class="carousel-item">
                                    <img src="assets/pengadaan/bar3.png" alt="Layanan Kami 3" class="d-block mx-auto img-fluid rounded" style="height: 500px; object-fit: cover;">
                                </div> -->
                                <div class="carousel-item">
                                    <img src="assets/pengadaan/bar4.png" alt="Layanan Kami 4" class="d-block mx-auto img-fluid rounded" style="height: 500px; object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/pengadaan/bar5.png" alt="Layanan Kami 5" class="d-block mx-auto img-fluid rounded" style="height: 500px; object-fit: cover;">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#layananKamiCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#layananKamiCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!-- Footer -->
       <x-footer />
</body>
</html>