<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact | Chandigarh University Portal</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://www.cuchd.in/assets/site/images/infra-campus.webp') no-repeat center center/cover;
      color: #fff;
      min-height: 100vh;
      position: relative;
    }

    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.65);
      backdrop-filter: blur(4px);
      z-index: 0;
    }

    .container {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 80px 20px;
    }

    h1 {
      font-family: 'Montserrat', sans-serif;
      font-size: 2.6rem;
      color: #ff4444;
      margin-bottom: 25px;
    }

    .card {
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(12px);
      border-radius: 18px;
      padding: 40px;
      width: 90%;
      max-width: 600px;
      margin: 0 auto;
      box-shadow: 0 10px 40px rgba(0,0,0,0.3);
    }

    input, textarea {
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      outline: none;
    }

    button {
      background: linear-gradient(135deg,#ff4444,#ff2222);
      color: #fff;
      border: none;
      padding: 12px 26px;
      border-radius: 30px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover { transform: scale(1.05); }

    .info {
      margin-top: 25px;
      font-size: 1rem;
      line-height: 1.6;
    }

    a {
      display: inline-block;
      margin-top: 25px;
      color: white;
      text-decoration: none;
      background: rgba(255,255,255,0.15);
      padding: 10px 22px;
      border-radius: 25px;
      transition: 0.3s;
    }

    a:hover {
      background: rgba(255,255,255,0.3);
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contact Us</h1>
    <div class="card">
      <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
      <div class="info">
        <p><strong>Chandigarh University</strong><br>
        Gharuan, Mohali, Punjab - 140413<br>
        📞 +91 160 3051003 | ✉️ info@cuchd.in</p>
      </div>
      <a href="<?php echo e(route('homepage')); ?>">🏠 Back to Home</a>
    </div>
  </div>
</body>
</html>
<?php /**PATH C:\Laravel\experiment_2\resources\views/contact.blade.php ENDPATH**/ ?>