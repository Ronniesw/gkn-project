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
        <header class="masthead bg-cover bg-center h-screen flex items-center justify-center" style="background-image: url('assets/bg/BG2.png');">
            <div class="container text-center">
                <h1 class="text-white text-5xl">Profile Perusahaan</h1>
                
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside>
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-md-5 bg-white py-5">
                        <div style="overflow: hidden; margin-right: -185px; margin-top: 10px; margin-left: -10px; display: flex; justify-content: flex-end; align-items: center; height: 100%; position: relative;">
                            <img src="assets/jadir/Tentang Logo.png" alt="Founder" class="img-fluid" style="max-height: 950px; object-fit: cover;" />
                            <div style="position: absolute; bottom: 50px; left: 160px; padding: 10px; color: white; text-align: center;">
                                <p style="margin: 0; font-weight: bold; font-size: 2rem;">Ongky Kurniawan, S.M</p>
                                <p style="margin: 0; font-size: 1.5rem;">Direktur Utama</p>
                                <p style="margin: 0; font-size: 1.5rem;">PT. Gema Kreasi Nusantara</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 py-5" style="background-color: #2254c5; min-height: 100vh; position: relative; margin-left: -30px;">
                        <div class="px-5" style="padding-top: 300px;">
                            <div class="card bg-transparent border-0">
                                <div class="card-body">
                                    <h2 class="text-white mb-3">Sambutan Founder</h2>
                                    <hr style="width: 5%; margin: 0 0 20px 0; border: 2px solid rgba(255, 238, 0, 0.904); opacity: 100;">
                                    <h2 class="text-white mb-5">PT Gema Kreasi Nusantara</h2>
                                    <div class="text-white" style="width: 100%; margin: 0 auto;">
                                        <p class="message text-justify" style="text-align: justify; text-justify: inter-word;">
                                            Salam Sejahtera, Saya dengan rendah hati menyambut Anda dalam
                                            perjalanan bersama kami di PT Gema Kreasi Nusantara, sebuah
                                            perusahaan pengadaan barang & jasa yang berdedikasi untuk
                                            memberikan solusi terbaik bagi kebutuhan pengadaan Anda. Kami
                                            percaya bahwa di balik setiap kebutuhan pengadaan ada peluang
                                            untuk memberikan nilai tambah yang luar biasa, dan itulah yang
                                            mendorong kami.
                                        </p>
                                        <p class="message-extended text-justify" style="text-align: justify; text-justify: inter-word;">
                                            Di era yang terus berkembang ini, saya mengajak seluruh tim untuk
                                            terus berinovasi dan beradaptasi dengan perubahan. Kita harus tetap
                                            fokus pada upaya untuk meningkatkan esiensi, mengurangi biaya,
                                            dan tentunya, memastikan kepatuhan terhadap semua peraturan dan
                                            standar yang berlaku. Kepada seluruh mitra dan vendor, saya
                                            mengucapkan terima kasih atas kerja sama dan dedikasi Anda dalam
                                            memastikan pasokan barang dan jasa yang terbaik untuk perusahaan
                                            kita. Kolaborasi yang baik antara kami adalah kunci keberhasilan
                                            bersama. Akhirnya, saya ingin mengucapkan terima kasih atas
                                            kepercayaan dan dukungan Anda terhadap PT Gema Kreasi Nusantara.
                                            Kami berjanji untuk terus berinovasi, meningkatkan layanan kami,
                                            dan menjaga kepercayaan Anda sebagai mitra pengadaan yang terpercaya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="position: absolute; bottom: 20px; right: 75px;">
                                <a href="https://www.linkedin.com/in/ongky-kurniawan-181006110/" class="mx-2"><i class="bi bi-linkedin text-white fs-3"></i></a>
                                <a href="https://www.instagram.com/ongkykr?igsh=ZHhyYXdneHZ6a2d3" class="mx-2"><i class="bi bi-instagram text-white fs-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features" class="py-5">
            <div class="container px-5">
                <h2 class="text-center mb-5">Struktur Organisasi</h2>
                <hr class="w-10 mx-auto mb-10 border-2 border-yellow-400 opacity-100">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0">
                            <div class="h-300px overflow-hidden">
                                <img src="assets/jadir/Ongky.png" class="card-img-top" alt="Pemimpin 1" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Ongky Kurniawan S.M</h5>
                                <p class="card-text">Direktur Utama</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0">
                            <div class="h-300px">
                                <img src="assets/jadir/ardian.png" class="card-img-top" alt="Pemimpin 2" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Ardian Fikri Rizki S.M M.M</h5>
                                <p class="card-text">Komisaris Utama</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100 border-0">
                            <div class="h-300px overflow-hidden">
                                <img src="assets/jadir/Tiara.png" class="card-img-top" alt="Pemimpin 3" style="object-fit: cover; width: 100%; height: 100%; border-radius: 15px;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">Tiara Sari Dewi, S.H</h5>
                                <p class="card-text">Direktur Keuangan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container-fluid px-5">
                <div class="row gx-5 align-items-center">
                    
                    <div class="col-lg-6 offset-lg-1">
                            <div class="card h-100 border-0 bg-transparent">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center mb-4">
                                    <h2 class="mb-0">Visi Perusahaan</h2>
                                </div>
                                <hr class="w-5 mb-5 border-2 border-yellow-400 opacity-100">
                                <p class="text-justify" class="text-align: justify;">
                                    Menjadi mitra terpercaya dalam pengadaan barang dan jasa yang memberikan solusi terbaik bagi perusahaan anda 
                                </p>
                                <div class="d-flex align-items-center mb-4 mt-5">
                                    <h2 class="mb-0">Misi Perusahaan</h2>
                                </div>
                                <hr class="w-5 mb-5 border-2 border-yellow-400 opacity-100">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center mb-3">
                                        <div class="me-3 w-10 h-10 bg-gray-200 rounded-full d-flex justify-center items-center">
                                            <img src="assets/LOGOGRAM.png" alt="Logogram" class="w-10 h-10">
                                        </div>
                                        <p class="mb-0">Memberikan solusi pengadaan yang inovatif, terpercaya dan berkualitas kepada para client kami.</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <div class="me-3 w-10 h-10 bg-gray-200 rounded-full d-flex justify-center items-center">
                                            <img src="assets/LOGOGRAM.png" alt="Logogram" class="w-10 h-10">
                                        </div>
                                        <p class="mb-0">Memastikan kepuasan client kami dengan menerapkan customer focus, sebagai dasar pelayanan kami. </p>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <div class="me-3 w-10 h-10 bg-gray-200 rounded-full d-flex justify-center items-center">
                                            <img src="assets/LOGOGRAM.png" alt="Logogram" class="w-10 h-10">
                                        </div>
                                        <p class="mb-0">Menjalin kemitraan yang kuat dengan pemasok terpercaya, dan berkolaborasi dengan stakeholder lainnya. </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 px-0 order-lg-1 d-flex justify-content-center">
                        <img src="assets/isian/target.png" alt="Mitra Bisnis" class="img-fluid w-50 h-100 object-fit-cover object-center">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mb-4">Nilai Inti Perusahaan</h2>
                        <hr class="w-10 mb-5 border-2 border-yellow-400 opacity-100 mx-auto">
                        <p class="mb-5">
                            GKN memiliki satu kata yang menggambarkan keunggulan perusahaan kami yaitu "<strong class="text-lg">AKTIF</strong>" sebagai salah satu dasar dalam setiap 
                            kegiatan yang berjalan di dalam perusahaan kami. 
                        </p>
                    </div>
                </div>
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/img/corevalue.png" alt="Core Values" class="img-fluid rounded w-full max-w-600">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center mb-4">
                            <img src="assets/logo/corevalue/adaptif.png" alt="Integritas" class="me-3 w-12 h-12">
                            <div>
                                <h5 class="fw-bold mb-1">Adaptif </h5>
                                <p class="mb-0 text-muted">
                                    Kami akan terus beradaptasi dengan perkembangan industri, yang semakin kompetitif, dari segi pilihan produk berkualitas, layanan, maupun metode yang terus berkembang. 
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <img src="assets/logo/corevalue/kredibel.png" alt="Inovasi" class="me-3 w-12 h-12">
                            <div>
                                <h5 class="fw-bold mb-1">Kredibel</h5>
                                <p class="mb-0 text-muted">
                                    Kepercayaan merupakan hal yang sangat mendasar bagi kami, dan memiliki peranan yang sangat penting dalam kerjasama bisnis, 
                                    dan keberlanjutan sebuah perusahaan, kami berkomitmen untuk terus menjaga kepercayaan yang anda berikan terhadap perusahaan kami. 
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <img src="assets/logo/corevalue/tranparan.png" alt="Kualitas" class="me-3 w-12 h-12">
                            <div>
                                <h5 class="fw-bold mb-1">Transparan</h5>
                                <p class="mb-0 text-muted">
                                    Kami akan terus mengedepankan transparansi dalam setiap proses, dan pelaksanaan bisnis untuk menjaga hubungan bisnis jangka panjang. 
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="assets/logo/corevalue/inovatif.png" alt="Fokus Pelanggan" class="me-3 w-12 h-12">
                            <div>
                                <h5 class="fw-bold mb-1">Inovatif</h5>
                                <p class="mb-0 text-muted">
                                    Kami akan terus melakukan inovasi berkelanjutan mulai dari solusi, proses, produk, dan pelaksanaan untuk mengimbangi kecepatan perubahan di setiap industri.  
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="assets/logo/corevalue/flexible.png" alt="Fokus Pelanggan" class="me-3 w-12 h-12">
                            <div>
                                <h5 class="fw-bold mb-1">Fleksibel</h5>
                                <p class="mb-0 text-muted">
                                    Kami juga mengedepankan fleksibilitas dalam kerjasama bisnis, kolaborasi, dan kebijakan  perusahaan lainnya, untuk kepentingan bersama 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       <!-- Footer -->
       <x-footer />
</body>
</html>