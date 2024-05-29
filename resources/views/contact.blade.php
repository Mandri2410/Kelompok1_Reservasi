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
  <title>KostKu | Contact</title>
</head>
<body>
  @include('layouts.header')
  <section id="contact-form" class="py-3">
    <div class="container">
      <h1 class="l-heading"><span class="text-primary">Contact</span>  Us</h1>
      <p>Please fill out the form below to contact us</p>
      <form action="process.php">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea name="message" 
          id="message"></textarea>
        </div>
        <button type="submit" class="btn">Submit</button>
    </form>
  </div>
  </section>
  <section id="contact-info" class="bg-dark">
      <div class="box">
        <i class="fa-solid fa-hotel fa-3x"></i>
        <h3>Location</h3>
        <p>Jl. Prof. Dr. H Jl. Profesor Dokter H. Hadari Nawawi</p>
      </div>
      <div class="box">
        <i class="fa-solid fa-phone fa-3x"></i>
        <h3>Phone Number</h3>
        <p>(+62)812 900 900 </p>
      </div>
      <div class="box">
        <i class="fa-solid fa-envelope fa-3x"></i>
        <h3>Email Address</h3>
        <p>xxFrontDesk@gmail.com</p>
      </div>
    </section>

  @include('layouts.footer')
</body>
</html>