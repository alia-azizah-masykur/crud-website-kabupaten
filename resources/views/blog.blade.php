<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata - Kabupaten</title>
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
                </div> <!-- end s-header__block -->

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
                            <h1 class="page-title">
                                <span class="page-title__small-type text-pretitle"></span>
                                Wisata yang ada di Kabupaten Subang
                            </h1>
                        </div>
                    </div>
               </section>   

               <section class="s-pagecontent pagecontent">

                    <div class="row">
                        <div class="column xl-12 grid-block">          
        
                            <!-- <div class="grid-full">         -->
                                <div class="grid-full grid-list-items">

                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="https://www.dreamhost.com/r.cgi?287326">Pemandian Air Panas Ciater</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Pemandian Air Panas Ciater adalah salah satu destinasi wisata terkenal di Subang. Terletak di lereng Gunung Tangkuban Perahu, tempat ini menawarkan kolam-kolam air panas alami yang berasal dari sumber mata air panas. Pengunjung dapat merendam diri di kolam air panas yang dipercaya memiliki manfaat kesehatan, seperti meredakan pegal-pegal dan stres. Selain kolam rendam, di Ciater juga tersedia fasilitas seperti spa, penginapan, dan area bermain anak.<br>
                                            HTM : ke Pemandian Air Panas Ciater bervariasi, biasanya sekitar Rp 30.000 - Rp 50.000 per orang, tergantung pada fasilitas yang digunakan.
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Curug Cileat Subang</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Curug Cileat adalah salah satu air terjun tertinggi dan paling indah di Kabupaten Subang, Jawa Barat. Air terjun ini memiliki ketinggian sekitar 100 meter dan terletak di Desa Mayang, Kecamatan Cisalak. Dikelilingi oleh hutan tropis yang lebat dan pemandangan pegunungan yang memukau. Pengunjung biasanya harus melakukan trekking melalui jalur yang cukup menantang namun indah. Di sekitar Curug Cileat, terdapat kolam alami yang jernih dan menyegarkan, cocok untuk berenang atau sekadar merendam kaki setelah perjalanan yang melelahkan.<br>
                                            HTM : ke Curug Cileat biasanya sekitar Rp 10.000 - Rp 15.000 per orang. Selain itu, mungkin ada biaya parkir sekitar Rp 5.000 untuk kendaraan roda dua dan Rp 10.000 untuk kendaraan roda empat. 
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Curug Cijalu</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Curug Cijalu adalah air terjun yang menawarkan pemandangan alam yang menakjubkan dengan air yang jernih dan udara yang segar. Lokasinya yang berada di tengah hutan memberikan suasana yang asri dan tenang, cocok untuk trekking dan berkemah. Tempat ini sangat populer di kalangan pencinta alam dan petualangan.<br>
                                            HTM: Sekitar Rp 10.000 - Rp 15.000 per orang.
                                            </p>
                                        </div>
                                    </div> <!-- end blog card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Pantai Pondok Bali</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Pantai Pondok Bali memiliki pasir putih dan ombak yang tenang, menjadikannya tempat yang cocok untuk berenang dan bersantai. Di sekitar pantai, terdapat banyak warung makan yang menawarkan hidangan laut segar. Pantai ini populer di kalangan keluarga yang ingin menikmati hari yang cerah dan makanan lezat.<br>
                                            HTM: Sekitar Rp 5.000 - Rp 10.000 per orang.
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Bukit Pamoyan</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Bukit Pamoyanan dikenal dengan pemandangan alamnya yang spektakuler, terutama saat matahari terbit. Bukit ini sering dijadikan tempat untuk berkemah dan menikmati keindahan alam dari ketinggian. Pemandangan yang menakjubkan menjadikannya destinasi favorit bagi para pendaki dan fotografer.<br>
                                            HTM: Sekitar Rp 5.000 - Rp 10.000 per orang.    
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Kebun Teh Ciater</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Perkebunan Teh Ciater menawarkan hamparan kebun teh yang hijau dan luas, dengan udara yang sejuk dan pemandangan yang menyejukkan mata. Pengunjung dapat berjalan-jalan di antara tanaman teh, menikmati teh segar, dan melihat proses pembuatan teh. Tempat ini ideal untuk bersantai dan menikmati keindahan alam.<br>
                                            HTM: Gratis, namun beberapa area mungkin memerlukan biaya masuk sekitar Rp 10.000 - Rp 15.000 per orang.
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Kampung Banceuy</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Kampung Banceuy adalah desa wisata yang menawarkan pengalaman budaya Sunda yang otentik. Pengunjung dapat melihat rumah tradisional, belajar tentang seni kerajinan tangan, dan mencicipi kuliner khas Sunda. Tempat ini menawarkan wawasan yang mendalam tentang kehidupan dan budaya masyarakat setempat.<br>
                                            HTM: Sekitar Rp 10.000 - Rp 20.000 per orang.
                                            </p>
                                        </div>
                                    </div> <!-- end blog card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Capolaga</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Taman Wisata Alam Capolaga menawarkan berbagai aktivitas outdoor seperti berkemah, trekking, dan bermain di sungai yang jernih. Dengan tiga air terjun yang indah di dalam area taman, pengunjung bisa menikmati keindahan alam sambil merasakan ketenangan dan kedamaian. Fasilitas lengkap seperti area berkemah dan jalur trekking membuatnya menjadi destinasi favorit untuk keluarga dan pecinta alam.<br>
                                            HTM: Sekitar Rp 20.000 - Rp 25.000 per orang.
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Situ Cibolang</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Situ Cibolang adalah danau alami yang menawarkan pemandangan yang tenang dan indah. Tempat ini cocok untuk piknik, memancing, atau sekadar bersantai menikmati keindahan alam. Di sekitar danau, terdapat fasilitas seperti perahu sewaan dan area bermain anak. Dengan udara yang sejuk dan suasana yang damai, Situ Cibolang menjadi tempat yang ideal untuk rekreasi keluarga.<br>
                                            HTM: Sekitar Rp 5.000 - Rp 10.000 per orang.
                                            </p>
                                        </div>
                                    </div> <!-- end blog card -->
                                    <div class="grid-list-items__item blog-card">
                                        <div class="blog-card__header">
                                            <div class="blog-card__cat-links">
                                            </div>
                                            <h3 class="blog-card__title"><a href="single.html">Curug Cimarinjung</a></h3>
                                        </div>
                                        <div class="blog-card__text">
                                            <p>
                                            Curug Cimarinjung adalah air terjun yang spektakuler di wilayah Subang. Dikelilingi oleh hutan hijau yang lebat, air terjun ini memiliki tinggi sekitar 80 meter dan terkenal dengan keindahan alamnya. Pengunjung dapat menikmati trekking menyusuri hutan untuk mencapai air terjun ini.<br>
                                            HTM:Umumnya biaya masuk sekitar Rp 5.000 - Rp 10.000 per orang, ditambah biaya parkir dan mungkin juga biaya guide jika diperlukan.
                                            </p>
                                        </div>
                                    </div> <!-- end blog-card -->
                                </div> <!-- grid-list-items -->
                            <!-- </div>     -->
                        </div> <!-- end grid-block-->
                    </div> <!-- end row -->
               </section>
        </section> <!-- s-content-->

        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">

            <div class="row row-x-center text-center">
                <div class="column xl-8 lg-12">

                    <div class="s-cta__content">
                        <h2 class="text-display-title">
                        Subang, kota kreatif di tengah pesona alam
                        </h2>
                        <p class="lead">
                        "Subang, kabupaten di Jawa Barat, terkenal dengan keindahan alamnya, seni budaya yang kaya, serta hasil pertaniannya seperti teh, padi, dan tembakau Virginia"
                        </p>
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