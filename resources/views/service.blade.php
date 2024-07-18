<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kecamatan - Kabupaten</title>

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
                            <img src="{{asset('storage')}}/assets/images/logo.svg" alt="Homepage">
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
                                <span class="page-title__small-type text-pretitle">Pemerintahan</span>
                                Data Kecamatan 
                            </h1>
                            
                        </div>
                    </div>
               </section> <!-- pageheader -->  

               <section class="s-pagecontent pagecontent">

                    <!-- <div class="row pageintro">
                        <div class="column xl-6 lg-12">
                            <h2 class="text-display-title">High-impact services to help your business</h2>
                        </div>
                        <div class="column xl-6 lg-12 u-flexitem-x-right">
                            <p class="lead">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias eos quas blanditiis, quos sint nostrum fugit aperiam 
                            inventore optio itaque molestias corporis, ipsa tenetur eligendi nihil iste porro, natus culpa consequuntur? Maxime, 
                            corporis tempore. Sed tenetur veritatis velit recusandae eum, molestiae voluptate ducimus laudantium esse illo 
                            doloribus atque eligendi deleniti iusto. 
                            </p>
                        </div>                       
                    </div>  pageintro        -->

                    <div class="row">
                        <div class="column xl-12 grid-block">             
                            
                            <div class="grid-full grid-list-items list-items show-ctr">
                                
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Binong</h3>
                                    </div>
                                    <div class="list-items__item-text">

                                        <ul class="list-services">
                                            <li>Camat  : Hazizul Hakim, S.Sos., M.Si.</li>
                                            <li>Alamat : Jln. Raya Binong</li>
                                            <li>Telpon : (0260) 453302</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Blanakan</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        

                                        <ul class="list-services">
                                            <li>Camat  : Furwani, A.P., M.Si.</li>
                                            <li>Alamat : Jln. Raya Blanakan No. 1 Blanakan</li>
                                            <li>Telpon : (0260) 510362</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Ciasem</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        

                                        <ul class="list-services">
                                            <li>Camat  : E. Zaithon Thowi Anshari A.P., M.Si.</li>
                                            <li>Alamat : Jln. Jend. A. Yani No. 61 Sukamandi</li>
                                            <li>Telpon : (0260) 521890</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Ciater</h3>
                                    </div>
                                    <div class="list-items__item-text">
                                        

                                        <ul class="list-services">
                                            <li>Camat  : Imam Supardan S.IP.</li>
                                            <li>Alamat : Jln. Raya Ciater KM. 25,2 Ciater, Subang 41281</li>
                                            <li>Telpon : (0260) 470955</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Cibogo</h3>
                                    </div>
                                    <div class="list-items__item-text">

                                        <ul class="list-services">
                                            <li>Camat  : Sri Novia S.I.P.</li>
                                            <li>Alamat : Jl. Raya Cibogo KM 6,2 Cibogo Subang</li>
                                            <li>Telpon : (0260) 415566</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Cijambe</h3>
                                    </div>
                                    <div class="list-items__item-text">

                                        <ul class="list-services">
                                            <li>Camat  : H. NANA SUYATNA S.Pd., M.Si.</li>
                                            <li>Alamat : Jln. Raya Cijambe</li>
                                            <li>Telpon : (0260) 416340</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Cikaum</h3>
                                    </div>
                                    <div class="list-items__item-text">

                                        <ul class="list-services">
                                            <li>Camat  : Asep Sopandi, S.Pd.</li>
                                            <li>Alamat : Jln. Raya Cikaum</li>
                                            <li>Telpon : (0260) 462995</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Cipendeuy</h3>
                                    </div>
                                    <div class="list-items__item-text">

                                        <ul class="list-services">
                                            <li>Camat  : H. TONI S.Pd., M.Si.</li>
                                            <li>Alamat : Jln. Raya Cipeundeuy</li>
                                            <li>Telpon : (0260) 713248</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Cipunagara</h3>
                                    </div>
                                    <div class="list-items__item-text">

                                        <ul class="list-services">
                                            <li>Camat  : Ganjar Taufiq, S.IP.</li>
                                            <li>Alamat : Jln. Raya Cipunagara No. 95 Kecamatan Cipunagara</li>
                                            <li>Telpon : (0260) 452393</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                                
                                <div class="grid-list-items__item list-items__item">
                                    <div class="list-items__item-header">
                                        <h3 class="list-items__item-title">Kecamatan Cisalak</h3>
                                    </div>
                                    <div class="list-items__item-text">

                                        <ul class="list-services">
                                            <li>Camat  : SUMARDI S.STP.,M.AP.</li>
                                            <li>Alamat : Jln. Raya Cisalak, Subang</li>
                                            <li>Telpon : (0260) 480707</li>
                                        </ul>
                                    </div>
                                </div> <!-- end list-items__item -->
                               
                            </div> <!-- grid-list-items -->
                           

                        </div> <!-- end grid-block-->
                    </div> <!-- end row -->

               </section> <!-- pagecontent -->

               <section class="s-testimonials">

                    <div class="s-testimonials__header row row-x-center text-center">
                        <div class="column xl-8 lg-12">
                                <div class="swiper-pagination"></div>

                            </div> <!--end testimonials__slider --> 

                        </div> <!-- testimonials -->
                    </div> <!--end s-testimonials__content -->

               </section> 

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