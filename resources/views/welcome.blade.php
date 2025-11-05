<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Contact Form</title>
    <style>
        /* --- Base Styling --- */
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
        }

        /* --- Form Card --- */
        .form-container {
            background: #ffffff;
            padding: 40px 35px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        /* --- Heading --- */
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
            font-weight: 600;
            letter-spacing: 1px;
        }

        /* --- Labels & Inputs --- */
        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 6px;
            display: block;
        }

        input[type=text],
        input[type=email],
        textarea {
            width: 100%;
            padding: 12px 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #66a6ff;
            box-shadow: 0 0 5px rgba(102, 166, 255, 0.5);
        }

        textarea {
            resize: none;
            min-height: 90px;
        }

        /* --- Submit Button --- */
        input[type=submit] {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        input[type=submit]:hover {
            background: linear-gradient(135deg, #00f2fe, #4facfe);
            transform: scale(1.02);
        }

        /* --- Small Text --- */
        .footer-note {
            text-align: center;
            margin-top: 15px;
            color: #777;
            font-size: 13px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>📩 Contact Us</h2>
        <form action="/submit-form" method="POST">
            @csrf  {{-- Laravel CSRF protection --}}

            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Type your message..." required></textarea>

            <input type="submit" value="Send Message">
        </form>
        <div class="footer-note">We'll get back to you within 24 hours 💬</div>
    </div>

</body>
</html>
