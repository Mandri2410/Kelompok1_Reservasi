<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Welcome to the most extraordinary hotel in Boston">
  <meta name="keywords" content="hotel,boston hotel,new england hotel">
  <script src="https://kit.fontawesome.com/083f23503a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
  <title>KostKu | Beranda </title>
</head>

<body>
  @include('layouts.header')
    <div id="showcase">
      <div class="container">
        <div class="showcase-content">
          <h1><span class="text-primary">Enjoy</span> Your Stay</h1>
          <p class="lead">Nikmati Malam Anda Dengan Layanan Bintang 5 kami</p>
          <a class="btn" href="{{ route('about') }}">About Our Kost</a>
        </div>
      </div>
    </div>
  </header>
  <section id="home-info" class="bg-dark">
    <div class="info-img"></div>
    <div class="info-content">
      <h2><span class="text-primary">Mengenai</span> KostKu</h2>
      <p>
        Berdiri Pada Tahun 2022 KostKu menjadi kost yang menjadi salah satu pilihan terbaik dalam menginap di pontianak
        KostKu kini memiliki cabang cabang yang kini tersebar di seluruh kota kota besar di pulau kalimantan 
      </p>
      <a href="about.html" class="btn btn-light">Read more</a>
    </div>
  </section>

  <section id="features">
    <div class="box bg-light">
      <i class="fa-solid fa-hotel fa-3x"></i>
      <h3>Great Location</h3>
    </div>
    <div class="box bg-primary">
      <i class="fa-solid fa-utensils fa-3x"></i>
      <h3>Free Meals</h3>
    </div>
    <div class="box bg-light">
      <i class="fa-solid fa-dumbbell fa-3x"></i>
      <h3>Fitness Room</h3>
    </div>
  </section>

  <div class="clr"></div>

  @include('layouts.footer')
</body>

</html>