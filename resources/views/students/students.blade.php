<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <style>
        /* ---------- Base Styling ---------- */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);
            min-height: 100vh;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
            font-size: 2rem;
            letter-spacing: 0.5px;
        }

        /* ---------- Container Card ---------- */
        .container {
            width: 90%;
            max-width: 950px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-4px);
        }

        /* ---------- Success Message ---------- */
        .success-message {
            background-color: rgba(40, 167, 69, 0.15);
            color: #155724;
            border: 1px solid rgba(40, 167, 69, 0.3);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
        }

        /* ---------- Add New Button ---------- */
        .add-btn {
            display: inline-block;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-bottom: 18px;
        }

        .add-btn:hover {
            background: linear-gradient(135deg, #218838, #198754);
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(33, 136, 56, 0.3);
        }

        /* ---------- Table Styling ---------- */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            overflow: hidden;
            border-radius: 10px;
        }

        th, td {
            padding: 14px 12px;
            text-align: center;
            font-size: 0.95rem;
        }

        th {
            background: linear-gradient(135deg, #007bff, #00b4d8);
            color: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.7);
        }

        tr:nth-child(odd) {
            background-color: rgba(255, 255, 255, 0.9);
        }

        tr:hover {
            background-color: rgba(0, 123, 255, 0.15);
            transition: background-color 0.3s ease;
        }

        td {
            color: #333;
        }

        /* ---------- No Data Message ---------- */
        .no-data {
            text-align: center;
            color: #666;
            font-style: italic;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        /* ---------- Responsive ---------- */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            table {
                font-size: 0.85rem;
            }

            th, td {
                padding: 10px;
            }

            .add-btn {
                display: block;
                text-align: center;
                margin: 0 auto 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎓 Student Records</h1>

        {{-- ✅ Success Message --}}
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        {{-- ✅ Add New Button --}}
        <a href="{{ route('students.create') }}" class="add-btn">+ Add New Student</a>

        {{-- ✅ Students Table --}}
        @if($students->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date of Birth</th>
                        <th>Favorite Color</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->color }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="no-data">No student records found. Please add a new student.</p>
        @endif
    </div>
</body>
</html>
