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
        <header class="masthead" style="background-image: url('assets/bg/mapind.png'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;">
            <div class="container text-center">
                <h1 class="text-white" style="font-size: 5rem;">Project Kami</h1>
                
            </div>
        </header>
        
        <!-- Client Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-5">Klien Kami</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-4 justify-content-center">
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/admin.png" alt="Client 1" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/basnas.png" alt="Client 2" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/bps.png" alt="Client 3" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/diginfo.png" alt="Client 4" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/kelautan.png" alt="Client 5" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/kesehatan.png" alt="Client 6" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/nikel.png" alt="Client 7" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/pupr.png" alt="Client 8" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/satya.png" alt="Client 9" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/stardus.png" alt="Client 10" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/techindo.png" alt="Client 11" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/tim.png" alt="Client 12" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/transavia.png" alt="Client 13" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                    <div class="col d-flex align-items-center justify-content-center">
                        <img src="assets/client/kerjasama/zakat.png" alt="Client 14" class="img-fluid" style="max-height: 120px; object-fit: contain;">
                    </div>
                </div>
            </div>
        </section>
        
       <!-- Footer -->
       <x-footer />
</body>
</html>