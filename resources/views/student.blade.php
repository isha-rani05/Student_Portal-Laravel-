<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Info</title>
    <style>
        /* --- Base --- */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* --- Card Container --- */
        .info-card {
            background: #ffffff;
            padding: 35px 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 420px;
            width: 90%;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-4px);
        }

        /* --- Heading --- */
        h2 {
            margin-bottom: 25px;
            color: #333;
            font-size: 26px;
            letter-spacing: 1px;
        }

        /* --- Student Details --- */
        p {
            font-size: 16px;
            color: #444;
            margin: 12px 0;
        }

        strong {
            color: #111;
        }

        /* --- Links --- */
        .btn {
            display: inline-block;
            margin: 12px 6px;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-back {
            background: #4facfe;
            color: white;
        }

        .btn-home {
            background: #43e97b;
            color: white;
        }

        .btn:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="info-card">
        <h2>🎓 Student Details</h2>

        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>

        <div>
            <a href="{{ route('students.record') }}" class="btn btn-back">← Back to All Students</a>
            <a href="{{ route('homepage') }}" class="btn btn-home">🏠 Back to Home</a>
        </div>
    </div>

</body>
</html>
