<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Struktur - Kabupaten</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('storage')}}/assets/css/vendor.css">
    <link rel="stylesheet" href="{{asset('storage')}}/assets/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('storage')}}/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('storage')}}/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('storage')}}/assets/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                 <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="/" : active="request()->routeIs('index')">
                            <img src="{{ asset('storage') }}/assets/images/logo.svg" alt="Homepage">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> 

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li><a href="about": active="request()->routeIs('about')">Struktur</a></li>
                        <li><a href="service" : active="request()->routeIs('service')">Kecamatan</a></li>
                        <li><a href="journal" : active="request()->routeIs('journal')">Wisata</a></li>
                        <li><a href="contact" : active="request()->routeIs('contact')">Tentang</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <div class="s-header__contact">                     
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

               <section class="s-pageheader pageheader">
                    <div class="row">
                        <div class="column xl-12">
                            <h2 class="page-title">
                                Struktur<br>
                                Pemerintahan
                            </h2>
                            
                        </div>
                    </div>
               </section> <!-- end pageheader --> 

               <section class="s-testimonials">

<div class="s-testimonials__header row row-x-center text-center">
    <div class="column xl-8 lg-12">

       
        <h3>
        Pemimpin Daerah
        </h3>                        

    </div>
</div> <!--end s-testimonials__header -->

<div class="row s-testimonials__content">
    <div class="column xl-12 testimonials">

        <div class="swiper-container testimonials__slider page-slider">

            <div class="swiper-wrapper">
                <div class="testimonials__slide swiper-slide">
                    <div class="testimonials__author">
                        <cite class="testimonials__cite">
                            <strong>Dr. Drs. Imran, M.Si.,MA.Cd</strong>
                            <span>Pj. Bupati Subang</span>
                        </cite>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-container testimonials__slider page-slider">

            <div class="swiper-wrapper">
                <div class="testimonials__slide swiper-slide">
                    <div class="testimonials__author">
                        <cite class="testimonials__cite">
                            <strong>H. Asep Nuroni, S.Sos.,M.Si</strong>
                            <span>Sekertaris Daerah</span>
                        </cite>
                    </div>
                </div>
            </div>
        </div> <!-- end swiper-wrapper --> 
        <div class="swiper-container testimonials__slider page-slider">

            <div class="swiper-wrapper">
                <div class="testimonials__slide swiper-slide">
                    <div class="testimonials__author">
                        <cite class="testimonials__cite">
                            <strong>Plt. H. Enang Supriatna</strong>
                            <span>Sekretaris Dewan Perwakilan Rakyat</span>
                        </cite>
                    </div>
                </div>
            </div>
        </div> <!-- end swiper-wrapper --> 

            <div class="swiper-pagination"></div>

        </div> <!--end testimonials__slider --> 

    </div> <!-- testimonials -->
</div> <!--end s-testimonials__content -->

