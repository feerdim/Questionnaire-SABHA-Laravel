<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABHA | Tentang Kami</title>
    <link rel="icon" href="{{ asset('assets/img/icon2.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
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
                    <li><a href=""><img src="/images/navbar/Emboss Logo1.png" alt=""></a></li>
                    <li><a href="{{ route('home') }}"> Beranda </a></li>
                    <li><a href="#"> Produk </a></li>
                    <li><a href="#"> Tentang Kami </a></li>
                    <li><a href="https://findyourshape.sabhaindonesia.id"> Cek Bentuk Tubuh </a></li>
                </ul>
            </div> 
        </nav>
        <main>
            <div class="main-page">
                <div class="main-content">
                    <h1>SABHA</h1>
                    <h2>YOU ARE WHAT YOU WEAR</h2>
                </div>
            </div>
            
            <div class="main-subcontent">
                <div class="main-title">
                    <h1>ABOUT US</h1>
                </div>
                <div class="subcontent-5 subcontent">
                    <div class="inner inner-1">
                        <div class="sub-images image-5"></div>
                        <div class="exp">
                            <h1>Visi</h1>
                            <ul>
                                <li>Menjadi brand lokal yang mendukung program sustainable</li>
                                <li>Slow fashion agar industri fashion tidak berdampak buruk untuk lingkungan.</li>
                                <li>Dapat menginspirasi banyak wanita untuk tetap percaya diri terhadap bentuk tubuh diri sendiri.</li>
                            </ul>
                            <br><br><br><br>
                            <h1>Misi</h1>
                            <ul>
                                <li>Mencoba memilih bahan ecofriendly untuk produksi sabha</li>
                                <li>Menjalankan program slow fashion</li>
                                <li>Membuat model pakaian yg dapat mendukung penampilan pada setiap bentuk tubuh</li>
                                <li>Membantu para konsumen menemukan jatidiri pada pakaian yg dipakai</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="subcontent-1 subcontent">
                    <div class="inner inner-2">
                        <div class="exp">
                            <h1>Our Services</h1>
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, mollitia.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                            </ul>
                        </div>
                        <div class="sub-images image-1"></div>
                    </div>
                    <div class="inner inner-3">
                        <div class="sub-images image-2"></div>
                        <div class="exp">
                            <h1>Our Goals</h1>
                            <ul>
                                <li>sabha.id menjadi brand yang bisa membantu kamu agar dapat memilih pakaian yang nyaman dan bagus dikenakan</li>
                                <li>sabha.id bisa menjadi brand lokal yang dapat memasarkan  brand sabha secara global, baik di dalam dan di luar negri</li>
                            </ul>
                        </div>
                    </div>
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
                    <a href="mailto:admin@sabhaindonesia.id" style="color: white; text-decoration: none;"><p class="social-2"><img src="{{ asset('assets/img/footer/mail-24.png') }}" alt="mail">     admin@sabhaindonesia.id</p></a>
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
    </div>
    <div class="follower"></div>
    <div class="cursor"></div>

<script src="{{ asset('assets/gsap/CSSRulePlugin.min.js') }}"></script>
<script src="{{ asset('assets/gsap/gsap.min.js') }}"></script>
<script src="{{ asset('assets/gsap/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/about.js') }}"></script>    
</body>
</html>
