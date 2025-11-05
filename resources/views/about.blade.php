<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About | Chandigarh University</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
<style>
body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background: url('https://www.cuchd.in/assets/site/images/new-campus-3.webp') no-repeat center center/cover;
  background-attachment: fixed;
  min-height: 100vh;
  color: #fff;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  position: relative;
}

body::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(2px);
  z-index: 0;
}

.container {
  z-index: 1;
  max-width: 900px;
  padding: 60px;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 18px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.4);
  animation: fadeIn 1.2s ease;
}

h1 {
  font-family: 'Playfair Display', serif;
  font-size: 2.8rem;
  color: #ff4444;
  margin-bottom: 15px;
  text-shadow: 0 2px 10px rgba(255,255,255,0.4);
}

p {
  font-size: 1.1rem;
  line-height: 1.8;
  margin-bottom: 20px;
}

.highlight {
  color: #ff9b9b;
  font-weight: 600;
}

a {
  display: inline-block;
  margin-top: 25px;
  background: linear-gradient(135deg, #ff4444, #ff2222);
  color: #fff;
  text-decoration: none;
  padding: 12px 30px;
  border-radius: 30px;
  font-weight: 600;
  transition: 0.3s;
}

a:hover {
  transform: scale(1.05);
  background: linear-gradient(135deg, #ff2222, #ff4444);
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>
  <div class="container">
    <h1>About Chandigarh University</h1>
    <p>
      <span class="highlight">Chandigarh University (CU)</span> is India’s leading private university located in Gharuan, Mohali. 
      CU is a <strong>NAAC A+ accredited institution</strong> known for its excellence in education, 
      innovation, and world-class infrastructure.
    </p>
    <p>
      CU nurtures future leaders by providing holistic education, cutting-edge labs, 
      modern classrooms, and an environment that fosters learning, creativity, and research.
    </p>
    <p>
      This Student Management System project draws inspiration from CU’s digital-first campus vision 
      — connecting students and administrators seamlessly with technology.
    </p>
    <a href="{{ route('homepage') }}">🏠 Back to Home</a>
  </div>
</body>
</html>
