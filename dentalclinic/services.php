<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services - Dental Clinic</title>
  <link rel="icon" href="./images/clinic logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
    }
    .service-card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 40px;
      margin-bottom: 30px;
      text-align: center;
    }
    .service-icon {
      font-size: 50px;
      color: #007bff;
      margin-bottom: 15px;
    }
    .service-title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #007bff;
    }
    .service-desc {
      font-size: 1.1rem;
      color: #555;
      line-height: 1.6;
    }
    .tab-content {
      margin-top: 30px;
    }
    .accordion-button {
      background-color: #007bff;
      color: white;
      font-weight: bold;
    }
    .accordion-button:not(.collapsed) {
      background-color: #0056b3;
    }
    .service-title, .service-desc {
      color: #333;
    }
    .container {
      max-width: 1200px;
    }
    .service-title {
      text-transform: uppercase;
    }
    .fixed-back-button {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 999;
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
}

.fixed-back-button:hover {
  background-color: #0056b3;
}


body {
  padding-bottom: 80px; 
}

  </style>
</head>
<body>
<a href="index.php">
  <button class="btn btn-primary fixed-back-button">Go to Home</button>
</a>

  <div class="container py-5">
    <h2 class="text-center mb-5" style="font-size: 3rem; color: #007bff;">Our Comprehensive Dental Services</h2>
    
    <ul class="nav nav-tabs" id="serviceTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="cleaning-tab" data-bs-toggle="tab" href="#cleaning" role="tab" aria-controls="cleaning" aria-selected="true">Teeth Cleaning</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="orthodontics-tab" data-bs-toggle="tab" href="#orthodontics" role="tab" aria-controls="orthodontics" aria-selected="false">Orthodontics</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="implants-tab" data-bs-toggle="tab" href="#implants" role="tab" aria-controls="implants" aria-selected="false">Dental Implants</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="cosmetic-tab" data-bs-toggle="tab" href="#cosmetic" role="tab" aria-controls="cosmetic" aria-selected="false">Cosmetic Dentistry</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pediatric-tab" data-bs-toggle="tab" href="#pediatric" role="tab" aria-controls="pediatric" aria-selected="false">Pediatric Dentistry</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="oral-surgery-tab" data-bs-toggle="tab" href="#oral-surgery" role="tab" aria-controls="oral-surgery" aria-selected="false">Oral Surgery</a>
      </li>
    </ul>
    
    <div class="tab-content" id="serviceTabsContent">
      
      <div class="tab-pane fade show active" id="cleaning" role="tabpanel" aria-labelledby="cleaning-tab">
        <div class="service-card">
          <i class="fas fa-tooth service-icon"></i>
          <h3 class="service-title">Teeth Cleaning</h3>
          <p class="service-desc">Regular professional cleaning is essential for maintaining healthy teeth and gums. Our skilled hygienists remove plaque, tartar, and stains from the teeth using state-of-the-art equipment, leaving you with a fresh and clean feeling. This treatment prevents cavities and gum disease, maintaining long-term oral health and keeping your smile bright. Regular checkups help catch potential problems before they worsen, ensuring you stay on top of your oral hygiene routine.</p>
        </div>
      </div>
      
      <div class="tab-pane fade" id="orthodontics" role="tabpanel" aria-labelledby="orthodontics-tab">
        <div class="service-card">
          <i class="fas fa-teeth service-icon"></i>
          <h3 class="service-title">Orthodontics</h3>
          <p class="service-desc">Orthodontic treatments aim to correct dental irregularities and improve the alignment of teeth and jaws. Our clinic offers traditional braces as well as clear aligners for a more discreet approach. Misaligned teeth can lead to difficulty chewing, jaw pain, and tooth wear, which is why it's important to address these issues early. Whether you're looking to straighten your teeth for cosmetic reasons or to improve oral function, we provide personalized treatment plans for every patient.</p>
        </div>
      </div>
      
      <div class="tab-pane fade" id="implants" role="tabpanel" aria-labelledby="implants-tab">
        <div class="service-card">
          <i class="fas fa-syringe service-icon"></i>
          <h3 class="service-title">Dental Implants</h3>
          <p class="service-desc">Dental implants are the best solution for replacing missing teeth. Made of titanium, they integrate with your jawbone to act as artificial roots. These implants serve as a sturdy foundation for crowns or bridges, giving you a natural-looking and fully functional smile. Implants are a permanent and reliable option for patients who have lost teeth due to decay, injury, or other conditions. Unlike dentures, they don’t slip, so you can talk and eat confidently.</p>
        </div>
      </div>
      
      <div class="tab-pane fade" id="cosmetic" role="tabpanel" aria-labelledby="cosmetic-tab">
        <div class="service-card">
          <i class="fas fa-smile-beam service-icon"></i>
          <h3 class="service-title">Cosmetic Dentistry</h3>
          <p class="service-desc">Cosmetic dentistry focuses on enhancing the visual appeal of your smile. From teeth whitening and veneers to crowns and bonding, we provide treatments that can fix imperfections like discoloration, chipped teeth, or gaps. Our experienced team works with you to design a customized treatment plan that helps you achieve the perfect smile. Whether you're looking for a subtle improvement or a complete makeover, cosmetic dentistry can boost your self-esteem and make you feel more confident.</p>
        </div>
      </div>
      
      <div class="tab-pane fade" id="pediatric" role="tabpanel" aria-labelledby="pediatric-tab">
        <div class="service-card">
          <i class="fas fa-child service-icon"></i>
          <h3 class="service-title">Pediatric Dentistry</h3>
          <p class="service-desc">We provide specialized dental care for children, ensuring that their first experiences at the dentist are positive. Pediatric dentistry focuses on the dental needs of growing children, from teething and early checkups to cavity treatment and orthodontic evaluations. Our team is trained to handle the unique needs of young patients and to educate both children and parents about proper oral hygiene habits that will last a lifetime.</p>
        </div>
      </div>
      
      <div class="tab-pane fade" id="oral-surgery" role="tabpanel" aria-labelledby="oral-surgery-tab">
        <div class="service-card">
          <i class="fas fa-user-md service-icon"></i>
          <h3 class="service-title">Oral Surgery</h3>
          <p class="service-desc">Oral surgery encompasses a variety of procedures aimed at treating complex dental issues. This includes tooth extractions, wisdom teeth removal, and corrective jaw surgery. These procedures are necessary when other dental treatments can't address the problem effectively. Our skilled oral surgeons perform these treatments with the utmost care to ensure that your experience is comfortable, and recovery is as quick and painless as possible.</p>
        </div>
      </div>
      
    </div>
    
  </div>

  <div class="container my-5">
    <h3 class="text-center mb-4" style="font-size: 2rem;">Detailed Services</h3>
    <div class="accordion" id="servicesAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Teeth Cleaning
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#servicesAccordion">
          <div class="accordion-body">
            Teeth cleaning is an essential part of maintaining good oral health. During a cleaning, the hygienist will remove plaque, tartar, and stains from your teeth. This helps to prevent gum disease and cavities. Regular cleanings are recommended every six months to maintain optimal oral hygiene and keep your smile looking fresh.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Orthodontics
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#servicesAccordion">
          <div class="accordion-body">
            Orthodontic treatment is designed to straighten and align your teeth. Braces and aligners are commonly used to correct bite issues and improve the appearance of your smile. Whether you’re a child or an adult, orthodontics can help improve your bite and boost your confidence by giving you straighter, healthier teeth.
          </div>
        </div>
      </div>
    </div>
  </div>
<button onclick="scrollToTop()" class="btn btn-primary position-fixed"
style="bottom: 20px; right: 20px; z-index: 1050;">
↑
</button>
<script src="./js/bootstrap.bundle.min.js"></script></body>
<script>
  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

</body>
</html>