</section> <!-- end s-testimonials -->


               <section class="s-pagecontent pagecontent">

                    <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                            <h2 class="text-display-title">Visi dan Misi</h2>
                        </div>
                        <div class="column xl-6 lg-12 u-flexitem-x-right">
                        <p class="attention-getter">
                            Visi<br>
                            “Kabupaten Subang Yang Bersih, Maju, Sejahtera  dan Berkarakter”    
                            </p>

                            <p class="attention-getter">
                            Misi<br>
                            1.    Mewujudkan pemerintahan yang bersih dari korupsi, kolusi dan nepotisme, terbuka, serta pelayanan masyarakat;<br>
                            2.    Meningkatkan Pembangunan Infrastruktur, penataan ruang berkarakter kebudayaan lokal dan pemerataan pembangunan perdesaan;<br>
                            3.    Meningkatkan kualitas pendidikan untuk menciptakan sumber daya manusia yang handal dan berdaya saing serta perluasan lapangan kerja;<br>
                            4.    Meningkatnya kesejahteraan masyarakat melalui pembangunan bidang pertanian, ekonomi kerakyatan, industri kreatif, perikanan dan kelautan, serta pengalian potensi berbasis budaya dan kearifan lokal;<br>
                            5.    Meningkatkan kualitas layanan kesehatan masyarakat dan lingkungan hidup.
                            </p>
                        </div>                       
                    </div> <!-- end pageintro -->   
                    
                    <div class="row pagemedia">
                        <d class="column xl-12">
                            <figure class="page-media">                                
                                <img src="{{asset('storage')}}/assets/images/thumbs/about/about-1200.jpg" 
                                     srcset="images/thumbs/about/about-2400.jpg 2400w, 
                                             images/thumbs/about/about-1200.jpg 1200w, 
                                             images/thumbs/about/about-600.jpg 600w" sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                            </figure>
                        </d>
                    </div> <!-- end pagemedia -->

                    <div class="row width-narrower pagemain">
                        <div class="column xl-12"> 

                            <h2>DASAR HUKUM</h2>
                            <p>
                            1. Undang-Undang Nomor 14 Tahun 1950 tentang Pembentukan Daerah-Daerah Kabupaten Dalam Lingkungan Propinsi Djawa Barat (Berita Negara Republik Indonesia Tahun 1950),
                             sebagaimana telah diubah dengan Undang-Undang Nomor 4 Tahun 1968, tentang Pembentukan Kabupaten Purwakarta dan Kabupaten Subang, dengan Mengubah Undang[1]Undang
                              Nomor 14 Tahun 1950 tentang Pembentukan Daerah-Daerah Dalam Lingkungan Propinsi Djawa Barat (Lembaran Negara Republik Indonesia Tahun 1968 Nomor 31, Tambahan Lembaran
                               Negara Republik Indonesia Nomor 2851);
                            </p>
                            <p>
                            2.  Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara ( Lembaran Negara Republik Indonesia Tahun 2014 Nomor 6, Tambahan Lembaran Negara Republik Indonesia Nomor 5494);
                            </p>
                            <p>
                            3.  Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah (Lembaran Negara Republik Indonesia Tahun 2014 Nomor 244, Tambahan Lembaran Negara Republik Indonesia Nomor 5587), 
                            sebagaimana telah diubah beberapa kali, terakhir dengan Undang-Undang Nomor 9 Tahun 2015 tentang Perubahan Kedua Atas Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah 
                            (Lembaran Negara Republik Indonesia Tahun 2015 Nomor 58, Tambahan Lembaran Negara Republik Indonesia Tahun 2015 Nomor 5679);
                            </p>
                            <p>
                            4.  Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah (Lembaran Negara Republik Indonesia Tahun 2016 Nomor 114, Tambahan Lembaran Negara Republik Indonesia Nomor 5887),
                             sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 72 Tahun 2019 tentang Perubahan Atas Peraturan Pemerintah Nomor 18 Tahun 2016 tentang Perangkat Daerah (Lembaran Negara Republik
                              Indonesia Tahun 2019 Nomor 187, Tambahan Lembaran Negara Republik Indonesia Nomor 6402);
                            </p>
                            <p>
                            5.  Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik Indonesia Tahun 2017 Nomor 63, Tambahan Lembaran Negara Republik Indonesia Nomor 6037), 
                            sebagaimana telah diubah dengan Peraturan Pemerintah Nomor 17 Tahun 2020 tentang Perubahan Atas Peraturan Pemerintah Nomor 11 Tahun 2017 tentang Manajemen Pegawai Negeri Sipil (Lembaran Negara Republik
                             Indonesia Tahun 2020 Nomor 68, Tambahan Lembaran Negara Republik Indonesia Nomor 6477);
                            </p>
                            <p>
                            6.  Peraturan Menteri Dalam Negeri Nomor 56 Tahun 2019 tentang Pedoman Nomenklatur dan Unit Kerja Sekretariat Daerah Provinsi dan Kabupaten/Kota;
                            </p>
                            <p>
                            7.  Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 17 Tahun 2021 tentang Penyetaraan Jabatan Administrasi ke Dalam 
                            Jabatan Fungsional (Berita Negara Republik Indonesia Tahun 2021 Nomor 525);
                            </p>
                            <p>
                            8.  Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 25 Tahun 2021 tentang Penyederhanaan Struktur Organisasi Pada Instansi
                             Pemerintah untuk Penyederhanaan Birokrasi (Berita Negara Republik Indonesia Tahun 2021 Nomor 546);
                            </p>
                            <p>
                            9.  Peraturan Daerah Kabupaten Subang Nomor 7 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Subang (Lembaran Daerah Kabupaten Subang
                             Tahun 2016 Nomor 7), sebagaimana telah diubah beberapa kali terakhir dengan Peraturan Daerah Kabupaten Subang Nomor 1 Tahun 2021 tentang Perubahan Ketiga Atas 
                             Peraturan Daerah Kabupaten Subang Nomor 7 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kabupaten Subang (Lembaran Daerah Kabupaten Subang Tahun 2021 Nomor 1);
                            </p>
                            <p>
                            10.  Peraturan Bupati Subang Nomor 98 Tahun 2021 tentang Susunan Organisasi Perangkat Daerah Sekretariat Daerah (Berita Daerah Kabupaten Subang Tahun 2021 Nomor 98);
                            </p>

                            <h2 class="u-add-bottom">TUGAS POKOK</h2>

                            <div class="grid-list-items list-items">
                                <div class="grid-list-items__item list-items__item u-remove-bottom">
                                    <div class="list-items__item-header">
                                        <h6 class="list-items__item-small-title">FUNGSI</h6>
                                    </div>
                                    <p> 1.   Penyusunan kebijakan pemerintahan daerah;</p><br>
                                    <p> 2.   Pengkoordinasian pelaksanaan tugas perangkat daerah;</p><br>
                                    <p> 3.   Pemantauan dan evaluasi pelaksanaan kebijakan pemerintahan daerah;</p><br>
                                    <p> 4.   Pembinaan administrasi dan aparatur pemerintahan daerah;</p><br>
                                    <p> 5.   Pelaksanaan tugas lain yang diberikan oleh Bupati sesuai dengan tugas dan fungsinya;</p><br>
                                    <p> 6.   Penyampaian telaahan staf sebagai bahan pertimbangan pengambilan kebijakan Kepala Daerah.</p><br>
                                </div>
                            </div> <!--grid-list-items -->

                            

                        </div> <!-- end grid-block-->
                    </div> <!-- end pagemain -->

               </section> <!-- pagecontent -->

               <section class="s-testimonials">

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
        
                            <p class="text-pretitle">
                            Kelompok
                            </p>
                            <h3>
                            WebSite Kabupaten
                            </h3>                        
        
                        </div>
                    </div> <!--end s-testimonials__header -->

                    <div class="row s-testimonials__content">
                        <div class="column xl-12 testimonials">

                            <div class="swiper-container testimonials__slider page-slider">

                                <div class="swiper-wrapper">
                                    <div class="testimonials__slide swiper-slide">
                                        
                                        <div class="testimonials__author">
                                            <cite class="testimonials__cite">
                                                <strong>Alia Azizah Masykur</strong>
                                                <span>Teknik Informatika</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                        
                                        <div class="testimonials__author">
                                            <cite class="testimonials__cite">
                                                <strong>Fauziah Vanny Habibah</strong>
                                                <span>Teknik Informatika</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                        
                                        <div class="testimonials__author">
                                            <cite class="testimonials__cite">
                                                <strong>Adhiwira Rizki</strong>
                                                <span>Teknik Informatika</span>
                                            </cite>
                                        </div>
                                    </div>
                                    <div class="testimonials__slide swiper-slide">
                                       
                                        <div class="testimonials__author">
                                            <cite class="testimonials__cite">
                                                <strong>Dani Suryatman</strong>
                                                <span>Teknik Informatika</span>
                                            </cite>
                                        </div>
                                    </div> 
                                </div> <!-- end swiper-wrapper --> 

                                <div class="swiper-pagination"></div>

                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

               </section> <!-- end s-testimonials -->

        </section> <!-- s-content-->

        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">

            <div class="row row-x-center text-center">
                <div class="column xl-8 lg-12">

                <div class="s-cta__content">
                        <h2 class="text-display-title">
                        Selalu ada hal menarik di Subang
                        </h2>
                        <p class="lead">
                        "Terima kasih telah mengunjungi website Subang. Kami berharap Anda menemukan informasi yang bermanfaat dan merasa terinspirasi untuk datang dan menikmati keindahan Subang. Sampai jumpa lagi dan salam hangat dari kami!"
                        </p>
                        <!-- <a href="contact.html" class="btn btn--primary">Let's Work Together</a> -->
                    </div>
                </div>
            </div>
        </section> <!-- end s-cta -->
    <!-- Java Script
    ================================================== -->
    <script src="{{asset('storage')}}/assets/js/plugins.js"></script>
    <script src="{{asset('storage')}}/assets/js/main.js"></script>

</body>
</html>