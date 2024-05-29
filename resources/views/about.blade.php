<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Welcome to the most extraordinary hotel in Boston">
  <meta name="keywords" content="hotel,boston hotel,new england hotel">
  <!-- <script src="https://kit.fontawesome.com/083f23503a.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
  <title>KostKu | Tentang Kami
  </title>
  
</head>

<body>
  @include('layouts.header')
  <section id="about-info" class="bg-light py-3">
    <div class="container">
      <div class="info-left">
        <h1 class="l-heading"><span class="text-primary">Tentang</span>Kami</h1>
        <p>KostKu adalah oasis kenyamanan dan kemewahan yang sempurna bagi para wisatawan dan pelancong bisnis. Dengan perpaduan desain modern dan kehangatan pelayanan khas Indonesia, kami berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan.</p>
        <p>Kami menawarkan berbagai fasilitas unggulan yang dirancang untuk memenuhi kebutuhan setiap tamu</p>
      </div>
      <div class="info-right">
        <img src="./img/image_resources/photo-2.jpg" alt="hotel">
      </div>
    </div>
  </section>
  <div class="clr"></div>
  <section id="testimonials" class="py-3">
    <div class="container">
      <h2 class="l-heading">Apa pendapat mereka tentang kami</h2>
      <div class="testimonial bg-primary">
        <img src="./img/image_resources/person-1.jpg" alt="Samantha">
        <p>Saya sangat terkesan dengan pelayanan di KostKu.Stafnya ramah dan profesional, kamar bersih dan nyaman, serta lokasinya sangat strategis. Sarapan yang disajikan juga sangat lezat dan variatif. Pasti akan kembali lagi ke sini!

        Pengalaman Menginap yang Tak Terlupakan</p>
      </div>
      <div class="testimonial bg-primary">
        <img src="./img/image_resources/person-2.jpg" alt="Jen">
        <p>KostKu benar-benar memberikan pengalaman menginap yang luar biasa. Kolam renangnya sangat menyegarkan dan pemandangannya indah. Kamarnya luas dan fasilitasnya lengkap. Saya merasa sangat nyaman dan puas selama menginap di sini.

        Pelayanan Prima dan Lokasi yang Sempurna</p>
      </div>
    </div>
  </section>
  @extends('layouts.footer')
</body>

</html>