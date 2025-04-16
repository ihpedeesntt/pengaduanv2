<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pengaduan BPS Provinsi NTT</title>
    <link rel="stylesheet" href="/creative/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/creative/css/main.css">
    
</head>

<body>
    @if(session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    <header class="header" id="home__header">
        <div class="header__container" style="width:100%;">
            <nav class="navbar navbar-expand-lg navbar-dark header__nav" id="navbar">
            <a href="#home" class="scrollto"><img src="/creative/img/peluit.png" alt="" title="" width="100px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapsible"
                    aria-controls="navbar-collapsible" aria-expanded="false" aria-label="Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse header__collapse-container" id="navbar-collapsible">
                    <ul class="header__ul nav">
                        <li class="nav-item">
                            <a href="#beranda" class="nav-link">
                                <span class="nav-link__text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tentang" class="nav-link">
                                <span class="nav-link__text">Tentang</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#kontak" class="nav-link">
                                <span class="nav-link__text">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="home" id="beranda">
        <div class="container text-center text-light" style="width:100%;">
            <div class="home__desc" style="width:100%;">
            <br>
            <p>Portal Layanan Pengaduan</p>
                <h1 >WHISTLE-BLOWING SYSTEM
                    <br>
                <span style="color:indianred;">BPS PROVINSI NTT</span>    
            </h1>
            <a href="/pengaduan" class="btn btn-lights">Pengaduan</a>
            <a href="/aspirasi" class="btn btn-main">Aspirasi</a>
                   
               

                              
                                
            </div>
        </div>
    </section>

   
    <section class="portfolio" id="tentang">
        <div class="container" style="width:100%;">
            <h2>Tentang</h2>
            <div class="portfolio__wrapper">
            <div class="row">
                    <div class="col-lg-6">
                        <h3>Tentang Whistleblowing System</h3>
                        <p>Whistleblowing System BPS adalah aplikasi yang disediakan oleh Badan Pusat Statistik bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi pelanggaran yang terjadi di lingkungan Badan Pusat Statistik
                            Provinsi Nusa Tenggara Timur. Materi Aduan yang dapat anda sampaikan adalah:</p>
                        <ul>
                            <li>Fraud</li>
                            <li>Kepegawaian</li>
                            <li>Layanan Statistik</li>
                            <li>Pelayanan Umum</li>
                            <li>Saran dan Pertanyaan</li>
                        </ul>
                        <p>BPS menghargai informasi yang Anda laporkan dan fokus kami adalah kepada materi informasi yang anda sampaikan. Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN IDENTITAS DIRI ANDA sebagai
                            whistleblower.</p>
                    </div>
                    <div class="col-lg-6">
                        <h3>Unsur Pengaduan</h3>
                        <p>Pengaduan Anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut:</p>
                        <ul>
                            <li>What: Perbuatan berindikasi pelanggaran yang diketahui</li>
                            <li>Where: Dimana perbuatan tersebut dilakukan</li>
                            <li>When: Kapan perbuatan tersebut dilakukan</li>
                            <li>Who: Siapa saja yang terlibat dalam perbuatan tersebut</li>
                            <li>How: Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb.)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

   <section class="footer"  id="tiket">
    <div class="center">
        <h2>Cek Tiket</h2>
        <div class="container"style="width:100%;">
            <form action="/tiket" method="POST" autocomplete="off">
            {{csrf_field()}}
                <input type="text" class="col-md-3" name="tiket" id="tiket" placeholder="Masukan Nomor Tiket"style="text-align:center;">
                <div class="controls">
                    <button type="submit" class="button btn-primary">Cek Tiket</button> 
                </div>
            </form>
        </div>
    </div>
    </section>

    

    

    

    <section class="contact" id="kontak">
        <div class="container" style="width:100%;">
            <h2>Kontak Kami</h2>
            <div class="row">
                <div class="col-md-3 blog__box">
                    <i class="fa fa-phone"></i>
                    <h3>Telepon</h3>
                    <p>(0380) 826289, 821755</p>
                </div>
                <div class="col-md-3 blog__box">
                    <i class="fa fa-globe"></i>
                    <h3>Website</h3>
                    <p><a href="http://ntt.bps.go.id">http://ntt.bps.go.id</a></p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>pst5300@bps.go.id</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-marker"></i>
                    <h3>Alamat</h3>
                    <p>BPS Provinsi NTT, Jl. R. Suprapto No. 5 Kupang - 85111</p>
                </div>
            </div>
            <!-- <form action="" class="contact__form">
                <div class="form__flex">
                    <input type="text" class="form__name" placeholder="Name">
                    <input type="text" class="form__email" placeholder="Email">
                </div>
                <input type="text" class="form__subject" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-main">Send Message</button>
            </form> -->
        </div>
    </section>

    <footer class="footer">
        <div class="container"style="width:100%;">
        <a href="#home" class="scrollto"><img src="/creative/img/peluit.png" alt="" title="" width="335px"></a><br>
            <div class="footer__sm-box">
                <a href="https://www.facebook.com/bps5300" class="footer__sm-link" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/bps.ntt/" class="footer__sm-link" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6287820178535 " class="footer__sm-link" target="_blank"><i class="fa fa-whatsapp"></i></a>
                <a href="https://www.youtube.com/channel/UCToBos26nIog1oKbN4OPP0Q" class="footer__sm-link" target="_blank"><i class="fa fa-youtube"></i></a>
            </div>
            
            <p class="footer__text">COPYRIGHT © 2020. ALL RIGHTS RESERVED. DESIGNED BY BPS PROVINSI NTT</p>
        </div>
    </footer>

    <script src="/creative/js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="/creative/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/creative/js/main.js"></script>
    @include('sweetalert::alert')

</body>

</html>