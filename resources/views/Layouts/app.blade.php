<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal')</title>
    <style>
        :root {
            --maroon: #6b0f1a;
            --maroon-dark: #4a0a12;
            --white: #ffffff;
            --off-white: #f7f2f2;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--off-white);
            color: var(--maroon-dark);
        }

        header {
            background: var(--maroon);
            color: var(--white);
            padding: 1.25rem 2rem;
        }

        header h1 {
            margin: 0;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
        }

        main {
            max-width: 900px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }

        a {
            color: var(--maroon);
        }

        .students-table {
            width: 100%;
            border-collapse: collapse;
            background: var(--white);
            margin-bottom: 2rem;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
        }

        .students-table th,
        .students-table td {
            padding: 0.75rem 1rem;
            text-align: left;
            border-bottom: 1px solid #e6d6d8;
        }

        .students-table th {
            background: var(--maroon);
            color: var(--white);
            font-weight: 600;
        }

        .students-table tbody tr:hover {
            background: var(--off-white);
        }

        .student-form {
            background: var(--white);
            border: 1px solid #e6d6d8;
            border-radius: 6px;
            padding: 1.5rem;
            max-width: 420px;
        }

        .student-form h2 {
            margin-top: 0;
            color: var(--maroon);
        }

        .student-form label {
            display: block;
            margin-bottom: 0.9rem;
            font-size: 0.9rem;
        }

        .student-form input {
            width: 100%;
            margin-top: 0.3rem;
            padding: 0.5rem;
            border: 1px solid #cbb3b6;
            border-radius: 4px;
        }

        .student-form button {
            background: var(--maroon);
            color: var(--white);
            border: none;
            padding: 0.6rem 1.4rem;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.95rem;
        }

        .student-form button:hover {
            background: var(--maroon-dark);
        }

        .alert-success {
            background: var(--white);
            border-left: 4px solid var(--maroon);
            padding: 0.75rem 1rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Student Portal</h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>