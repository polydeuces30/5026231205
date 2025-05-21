<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Yayasan Tzu Chi Indonesia</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

<!-- Custom Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

<!-- Responsive -->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

<!-- Favicon -->
<link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />

<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">

<!-- Font Awesome (for older IEs) -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">

<!-- Owl Carousel Styles -->
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

<!-- Fancybox Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
         function contact()
         {
             var id = document.getElementById("id").value;
             var nama = document.getElementById("nama").value;
             if (nrp.length == 0)
             {
                 Swal.fire({
                     title: "Pesan Kesalahan",
                     text: "id harus diisi !",
                     icon: "error"
                 });
                 document.getElementById("nrp").focus();
                 return false;
             }
             if (nama.length == 0)
             {
                 Swal.fire({
                     title: "Pesan Kesalahan",
                     text: "Nama harus diisi !",
                     icon: "error"
                 });
                 document.getElementById("nama").focus();
                 return false;
             }
             if (isNaN(nrp))
             {
                 Swal.fire({
                     title: "Pesan Kesalahan",
                     text: "id harus angka !",
                     icon: "error"
                 });
                 document.getElementById("nrp").focus();
                 return false;
             }
             if (nrp.length != 10)
             {
                 Swal.fire({
                     title: "Pesan Kesalahan",
                     text: "id harus 10 digit !",
                     icon: "error"
                 });
                 document.getElementById("nrp").focus();
                 return false;
             }
             if (nama.length < 1)
             {
                 Swal.fire({
                     title: "Pesan Kesalahan",
                     text: "Nama minimal 1 digit !",
                     icon: "error"
                 });
                 document.getElementById("nama").focus();
                 return false;
             }
             const regexAngka = /[0-9]/;
             if (regexAngka.test(nama)) {
                 Swal.fire({
                     title: "Pesan Kesalahan",
                     text: "Nama tidak boleh ada angka !",
                     icon: "error"
                 });
                 document.getElementById("nama").focus();
                 return false;
             }
         }
     </script>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="index.html"><img src="images/tzuchi.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">Tentang Tzu Chi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">Misi Tzu Chi</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Berita & Kegiatan</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="client.html">Relawan</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="Contact.html">Donasi</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="user_icon"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                     <div class="user_icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                  </form>
                  <div class="call_btn"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Hubungi Kami</span></a></div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section start -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <img src="images/517-Banner-Web-PA-2025.jpg" class="banner_img">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="contact_bt"><a href="contact.html">Read More</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="contact_bt"><a href="contact.html">Read More</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="contact_bt"><a href="contact.html">Read More</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="contact_bt"><a href="contact.html">Read More</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- service section start -->
      <div class="service_section layout_padding">
         <div class="container">
            <h1 class="service_taital">Bantuan Amal</h1>
            <div class="service_section_2 layout_padding">
               <div class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="image_box">
                        <img src="images/1708222624-misi-bantuan.png"/>
                     </div>
                     <h3 class="sound_text">BANTUAN INDIVIDU
                     <p>Ribuan penerima bantuan jangka panjang (Gan En Hu) membutuhkan uluran tangan kita</h3>
                     <div class="buy_bt"><a href="#">DONASI</a></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/1708222632-misi-bedah-rumah.png" alt="#" />
                     </div>
                     <h3 class="sound_text">BEDAH RUMAH
                     <p>Mari membangun harapan dan wujudkan mimpi mereka melalui rumah layak huni yang sehat</h3>
                     <div class="buy_bt"><a href="#">DONASI</a></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/1708222641-misi-pendidikan.png" alt="#" />
                     </div>
                     <h3 class="sound_text">PENDIDIKAN
                     <p>Dukung anak-anak Indonesia memiliki pendidikan yang layak agar mereka dapat meraih cita-citanya</h3>
                     <div class="buy_bt"><a href="#">DONASI</a></div>
                  </div>
                  <div class="item">
                     <div class="image_box">
                        <img src="images/1708222650-misi-bencana.png" alt="#" />
                     </div>
                     <h3 class="sound_text">BENCANA
                     <p>Melepaskan penderitaan, menentramkan jiwa, menentramkan raga, memulihkan kehidupan</h3>
                     <div class="buy_bt"><a href="#">DONASI</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_main">
               <div class="row">
                  <div class="col-sm-12">
                     <h1 class="about_taital"></h1>
                     <div class="about_img img-fluid"><img src="images/820-3.jpg"></div>
                     <h1 class="about_text_1">DENGAN CINTA KASIH MELENYAPKAN PENDERITAAN</h1>
                     <p class="about_text_1">TZU CHI merupakan lembaga sosial kemanusiaan yang didirikan oleh Master Cheng Yen pada tahun 1966 dan berpusat di Hualien, Taiwan.</p>
                     <p class="about_text_1">TZU CHI berkomitmen menebarkan cinta kasih universal, dengan welas asih melenyapkan penderitaan, dan membawa perubahan positif di dunia.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- price section start -->
      <div class="price_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="price_taital">BERSAMA KITA WUJUDKAN DUNIA YANG LEBIH BAIK</h1>
                  <p class="about_text">Hingga tahun 2024, relawan TZU CHI telah tersebar di 68 negara dan telah memberikan bantuan ke 136 negara
                     tanpa memandang suku, bangsa, ras, agama.</p>
               </div>
            </div>
            <div class="price_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="price_box">
                        <div class="taital_main">
                        </div>
                        <p class="dummy_text">Temukan kebahagiaan saat berbagi</p>
                        </p>
                        <div class="readmore_bt"><a href="#">Donasi</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="price_box">
                        <p class="dummy_text">Bergabunglah dengan kami dalam barisan relawan</p>
                        <div class="readmore_bt"><a href="#">menjadi Relawan</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- price section end -->
      <!-- client section start -->
      <div class="client_sectiion">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">BERITA DAN KISAH INSPIRATIF</h1>
               </div>
            </div>
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#custom_slider" data-slide-to="0" class="active"></li>
                  <li data-target="#custom_slider" data-slide-to="1"></li>
                  <li data-target="#custom_slider" data-slide-to="2"></li>
                  <li data-target="#custom_slider" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                           <div class="client_right">

                              <h3 class="name_text"><a href="https://www.tzuchi.or.id/read-berita/baksos-kesehatan-tzu-chi-ke-148-sebuah-dedikasi-dan-keteladanan/12550"/> Kesehatan Tzu Chi ke-148: Sebuah Dedikasi dan Keteladanan<span style="float: right;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025</p>
                              <p class="lorem_text">Baksos Kesehatan Tzu Chi ke-148 di Tanjungbalai memberikan harapan bagi pasien seperti Usman yang bertahun-tahun menderita hernia. Dedikasi tim medis dan relawan telah menghadirkan apa yang sangat dibutuhkan oleh masyarakat.</p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text"><a href="https://www.tzuchi.or.id/read-berita/kunjungan-kasih-dalam-misi-cinta-kasih-tanpa-batas/12549"/> Kasih dalam Misi Cinta Kasih Tanpa Batas <span style="float: left;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025</p>
                              <p class="lorem_text">Relawan Tzu Chi Tanjung Balai Karimun melaksanakan kunjungan kasih ke Pulau Tanjung Batu Kota untuk menyalurkan bantuan sekaligus mempererat tali kasih dengan 12 Gan En Hu (penerima bantuan Tzu Chi). </p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text"><a href="https://www.tzuchi.or.id/read-berita/baksos-kesehatan-tzu-chi-ke-148-karena-mereka-istimewa/12545"></a> Kesehatan Tzu Chi ke-148: Karena Mereka Istimewa <span style="float: right;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025</p>
                              <p class="lorem_text">Relawan Tzu Chi Tanjung Balai Karimun melaksanakan kunjungan kasih ke Pulau Tanjung Batu Kota untuk menyalurkan bantuan sekaligus mempererat tali kasih dengan 12 Gan En Hu (penerima bantuan Tzu Chi).</p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text"><a href="https://www.tzuchi.or.id/read-berita/pelatihan-relawan-abu-putih-ke-3-he-qi-tangerang/12548"></a> Relawan Abu Putih Ke-3 He Qi Tangerang<span style="float: left;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025</p>
                              <p class="lorem_text">Pelatihan Relawan Tzu Chi komunitas He Qi Tangerang (Abu Putih Ke-3) bertemakan Dengan Keyakinan, Ikrar, dan Praktik dalam Melindungi Bumi dan Semua Makhluk di Tzu Chi Center, Pantai Indah Kapuk (PIK), Jakarta Utara.</p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text"><a href="https://www.tzuchi.or.id/read-berita/eco-craft-kreasi-unik-dari-barang-tak-terpakai/12547">Eco-Craft: Kreasi Unik dari Barang tak Terpakai</a> <span style="float: right;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025</p>
                              <p class="lorem_text">Relawan Tzu Chi Tanjung Balai Karimun melaksanakan kunjungan kasih ke Pulau Tanjung Batu Kota untuk menyalurkan bantuan sekaligus mempererat tali kasih dengan 12 Gan En Hu (penerima bantuan Tzu Chi).</p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text">Jonyro <span style="float: left;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025</p>
                              <p class="lorem_text">Bertema Eco-Craft, relawan muda-mudi Tzu Chi (Tzu Ching) mengajak generasi muda mengolah sampah plastik menjadi kerajinan bernilai. Selain kreatif, cara ini juga menanamkan kesadaran pentingnya menjaga lingkungan sejak dini. </p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text"><a href="https://www.tzuchi.or.id/read-berita/dimulainya-program-renovasi-rumah-tak-layak-huni-di-bandung/12544">Dimulainya Program Renovasi Rumah Tak Layak Huni di Bandung</a><span style="float: right;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025e</p>
                              <p class="lorem_text">Program Bebenah Kampung Renovasi Rumah Tidak Layak Huni di Kota Bandung mulai dilaksanakan. Sebanyak 68 rumah di Kel. Jamika siap untuk diperbaiki, dari total 500 rumah yang direncanakan direnovasi di Kota Kembang ini. </p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text"><a href="https://www.tzuchi.or.id/read-berita/mendidik-dengan-cinta-kasih-membentuk-karakter-sejak-dini/12542">Mendidik dengan Cinta Kasih, Membentuk Karakter Sejak Dini</a> <span style="float: left;"><img src="images/quick-icon.png"></span></h3>
                              <p class="dolor_text">📅 07 Mei 2025e</p>
                              <p class="lorem_text">Tzu Chi Pekanbaru mengadakan kegiatan “Sosialisasi Orang Tua Murid” untuk menyambut tahun ajaran baru 2025/2026. Kegiatan ini memperkenalkan program Pendidikan Budi Pekerti serta misi pendidikan Tzu Chi. </p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="images/client-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_taital">Menjadi Bagian Dari Kami</h1>
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="contact_main layout_padding">
                        <form action="/action_page.php">
                           <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                           </div>
                           <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Number" name="Phone Number">
                           </div>
                           <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                           </div>
                           <div class="form-group">
                              <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Message"></textarea>
                           </div>
                        </form>
                        <div class="send_bt"><a href="#">Send Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section">
         <div class="location_bg">
            <div class="container">
               <div class="location_main">
                  <ul>
                     <li>
                        <a href="https://www.facebook.com/tzuchiindonesia"><img src="images/facebook.png">
                     </li>
                     <li>
                        <a href="https://www.youtube.com/channel/UCfywSuUWqtJOLO10a"><img src="images/youtube.png">
                     </li>
                     <li>
                        <a href="https://www.instagram.com/tzuchiindonesia/"><img src="images/instagram.png">
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright © 2025 Yayasan Buddha Tzu Chi Indonesia <br> Powered By Tzuchi</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <!-- JS Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/plugin.js') }}"></script>

<!-- Sidebar -->
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('js/custom.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script>
         $('.owl-carousel').owlCarousel({
            loop:true,
            margin:35,
            nav:true,
            center: true,
            responsive:{
             0:{
                 items:1,
                    margin:0
                  },
                575:{
                    items:1,
                    margin:0
                },
                768:{
                    items:3,
                    margin:0
                },
                1000:{
                    items:3
                }
            }
         })
      </script>
   </body>
</html>
