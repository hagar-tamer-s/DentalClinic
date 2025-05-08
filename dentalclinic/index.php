<?php

include "db_connection.php";

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dental Clinic</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="./images/clinic logo.png">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/all.min.css">

</head>
<body>
  <nav class="bg-white shadow-sm">
    <div class="container-fluid d-flex align-items-center justify-content-between py-2 px-4">
      <div>
        <img src="./images/logo.png" alt="Logo" height="160">
      </div>
      <div class="d-flex align-items-center gap-3">
        <div class="text-secondary text-end" style="font-size: 14px;">
          <i class="bi bi-geo-alt"></i><br>
          <span data-en="NASR CITY . MAADI . MOKATTAM" data-ar="مدينة نصر . المعادي . المقطم">NASR CITY . MAADI . MOKATTAM</span>
        </div>
        <div>
          <button class="btn text-white px-4" style="background: linear-gradient(to bottom, #c09823, #001fbc);">
          <a href="./contact us.html" target="_blank" class="call">  <span data-en="CALL NOW" data-ar="اتصل الآن">CALL NOW</span></a>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-expand-lg border-top border-bottom">
    <div class="container justify-content-center">
      <ul class="navbar-nav">

        <li class="nav-item"><a class="nav-link active" href="index.php" data-en="HOME" data-ar="الرئيسية">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="ourteam.php"  data-en="OUR TEAM" data-ar="فريقنا">OUR TEAM</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php"  data-en="SERVICES" data-ar="الخدمات">SERVICES</a></li>
        <li class="nav-item"><a class="nav-link" href="ourbranches.php"  data-en="OUR BRANCHES" data-ar="فروعنا">OUR BRANCHES</a></li>
        <li class="nav-item"><a class="nav-link" href="gallerycases.php"  data-en="CASES GALLERY" data-ar="معرض الحالات">CASES GALLERY</a></li>

        <li class="nav-item"><a class="nav-link" href="contact_us.php"  data-en="CONTACT US" data-ar="اتصل بنا">CONTACT US</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php" data-en="log in" data-ar="السياحة العلاجية">Login</a></li>

      </ul>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <section class="hero" style="background-image: url(''); height: 400px; background-size: cover;">
    <div class="container text-center text-white">
      <h1 style="color: black;" data-en="Welcome to our dental clinic" data-ar="مرحبًا بكم في عيادتنا للأسنان">Welcome to our dental clinic</h1>
      <br>
      <img src="./images/original-afdc4e07b36c5a157cfe631b9867fe13.gif" alt="" width="150px">
      <p style="color: black;" data-en="We are here to provide the best care for your oral and dental health" data-ar="نحن هنا لتقديم أفضل رعاية لصحتك الفموية والأسنان">We are here to provide the best care for your oral and dental health</p>
      <a href="./book.php" target="_self" class="btn btn-primary" data-en="Book Now" data-ar="احجز الآن">Book Now</a>
    </div>
  </section>
  <div id="clinicCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/slide1.jpg" class="d-block w-100" alt="Slide 1" style="height: 800px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="./images/slide2.jpg" class="d-block w-100" alt="Slide 2" style="height: 800px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img src="./images/slide3.jpg" class="d-block w-100" alt="Slide 3" style="height: 800px; object-fit: cover;">
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#clinicCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#clinicCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#clinicCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#clinicCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#clinicCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  </div>

  <section class="services py-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4">
          <i class="bi bi-tooth-fill" style="font-size: 40px;"></i>
          <i class="fa-solid fa-tooth" style="font-size: 40px;"></i>
          <h4 data-en="Teeth Cleaning" data-ar="تنظيف الأسنان">Teeth Cleaning</h4>
          <p data-en="We offer modern and safe teeth cleaning services." data-ar="نقدم خدمات تنظيف الأسنان بطرق حديثة وآمنة."style="text-align: justify;">We offer modern and safe teeth cleaning services designed to ensure optimal oral health. Our advanced techniques and state-of-the-art equipment provide a thorough clean while ensuring maximum comfort and safety. Whether you're due for a routine cleaning or looking for a more specialized treatment, our professional team is here to help you maintain a healthy , sir. modern and safe teeth cleaning services.

</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-braces" style="font-size: 40px;"></i>
          <i class="fa-solid fa-face-laugh" style="font-size: 40px;"></i>
          <h4 data-en="Orthodontics" data-ar="تقويم الأسنان">Orthodontics</h4>
          <p data-en="We provide orthodontic services to ensure a beautiful smile." data-ar="نقدم خدمات تقويم الأسنان لضمان ابتسامة جميلة."style="text-align: justify;">We provide comprehensive orthodontic services to help you achieve a beautiful, confident smile. Our expert orthodontists use the latest technology and techniques to create personalized treatment plans tailored to your unique needs. Whether you're looking for traditional braces, clear aligners, or other orthodontic solutions, we are committed to providing effective and comfortable care to help you smile .

</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-teeth" style="font-size: 40px;"></i>
          <i class="fa-solid fa-laptop" style="font-size: 40px;"></i>
          <h4 data-en="Dental Implants" data-ar="زراعة الأسنان">Dental Implants</h4>
          <p data-en="We perform dental implants using advanced technologies." data-ar="نقوم بزراعة الأسنان باستخدام تقنيات متقدمة."style="text-align: justify;">We perform dental implants using advanced technologies to restore both the function and aesthetics of your smile. Our skilled dental professionals use state-of-the-art equipment and precision techniques to ensure long-lasting, natural-looking results. From the initial consultation to the final restoration, we are dedicated to providing a seamless and comfortable experience.

</p>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials bg-light py-5">
    <div class="container text-center">
      <h2 data-en="Patient Reviews" data-ar="مراجعات المرضى">Patient Reviews</h2>
      <div class="row">
        <div class="col-md-4">
          <p data-en="The best dental care experience I've ever had. The doctors were professional and the atmosphere was relaxing!" data-ar="أفضل تجربة علاج أسنان مررت بها، كان الأطباء محترفين والجو مريح!"></p>
          <strong>- Mohamed Ali</strong>
        </div>
        <div class="col-md-4">
          <p data-en="The clinic is very clean and the medical team is great. Highly recommended!" data-ar="العيادة نظيفة جداً والفريق الطبي رائع، أوصي بها!"></p>
          <strong>- Fatima Hassan</strong>
        </div>
        <div class="col-md-4">
          <p data-en="Excellent and professional service. I will definitely come back!" data-ar="خدمة مميزة واحترافية، سأعود بالتأكيد!"></p>
          <strong>- Ahmed Said</strong>
        </div>
      </div>
    </div>
  </section>

  <section class="location py-5">
    <div class="container text-center">
      <h2 data-en="Our Location" data-ar="موقعنا">Our Location</h2>
      <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </section>

  <!--<section class="contact py-5">
    <div class="container text-center">
      <h2 data-en="Contact Us" data-ar="اتصل بنا">Contact Us</h2>
      <form>
        <input type="text" class="form-control" placeholder="Your Name" required>
        <input type="email" class="form-control mt-3" placeholder="Your Email" required>
        <textarea class="form-control mt-3" rows="3" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn btn-primary mt-3">Send Message</button>
      </form>
    </div>
  </section>-->
<button onclick="scrollToTop()" class="btn btn-primary position-fixed"
style="bottom: 20px; right: 20px; z-index: 1050;">
↑
</button>
<script>
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>


  <footer class="bg-dark text-white py-3 text-center">
    <p>© 2025 Dental Clinic. All Rights Reserved.</p>
  </footer>

  <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
