<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <style>
        /* ---------- Global Styles ---------- */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        /* ---------- Container Card ---------- */
        .container {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 16px;
            padding: 40px;
            width: 90%;
            max-width: 450px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-4px);
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 25px;
            font-size: 1.8rem;
            letter-spacing: 0.5px;
        }

        label {
            display: block;
            font-weight: 500;
            color: #f3f3f3;
            margin-top: 15px;
            font-size: 0.95rem;
        }

        input {
            width: 100%;
            padding: 10px 12px;
            margin-top: 6px;
            border: none;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
            outline: none;
            transition: box-shadow 0.2s ease, background-color 0.2s ease;
        }

        input:focus {
            box-shadow: 0 0 0 3px rgba(37, 117, 252, 0.4);
            background-color: #fff;
        }

        button {
            width: 100%;
            background: linear-gradient(135deg, #007bff, #00d4ff);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 25px;
            transition: all 0.3s ease;
        }

        button:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #d1e9ff;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 500px) {
            .container {
                padding: 25px;
            }
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✨ Add New Student</h1>

        <form action="<?php echo e(route('students.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="name">Full Name</label>
            <input type="text" name="name" placeholder="Enter student name" required>

            <label for="email">Email Address</label>
            <input type="email" name="email" placeholder="Enter student email" required>

            <label for="phone">Phone Number</label>
            <input type="text" name="phone" placeholder="Enter student phone" required>

            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" required>

            <label for="color">Favorite Color</label>
            <input type="text" name="color" placeholder="e.g., Blue" required>

            <button type="submit">Save Student</button>
        </form>

        <a href="<?php echo e(route('students.record')); ?>">← Back to Student List</a>
    </div>
</body>
</html>
<?php /**PATH C:\Laravel\experiment_2\resources\views/students/create.blade.php ENDPATH**/ ?>