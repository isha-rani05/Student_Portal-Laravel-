<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Help | Chandigarh University Portal</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://www.cuchd.in/assets/site/images/cu-campus-life.webp') no-repeat center center/cover;
      color: #fff;
      min-height: 100vh;
      position: relative;
    }

    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.7);
      z-index: 0;
    }

    .container {
      position: relative;
      z-index: 1;
      text-align: center;
      padding: 90px 20px;
    }

    h1 {
      font-family: 'Montserrat', sans-serif;
      font-size: 2.6rem;
      color: #ff4444;
      margin-bottom: 20px;
    }

    .card {
      background: rgba(255,255,255,0.15);
      backdrop-filter: blur(12px);
      border-radius: 18px;
      padding: 40px;
      width: 90%;
      max-width: 800px;
      margin: 0 auto;
      box-shadow: 0 10px 40px rgba(0,0,0,0.3);
      line-height: 1.8;
      text-align: left;
    }

    ul {
      font-size: 1.05rem;
      list-style: none;
      padding: 0;
    }

    li {
      margin-bottom: 14px;
      padding-left: 20px;
      position: relative;
    }

    li::before {
      content: "➤";
      position: absolute;
      left: 0;
      color: #ff5555;
    }

    a {
      display: inline-block;
      margin-top: 25px;
      background: linear-gradient(135deg, #ff4444, #ff2222);
      color: #fff;
      text-decoration: none;
      padding: 12px 26px;
      border-radius: 30px;
      font-weight: 600;
      transition: 0.3s;
    }

    a:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #ff2222, #ff4444);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Help & Support</h1>
    <div class="card">
      <ul>
        <li>Login to access all student data and dashboard features.</li>
        <li>Use the navigation bar to view, add, or update student information.</li>
        <li>To reset passwords or retrieve access, contact the admin office.</li>
        <li>Need academic or portal help? Email <strong>support@cuchd.in</strong>.</li>
      </ul>
      <center><a href="<?php echo e(route('homepage')); ?>">🏠 Back to Home</a></center>
    </div>
  </div>
</body>
</html>
<?php /**PATH C:\Laravel\experiment_2\resources\views/help.blade.php ENDPATH**/ ?>