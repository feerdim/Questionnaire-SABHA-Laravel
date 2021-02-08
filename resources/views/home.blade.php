<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABHA | Beranda</title>
    <link rel="icon" href="{{ asset('assets/img/icon2.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
</head>
<body>
    <div class="container">
        <nav>
            <div class="nav-title">
                <div class="title-bars"></div>
                <div class="nav-logo">
                    <a href=""><img src="{{ asset('assets/img/footer/Logo Gold.png') }}" alt=""></a>
                </div>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href=""><img src="{{ asset('assets/img/navbar/icon.png') }}" alt=""></a></li>
                    <li><a href="#"> Beranda </a></li>
                    <li><a href="#"> Produk </a></li>
                    <li><a href="{{ route('about') }}"> Tentang Kami </a></li>
                    <li><a href="https://findyourshape.sabhaindonesia.id"> Cek Bentuk Tubuh </a></li>
                </ul>
            </div> 
        </nav>
        <main>
            <div class="main-image main-first">
                <div class="main-bg image-1"></div>
                <div class="content">
                    <h3>fashion</h3>
                    <h1>Lorem ipsum dolor, sit amet.</h1>
                    <span class="tombol"><a href="">See more</a></span>
                </div>
            </div>
            <div class="main-image">
                <div class="main-bg image-2"></div>
                <div class="content">
                    <h3>fashion</h3>
                    <h1>Lorem ipsum dolor, sit amet.</h1>
                    <span class="tombol"><a href="">See more</a></span>
                </div>
            </div>
            <div class="main-image">
                <div class="main-bg image-3"></div>
                <div class="content">
                    <h3>fashion</h3>
                    <h1>Lorem ipsum dolor, sit amet.</h1>
                    <span class="tombol"><a href="">See More</a></span>
                </div>
            </div>
            <div class="main-image">
                <div class="main-bg image-4"></div>
                <div class="content cek">
                    <h1>Cek bentuk tubuh</h1>
                    <h3>Merupakan salah satu fitur SABHA dimana dapat menentukan bentuk tubuh anda.Setelah mengetahui bentuk tubuh anda, akan diberikan rekomendasi melulai sesi konsultasi yang dapat dilakukan via whatsapp</h3>
                    <span class="tombol "><a href="">cek tubuh</a></span>
                </div>
            </div>
            
        </main>
        <header>
            <div class="header-main">
                <h1>Let it shine on you</h1>  
            </div>
            <div class="header-logo">
                <a href=""><img src="{{ asset('assets/img/footer/shopee-logo-40483.png') }}" alt="shopee"></a> 
                <a href=""><img src="{{ asset('assets/img/footer/tokopedia.png') }}" alt="tokopedia"></a>
                <a href=""><img src="{{ asset('assets/img/footer/instagram.png') }}" alt="instagram"></a>
                <a href=""><img src="{{ asset('assets/img/footer/whatsapp.png') }}" alt="whatsapp"></a>
            </div>
            <div class="header-words">Start shopping now!</div>
        </header>
        <div class="empty"></div>
        <footer>
            <div class="content">
                <div class="footer-left">
                    <div class="footer-logo"></div>
                    <a href="mailto:admin@sabhaindonesia.id" style="color: white; text-decoration: none;"><p class="social-2"><img src="{{ asset('assets/img/footer/mail-24.png') }}" alt="">     admin@sabhaindonesia.id</p></a>
                    <p class="copyright"> Copyright <img src="{{ asset('assets/img/footer/pngaaa.com-1068047.png') }}" alt=""> 2021 Sabha</p>
                </div>
                <div class="footer-right">
                    <div class="location">
                        <p>Jalan Cisaranten Baru 1 No. 16 </p>
                        <p>Kelurahan Cisaranten Kulon</p>
                        <p>Kecamatan Arcamanik, Kota Bandung</p>
                        <p class="copyright">All Rights Reserved</p>
                    </div>
                </div>   
            </div>  
        </footer>
        <div class="overlay"></div>
        <div class="intro">
            <div class="intro-title">
                <span class="title-content">
                    <h1>SABHA | </h1>
                </span>  
            </div>
            <div class="intro-list">
                <ul>
                    <span class="list-content">
                        <li>YOU ARE</li>
                        <li>WHAT</li>
                        <li>YOU WEAR</li>  
                    </span>
                </ul>
            </div>
        </div>
    </div>
    <div class="follower"></div>
    <div class="cursor"></div>

<script src="{{ asset('assets/gsap/CSSRulePlugin.min.js') }}"></script>
<script src="{{ asset('assets/gsap/gsap.min.js') }}"></script>
<script src="{{ asset('assets/gsap/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/home.js') }}"></script>
</body>
</html>