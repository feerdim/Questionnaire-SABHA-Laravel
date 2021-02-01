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
                    <img src="{{ asset('assets/img/main/Img/hand-painted-fashion-women/moda 150ppp-01.jpg') }}" alt="">
                </div>
            </div>
            
            <div class="main-subcontent">
                <div class="main-title">
                    <h1>ABOUT US</h1>
                </div>
                <div class="subcontent-0 subcontent">
                    <h1>Visi</h1>
                    <div class="inner">
                        <div class="sub-images image-0"></div>
                        <div class="exp">
                            <ul>
                                <li>menjadi brand lokal yang mendukung program sustainable</li>
                                <li>slow fashion agar industri fashion tidak berdampak buruk untuk lingkungan.</li>
                                <li>dapat menginspirasi banyak wanita untuk tetap percaya diri terhadap bentuk tubuh diri sendiri.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="subcontent-5 subcontent">
                    <h1>Misi</h1>
                    <div class="inner">
                        <div class="sub-images image-5"></div>
                        <div class="exp">
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
                    <h1>Our Services</h1>
                    <div class="inner">
                        <div class="sub-images image-1"></div>
                        <div class="exp">
                            <ul>
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt, mollitia.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="subcontent-2 subcontent">
                    <h1>Our Goals</h1>
                    <div class="inner">
                        <div class="sub-images image-2"></div>
                        <div class="exp">
                            <ul>
                                <li>sabha.id menjadi brand yang bisa membantu para costumer     agar dapat memilih pakaian yang nyaman dan bagus dikenakan</li>
                                <li>sabha.id bisa menjadi brand lokal yang dapat memasarkan  brand sabha secara global, baik didalam dan diluar negr</li>
                                <li>sabha.id dapat menjadi trand fashion yang menginspirasi banyak kalangan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="subcontent-3 subcontent">
                    <h1>Journey</h1>
                    <div class="inner">
                        <div class="sub-images image-3"></div>
                        <div class="exp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempore deleniti, fugiat quod aspernatur magnam, cumque nostrum aliquam expedita delectus consectetur quidem aut odio et nisi eaque labore optio possimus!</div>
                    </div>
                </div>
            </div>
        </main>
        <header>
            <div class="header-main">
                <h1>Let it shine on you</h1>  
            </div>
            <div class="header-logo">
                <a href=""><img src="{{ asset('assets/img/footer/shopee-logo-40483.png') }}" alt="in"></a> 
                <a href=""><img src="{{ asset('assets/img/footer/tokopedia-38846.png') }}" alt="mail"></a>  
            </div>
            <div class="header-words">Start shoping now</div>
        </header>
        <div class="empty"></div>
        <footer>
            <div class="content">
                <div class="footer-left">
                    <div class="footer-logo"></div>
                    <p class="social-1"><img src="{{ asset('assets/img/footer/[CITYPNG.COM]HD White Outline Round Instagram Logo Icon PNG - 1600x1600.png') }}" alt="Black and white, dark grey, instagram icon">  @sabha_id</p>
                    <p class="social-2"><img src="{{ asset('assets/img/footer/mail-24.png') }}" alt="mail">  admin@sabhaindonesia.id</p>
                    <p class="copyright">Copyright <img src="{{ asset('assets/img/footer/pngaaa.com-1068047.png') }}" alt=""> 2021 Sabha</p>
                </div>
                <div class="footer-right">
                    <div class="location">
                        <p>Jalan Cisaranten Baru 1 No. 16 </p>
                        <p>Kelurahan Cisaranten Kulon</p>
                        <p>Kecamatan Arcamanik, Kota Bandung</p>
                        <p class="copyright">All right reserved</p>
                    </div>
                </div>   
            </div>  
        </footer>
        <div class="overlay"></div>
    </div>
    <div class="cursor"></div>
    <div class="follower"></div>

<script src="{{ asset('assets/gsap/gsap.min.js') }}"></script>
<script src="{{ asset('assets/gsap/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/about.js') }}"></script>    
</body>
</html>
