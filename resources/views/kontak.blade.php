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
        <header class="masthead bg-cover bg-center h-screen flex items-center" style="background-image: url('assets/bg/cs.png');">
            <div class="container">
                <div class="row items-center">
                    <div class="col-lg-6">
                        <h1 class="text-3xl text-white mb-4">
                            Kontak Kami
                        </h1>
                        <p class="text-white mb-4">Kami sangat terbuka untuk setiap peluang & menantikan untuk dapat bekerja sama dengan anda, silakan untuk hubungi kami </p>
                        <div class="mb-5">
                            <h4 class="text-white mb-4">Pilih metode kontak:</h4>
                            <div class="btn-group" role="group" aria-label="Pilih metode kontak">
                                <button type="button" class="btn btn-primary me-3 rounded-full" onclick="showEmailForm()">Email</button>
                                <button type="button" class="btn btn-success rounded-full" onclick="showWhatsAppForm()">WhatsApp</button>
                            </div>
                        </div>
                        
                        <form id="emailForm" class="hidden">
                            <div class="mb-3">
                                <label for="nama" class="form-label text-white">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label text-white">Subjek</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label text-white">Pesan</label>
                                <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="kirimEmail()">Kirim Email</button>
                        </form>
                        
                        <form id="whatsappForm" class="hidden">
                            <div class="mb-3">
                                <label for="waName" class="form-label text-white">Nama</label>
                                <input type="text" class="form-control" id="waName" name="waName" required>
                            </div>
                            <div class="mb-3">
                                <label for="waSubject" class="form-label text-white">Subject</label>
                                <input type="text" class="form-control" id="waSubject" name="waSubject" required>
                            </div>
                            <div class="mb-3">
                                <label for="waPesan" class="form-label text-white">Pesan</label>
                                <textarea class="form-control" id="waPesan" name="waPesan" rows="4" required></textarea>
                            </div>
                            <button type="button" class="btn btn-success" onclick="kirimWhatsApp()">Kirim WhatsApp</button>
                        </form>
                    </div>
                    <!-- <div class="col-lg-6">
                        <img src="assets/img/kerja.png" alt="Kontak" class="img-fluid rounded" style="width: 100%; max-width: 1000px; height: auto;">
                    </div> -->
                </div>
            </div>
        </header>

        <!-- Footer -->
        <x-footer />
</body>
</html>