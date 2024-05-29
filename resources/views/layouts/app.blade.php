<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Selamat Datang di Hotel kami">
  <meta name="keywords" content="hotel,untan">
  <script src="https://kit.fontawesome.com/083f23503a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
  <title>KostKu | Reservations</title>
</head>
<body>
  <header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="index.html">KostKu</a></h1>
        <ul>
          <li><a href="{{ route('index') }}">Index</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('reservations.index') }}">Reservations</a></li>
        </ul>
      </div>
    </nav>
  </header>

@yield('content')

