<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Portal | Home</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* ====== Base ====== */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: #fff;
            background: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=1920&q=80') no-repeat center center/cover;
            min-height: 100vh;
            overflow-x: hidden;
            backdrop-filter: blur(4px);
        }

        /* ====== Overlay (for readability) ====== */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.55);
            z-index: -1;
        }

        /* ====== Navbar ====== */
        nav.topbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 16px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
            z-index: 100;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #fff;
            letter-spacing: 1px;
            text-shadow: 0 3px 6px rgba(0,0,0,0.3);
        }

        .nav-links {
            display: flex;
            gap: 25px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #00c6ff;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0,114,255,0.25);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .nav-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0,114,255,0.35);
        }

        /* ====== Spacer ====== */
        .nav-spacer {
            height: 90px;
        }

        /* ====== Hero Section ====== */
        .home-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 90px);
            text-align: center;
            padding: 20px;
        }

        .home-container {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255,255,255,0.2);
            backdrop-filter: blur(12px);
            border-radius: 18px;
            padding: 60px 50px;
            max-width: 600px;
            animation: fadeIn 1s ease-in-out;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #00c6ff, #0072ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.15rem;
            color: #f0f0f0;
            margin-bottom: 30px;
        }

        a.btn-primary {
            display: inline-block;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            padding: 14px 34px;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            letter-spacing: 0.4px;
            box-shadow: 0 6px 16px rgba(0,114,255,0.3);
            transition: all 0.3s ease;
        }

        a.btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0,114,255,0.4);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ====== Responsive ====== */
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .brand { font-size: 1.2rem; }
            .home-container { padding: 40px 25px; }
            h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="topbar">
        <div class="brand">🎓 Student Portal</div>
        <div class="nav-links">
            <a href="{{ route('homepage') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('help') }}">Help</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('students.record') }}">Students</a>
            <a href="{{ route('students.create') }}" class="nav-cta">+ Add Student</a>
        </div>
    </nav>

    <div class="nav-spacer"></div>

    <!-- MAIN HERO -->
    <div class="home-wrapper">
        <div class="home-container">
            <h1>Welcome to the Student Portal</h1>
            <p>Track, manage, and organize student information efficiently — all in one beautiful interface.</p>
            <a href="{{ route('students.record') }}" class="btn-primary">View Student Records</a>
        </div>
    </div>
</body>
</html>
