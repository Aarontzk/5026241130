<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Azka Bilfaqih</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <style>
        /*  */
        body {
            font-family: "Inter", sans-serif;
        }

        /* ukr hero section */
        .hero {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
        }

        /* ukr navbar */
        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 10;
            background-color: transparent !important;
        }

        /* ukr hero image */
        .hero-img {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 45%;
        }

        /* ukr navbar-nav */
        .navbar .navbar-nav {
            gap: 1.3rem;
        }

        /* ukr nav link */
        .navbar .nav-link {
            font-size: 0.8rem;
            color: #4d60a1;
            padding-left: 1rem;
            padding-right: 2.5rem;
        }

        /* ukr hero image */
        .hero-img img {
            width: 100%;
            display: block;
        }

        /* ukr heading */
        .hero h1 {
            font-size: 3.0rem;
        }

        /* ukr buy now */
        .navbar .btn {
            padding: 8px 50px;
            font-size: 0.7rem;
        }

        /* ukr hero buttons */
        .hero .btn {
            padding: 6px 30px;
            border: 3px solid #000;
            font-size: 0.7rem;
        }

        /* ukr paragraf */
        .hero p {
            font-size: 1.0rem;
            color: #4f5e96;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand">
        <div class="container">

            <!-- Kiri -->
            <div class="d-flex flex-grow-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>

            <!-- Tengah -->
            <a class="navbar-brand fw-bold" href="#">Landing</a>

            <!-- Kanan-->
            <div class="d-flex flex-grow-1 justify-content-end">
                <a href="#" class="btn btn-dark rounded-0">Buy Now</a>
            </div>

        </div>
    </nav>
    <section class="hero py-3">
        <div class="container">
            <div class="row g-0 align-items-center" style="min-height: 75vh;">

                <!-- Kolom Kiri(Teks, tombol 2) -->
                <div class="col-5">
                    <h1 class="fw-bold">Introduce Your Product Quickly & Effectively</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                    </p>
                    <p>mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat
                        massa quis
                        enim.</p>
                    <a href="#" class="btn btn-dark rounded-0 me-4">Purchase UI Kit</a>
                    <a href="#" class="btn btn-outline-dark rounded-0">Learn More</a>
                </div>
            </div>
        </div>
        <!-- Kolom Kanan(Gambar) -->
        <div class="hero-img">
            <img src="designer_1.png" alt="ilustrasi">
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>