<!DOCTYPE html>
<html lang="en">

<head>
    <title>Muhammad Zaky Al Khair : 5026231069</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background: linear-gradient(135deg, #FF5821, #fcb69e);
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .nav-link {
            font-weight: 500;
            color: #333 !important;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: #17a2b8 !important;
            text-decoration: none;
            transform: translateY(-2px);
        }

        .container {
            padding-top: 2rem;
        }

        footer {
            background-color: #f1f1f1;
            color: #666;
            padding: 1rem 0;
            text-align: center;
            margin-top: 3rem;
            border-top: 1px solid #ddd;
        }
    </style>
</head>

<body>

    <header>
        <h1 class="display-5">5026231069</h1>
        <p class="lead mb-0">Muhammad Zaky Al Khair</p>
    </header>

    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-2">
                    <a class="nav-link" href="/"><i class="fas fa-code"></i> All Front End</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i> Pegawai</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="/plastik"><i class="fas fa-box-open"></i> Tugas CRUD</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#"><i class="fas fa-laptop-code"></i> EAS</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#"><i class="fas fa-edit"></i> Latihan 1</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="/karyawan"><i class="fas fa-id-badge"></i> Latihan 2</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#"><i class="fas fa-file-alt"></i> Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <small>&copy; 2025 Muhammad Zaky Al Khair - All Rights Reserved.</small>
        </div>
    </footer>

</body>

</html>
