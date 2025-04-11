<style>
    body {
        background: linear-gradient(to right, #4CAF50, #2E7D32);
        color: white;
    }
</style>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/eco green.png" alt="EcoGreen Logo" width="45" height="45" class="me-2">
                <b>EcoGreen</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#carousel">Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link" href="#data">Data</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Selamat Datang -->
    <div class="container mt-4">
        <div class="p-5 text-dark bg-light d-flex align-items-center position-relative eco-card">
            <div>
                <h1 style="font-size:60px;"><b>Selamat Datang di EcoGreen</b></h1>
                <p class="text-muted">Solusi ramah lingkungan untuk masa depan.</p>
            </div>
        </div>
    </div>

    <!-- Carousel & Keunggulan EcoGreen -->
    <section id="carousel-features">
        <div class="container mt-5">
            <h2 class="mb-3 fw-bolder text-center"> </h2>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <img src="images/aaa111.jpg" class="d-block mx-auto w-75" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/aaa222.jpg" class="d-block mx-auto w-77" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/aaa333.jpg" class="d-block mx-auto w-75" alt="Slide 3">
                    </div>
                    <div class="carousel-item">
                        <img src="images/aaa444.jpg" class="d-block mx-auto w-75" alt="Slide 4">
                    </div>
                    <div class="carousel-item">
                        <img src="images/aaa555.jpg" class="d-block mx-auto w-75" alt="Slide 5">
                    </div>
                    <div class="carousel-item">
                        <img src="images/aaa666.jpg" class="d-block mx-auto w-85" alt="Slide 6">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni  -->
    <section id="testimoni">
        <div class="container mt-5">
            <h2 class="mb-3 fw-bolder text-center">Testimoni Pelanggan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 text-dark">
                        <p> "EcoGreen membantu saya beralih ke gaya hidup lebih hijau!"</p>
                        <h5>- Andi Winata, Jakarta</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-dark">
                        <p> "Produk berkualitas dan ramah lingkungan!"</p>
                        <h5>- Siti Badriah, Bandung</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 text-dark">
                        <p> "Solusi inovatif untuk menjaga bumi kita YGY."</p>
                        <h5>- Budiono Siregar, Medan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Tentang Perusahaan -->
<section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center fw-bolder mb-4">Tentang Perusahaan</h2>
        <p class="lead text-center">EcoGreen adalah perusahaan inovatif yang berfokus pada solusi ramah lingkungan. Kami berkomitmen untuk menyediakan energi hijau, teknologi ramah lingkungan, dan program daur ulang guna menciptakan masa depan yang lebih berkelanjutan.</p>
    </div>
</section>


<?php include '_partials/_template/footer.php';?>
