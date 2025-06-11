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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        header {
            background-color: #17a2b8;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }

        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .nav-link {
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #17a2b8 !important;
            text-decoration: underline;
        }

        .container {
            padding-top: 2rem;
        }
    </style>
</head>

<body>

    <header>
        <h1 class="h3 mb-0">5026231069</h1>
        <p class="mb-0">Muhammad Zaky Al Khair</p>
    </header>

    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/plastik">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materi4">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materi5">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="uts">UTS</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
