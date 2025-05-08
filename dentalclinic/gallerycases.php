<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dental Gallery - Before & After</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 20px;
      scroll-behavior: smooth;
    }
    h1, h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .counter {
      font-size: 2em;
      color: #2d89ef;
      margin-bottom: 40px;
      text-align: center;
    }
    .container {
      width: 90%;
      margin: 0 auto;
    }
    .case {
      display: flex;
      justify-content: space-between;
      margin-bottom: 40px;
      padding: 20px;
      background: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      opacity: 0;
      transform: translateY(30px);
      transition: all 0.6s ease;
    }
    .case.show {
      opacity: 1;
      transform: translateY(0);
    }
    .case-item {
      width: 48%;
      text-align: center;
    }
    .case-item img {
      width: 100%;
      border-radius: 8px;
      transition: transform 0.3s ease;
    }
    .case-item p {
      margin-top: 10px;
      font-weight: bold;
    }
    .book-btn {
      margin-top: 15px;
      padding: 10px 20px;
      background-color: #2d89ef;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .testimonial {
      background: #fff;
      padding: 20px;
      margin: 20px auto;
      border-left: 5px solid #2d89ef;
      width: 80%;
      font-style: italic;
    }
    .video-section {
      text-align: center;
      margin: 40px auto;
    }
    .video-section iframe {
      width: 80%;
      height: 400px;
      border-radius: 10px;
    }
    .fixed-back-button {
      position: fixed;
      bottom: 20px;
      leftt: 20px;
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
    @media(max-width: 768px) {
      .case {
        flex-direction: column;
      }
      .case-item {
        width: 100%;
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>
<a href="index.php">
  <button class="btn btn-primary fixed-back-button">Go to Home</button>
</a>
  <h1>Before & After Dental Cases</h1>

  <div class="counter">
    More than <span id="counter">0</span> Smiles Transformed
  </div>

  <div class="container">
    <div class="case fade">
      <div class="case-item">
        <img src="./images/1.jpg" alt="Before">
        <p>Before</p>
        <a href="book.php"><button class="book-btn">Book Appointment</button></a>
      </div>
      <div class="case-item">
        <img src="./images/2.jpg" alt="After">
        <p>After</p>
        <a href="book.php"><button class="book-btn">Book Appointment</button></a>
      </div>
    </div>

    <div class="case fade">
      <div class="case-item">
        <img src="./images/66.jpg" alt="Before">
        <p>Before</p>
        <a href="book.php"><button class="book-btn">Book Appointment</button></a>
      </div>
      <div class="case-item">
        <img src="./images/44.jpg" alt="After">
        <p>After</p>
        <a href="book.php"><button class="book-btn">Book Appointment</button></a>
      </div>
    </div>
  </div>

  <h2>What Our Clients Say</h2>
  <div class="testimonial">"I couldn't believe the transformation! The staff is amazing and my smile has never looked better." - Sarah</div>
  <div class="testimonial">"Professional and friendly, I recommend them to anyone looking for real results." - Omar</div>

  <div class="video-section">
    <h2>Meet Our Team & Clinic</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/UvP8Lf1NRWs?si=P33mQmogmJ-71HXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>

<script>
    const cases = document.querySelectorAll('.case');
    window.addEventListener('scroll', () => {
      cases.forEach((el) => {
        const top = el.getBoundingClientRect().top;
        if (top < window.innerHeight - 100) {
          el.classList.add('show');
        }
      });
    });

    let counter = 0;
    const counterElement = document.getElementById('counter');
    const interval = setInterval(() => {
      if (counter < 500) {
        counter++;
        counterElement.textContent = counter;
      } else {
        clearInterval(interval);
      }
    }, 10);
  </script>
</body>
</html>