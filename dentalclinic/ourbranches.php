<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Branches</title>
  <link rel="icon" href="./images/clinic logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
    }
    .branch-card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 30px;
      text-align: center;
    }
    .branch-icon {
      font-size: 50px;
      color: #007bff;
      margin-bottom: 15px;
    }
    .branch-title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #007bff;
    }
    .branch-desc {
      font-size: 1.1rem;
      color: #555;
      line-height: 1.6;
    }
    .container {
      max-width: 1200px;
    }
    .map-container {
      margin-top: 50px;
      height: 400px;
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
    <h2 class="text-center mb-5" style="font-size: 3rem; color: #007bff;">Our Branches</h2>
    
    <div class="row">
      
      <div class="col-md-4">
        <div class="branch-card">
          <i class="fas fa-map-marker-alt branch-icon"></i>
          <h3 class="branch-title">Downtown Branch</h3>
          <p class="branch-desc">
            Located in the heart of the city, our Downtown Branch offers a full range of veterinary services. Whether you need routine check-ups or specialized care, our expert team is ready to assist your pet with the highest level of care.
          </p>
          <p><strong>Address:</strong> 123 City Center, Downtown</p>
          <p><strong>Phone:</strong> +1 234 567 890</p>
          <p><strong>Hours:</strong> Monday - Friday: 9:00 AM - 6:00 PM</p>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="branch-card">
          <i class="fas fa-map-marker-alt branch-icon"></i>
          <h3 class="branch-title">Suburban Branch</h3>
          <p class="branch-desc">
            Located in a quiet suburban neighborhood, this branch specializes in preventive care and emergency services. It's perfect for clients who prefer a peaceful and less crowded environment for their pets' health care.
          </p>
          <p><strong>Address:</strong> 456 Green Valley, Suburbia</p>
          <p><strong>Phone:</strong> +1 345 678 901</p>
          <p><strong>Hours:</strong> Monday - Saturday: 8:00 AM - 7:00 PM</p>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="branch-card">
          <i class="fas fa-map-marker-alt branch-icon"></i>
          <h3 class="branch-title">Northside Branch</h3>
          <p class="branch-desc">
            Our Northside Branch is equipped with state-of-the-art medical equipment and offers specialized treatments such as surgery and rehabilitation services for pets that require intensive care.
          </p>
          <p><strong>Address:</strong> 789 North Avenue, Northside</p>
          <p><strong>Phone:</strong> +1 456 789 012</p>
          <p><strong>Hours:</strong> Monday - Sunday: 10:00 AM - 8:00 PM</p>
        </div>
      </div>

    </div>

    <section class="location py-5">
        <div class="container text-center">
          <h2 data-en="Our Location" data-ar="موقعنا">Our Location</h2>
          <iframe src="https://www.google.com/maps/embed?pb=..." width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </section>
      <div class="container my-5">
        <h3 class="text-center mb-4">What Our Patients Say</h3>
        <div class="row justify-content-center">
          
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded shadow border">
              <p class="mb-1">"Dr. Ahmed Ali is very professional and kind. I felt no pain at all during my treatment. Highly recommend him!"</p>
              <small class="text-muted">- Noor S.</small>
            </div>
          </div>
      
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded shadow border">
              <p class="mb-1">"Dr. Sara Mohamed changed my life with her orthodontic work. I love my new smile! She made me feel at ease every step of the way."</p>
              <small class="text-muted">- Omar K.</small>
            </div>
          </div>
      
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded shadow border">
              <p class="mb-1">"Dr. Ali Tarek was amazing with my kids. He made them feel so comfortable and explained everything in a way they could understand."</p>
              <small class="text-muted">- Hala N.</small>
            </div>
          </div>
      
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded shadow border">
              <p class="mb-1">"The cleaning I got from Dr. Rania Farouk was super gentle and effective. Highly recommend her!"</p>
              <small class="text-muted">- Fady M.</small>
            </div>
          </div>
      
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded shadow border">
              <p class="mb-1">"Dr. Mona Hassan has a great eye for cosmetic dentistry. I love the results! My smile has never looked better."</p>
              <small class="text-muted">- Dina R.</small>
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded shadow border">
              <p class="mb-1">"I received excellent care from Dr. Ahmed Fouad. He helped me with my gum issues, and now my smile feels healthier than ever."</p>
              <small class="text-muted">- John M.</small>
            </div>
          </div>
    
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="bg-white p-4 rounded shadow border">
              <p class="mb-1">"Dr. Omar El-Sayed was amazing in performing my oral surgery. The recovery was quicker than I expected!"</p>
              <small class="text-muted">- Layla T.</small>
            </div>
          </div>
        </div>
    </div>
    <div class="container my-5">
        <h3 class="text-center mb-4">Frequently Asked Questions</h3>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are your working hours?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Our clinics are open from 9:00 AM to 6:00 PM from Sunday to Thursday. We are closed on Friday and Saturday.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Do I need an appointment for a check-up?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, it is highly recommended to book an appointment in advance. However, walk-ins are accepted depending on availability.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Are your treatments covered by insurance?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we accept a wide range of insurance plans. Please contact us to verify if your insurance is accepted at our clinic.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What should I do if I have a dental emergency outside of your working hours?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        For dental emergencies outside of our working hours, please call our emergency hotline, and our staff will provide instructions for immediate care.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        How do I book an appointment?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can book an appointment by calling our clinic directly or using our online booking system through our website.
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
