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
        <header class="masthead" style="background-image: url('assets/bg/meeting.png'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h1 class="text-3xl text-white">Bergabunglah Bersama Kami</h1>
                        <p class="text-white">Temukan Karier Anda dengan posisi yang sesuai.</p>
                        <form id="karirForm">
                            <div class="mb-3">
                                <label for="nama" class="form-label text-white">Nama</label>
                                <input type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="profesi" class="form-label text-white">Pilih Profesi</label>
                                <select class="form-select" id="profesi" required>
                                    <option value="">Pilih profesi</option>
                                    <option value="Programmer">Programmer</option>
                                    <option value="Designer">Designer</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Sales">Sales</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label text-white">Pesan</label>
                                <textarea class="form-control" id="pesan" rows="3" required></textarea>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="kirimEmailKarir()">Kirim via Email</button>
                            <small class="form-text text-white mt-2">*note : Jangan Lupa Lampirkan CV!</small>
                        </form>

                    </div>
                    <!-- <div class="col-lg-6">
                        <img src="assets/img/kerja.png" alt="Karir" class="img-fluid rounded" style="width: 100%; max-width: 1000px; height: auto;">
                    </div> -->
                </div>
            </div>
        </header>

       <!-- Footer -->
       <x-footer />
</body>
</html>