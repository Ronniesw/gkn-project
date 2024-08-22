/*!
* Start Bootstrap - New Age v6.0.7 (https://startbootstrap.com/theme/new-age)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-new-age/blob/master/LICENSE)
*/
//
// Scripts
// 
window.addEventListener('scroll', function() {
    var navbar = document.getElementById('mainNav');
    if (window.scrollY > 50) {
        navbar.classList.add('bg-light-blue');
        navbar.classList.remove('navbar-light');
    } else {
        navbar.classList.remove('bg-light-blue');
        navbar.classList.add('navbar-light');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function(link) {
        link.addEventListener('mouseover', function() {
            this.style.cursor = 'pointer';
        });
    });
});

document.getElementById('toggleMessage').addEventListener('click', function() {
    var extendedMessage = document.querySelector('.message-extended');
    var button = this;
    if (extendedMessage.classList.contains('d-none')) {
        extendedMessage.classList.remove('d-none');
        button.textContent = 'Tampilkan Lebih Sedikit';
    } else {
        extendedMessage.classList.add('d-none');
        button.textContent = 'Tampilkan Lebih Banyak';
    }
});

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var nama = document.getElementById('nama').value;
    var alamat = document.getElementById('alamat').value;
    var email = document.getElementById('email').value;
    var pesan = document.getElementById('pesan').value;
    
    // Di sini Anda bisa menambahkan kode untuk mengirim data ke server
    // Misalnya menggunakan AJAX atau fetch API
    
    console.log('Nama:', nama);
    console.log('Alamat:', alamat);
    console.log('Email:', email);
    console.log('Pesan:', pesan);
    
    alert('Pesan Anda telah terkirim!');
    this.reset();
});

function kirimEmail() {
    var nama = document.getElementById('nama').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var pesan = document.getElementById('pesan').value;

    var mailtoLink = 'mailto:gemakreasinusantara@gmail.com'
        + '?subject=' + encodeURIComponent(subject)
        + '&body=' + encodeURIComponent('Nama: ' + nama + '\nEmail: ' + email + '\n\nPesan:\n' + pesan);

    window.location.href = mailtoLink;
}

function kirimEmailKarir() {
    var nama = document.getElementById('nama').value;
    var email = document.getElementById('email').value;
    var profesi = document.getElementById('profesi').value;
    var pesan = document.getElementById('pesan').value;

    var subject = 'Lamaran Kerja - ' + profesi;
    var body = 'Nama: ' + nama + '\n' +
               'Email: ' + email + '\n' +
               'Profesi: ' + profesi + '\n\n' +
               'Pesan:\n' + pesan;

    var mailtoLink = 'mailto:gemakreasinusantara@gmail.com' +
                     '?subject=' + encodeURIComponent(subject) +
                     '&body=' + encodeURIComponent(body);

    window.location.href = mailtoLink;
}

function showEmailForm() {
    document.getElementById('emailForm').style.display = 'block';
    document.getElementById('whatsappForm').style.display = 'none';
}

function showWhatsAppForm() {
    document.getElementById('emailForm').style.display = 'none';
    document.getElementById('whatsappForm').style.display = 'block';
}

function kirimEmail() {
    var nama = document.getElementById('nama').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var pesan = document.getElementById('pesan').value;

    var mailtoLink = 'mailto:gemakreasinusantara@gmail.com'
        + '?subject=' + encodeURIComponent(subject)
        + '&body=' + encodeURIComponent('Nama: ' + nama + '\nEmail: ' + email + '\n\nPesan:\n' + pesan);

    window.location.href = mailtoLink;
}

function kirimWhatsApp() {
    var nama = document.getElementById('waName').value;
    var subject = document.getElementById('waSubject').value;
    var pesan = document.getElementById('waPesan').value;

    // Nomor WhatsApp perusahaan (ganti dengan nomor yang sesuai)
    var nomorPerusahaan = '6281389168372';

    var url = 'https://api.whatsapp.com/send?phone=' + nomorPerusahaan + '&text=' + 
              encodeURIComponent('Nama: ' + nama + '\nSubject: ' + subject + '\nPesan: ' + pesan);

    // Tampilkan UI loading
    var loadingUI = document.createElement('div');
    loadingUI.innerHTML = 'Mengirim pesan...';
    loadingUI.style.position = 'fixed';
    loadingUI.style.top = '50%';
    loadingUI.style.left = '50%';
    loadingUI.style.transform = 'translate(-50%, -50%)';
    loadingUI.style.padding = '20px';
    loadingUI.style.background = 'rgba(0,0,0,0.7)';
    loadingUI.style.color = 'white';
    loadingUI.style.borderRadius = '10px';
    document.body.appendChild(loadingUI);

    // Simulasi pengiriman pesan (ganti dengan logika pengiriman sebenarnya jika ada)
    setTimeout(function() {
        document.body.removeChild(loadingUI);
        window.open(url, '_blank');
    }, 2000); // Simulasi delay 2 detik
}


