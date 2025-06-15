<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Materi Landing Page</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #eef2f3, #fdfcfa);
            margin: 0;
            padding: 0;
        }

        header {
            background: linear-gradient(to right, #007bff, #6610f2);
            color: white;
            padding: 3rem 1rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-weight: 600;
            font-size: 2.5rem;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.85;
        }

        .main {
            padding: 3rem 0;
        }

        .service-item {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .service-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
        }

        .service-item .icon {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 1rem;
        }

        .service-item h3 {
            font-size: 1.25rem;
            color: #333;
            font-weight: 600;
        }

        footer {
            background-color: #212529;
            color: white;
            padding: 1rem 0;
            text-align: center;
            font-size: 0.9rem;
            margin-top: 3rem;
        }

        a.stretched-link {
            text-decoration: none;
            color: inherit;
        }

        a.stretched-link:hover h3 {
            color: #007bff;
        }
    </style>
</head>

<body class="index-page">

    <header>
        <div class="container">
            <h1>🌐 Pemrograman Web</h1>
            <p>Muhammad Zaky Al Khair | 5026231069</p>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-person-badge-fill"></i></div>
                        <a href="pegawai" class="stretched-link">
                            <h3>Pegawai</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-box-seam"></i></div>
                        <a href="plastik" class="stretched-link">
                            <h3>Plastik</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-123"></i></div>
                        <a href="pagecounter" class="stretched-link">
                            <h3>Latihan 1</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-pencil-square"></i></div>
                        <a href="karyawan" class="stretched-link">
                            <h3>Latihan 2</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-diagram-3-fill"></i></div>
                        <a href="karyawan2" class="stretched-link">
                            <h3>Latihan 3</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-activity"></i></div>
                        <a href="materi1" class="stretched-link">
                            <h3>Materi 1: HTML</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-broadcast"></i></div>
                        <a href="materi2link" class="stretched-link">
                            <h3>Materi 2: Link</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <a href="materi2button" class="stretched-link">
                            <h3>Materi 2: Button</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-bounding-box-circles"></i></div>
                        <a href="materi3" class="stretched-link">
                            <h3>Materi 3: Grid & Layout</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <a href="materi4" class="stretched-link">
                            <h3>Materi 4: Bootstrap</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-chat-square-text"></i></div>
                        <a href="materi5" class="stretched-link">
                            <h3>Materi 5: Linkree</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-broadcast"></i></div>
                        <a href="materi7validasi" class="stretched-link">
                            <h3>Materi 7: Form Validasi</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <a href="materi7kalkulator" class="stretched-link">
                            <h3>Materi 7: Kalkulator</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon"><i class="bi bi-bar-chart-steps"></i></div>
                        <a href="indexuts" class="stretched-link">
                            <h3>UTS</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Materi Pembelajaran. Dibuat dengan ❤️ oleh Muhammad Zaky Al Khair</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

</body>

</html>
