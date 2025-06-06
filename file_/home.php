<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mahasiswa Politeknik Negeri Medan - Pancasila</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: url('images/B.png') no-repeat center top;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: center;
    }

    .navbar-bendera {
      position: relative;
      height: 100px;
      background: linear-gradient(to bottom,
  #d50000 0%,
  #e53935 45%,
  #f44336 50%,
  #ffcdd2 60%,
  #ffffff 100%);
      z-index: 0;
    }

    .navbar-bendera .container {
      z-index: 2;
      position: relative;
    }

    .navbar-bendera .navbar-brand,
.navbar-bendera .nav-link {
  background: linear-gradient(to bottom,
    #d50000 0%,
    #e53935 45%,
    #f44336 50%,
    #ffcdd2 60%,
    #ffffff 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-weight: bold;

  text-shadow:
    1px 1px 2px rgba(0,0,0,0.4),
    0 0 5px rgba(255,255,255,0.3);
}

    .wave {
      position: absolute;
      bottom: -1px;
      left: 0;
      width: 100%;
      height: 40px;
      z-index: 1;
    }

    .hero {
      background: url('https://upload.wikimedia.org/wikipedia/commons/7/79/Indonesian_National_Emblem_Garuda_Pancasila.svg') no-repeat center center;
      background-size: 300px 300px;
      position: relative;
      color: #8b0000;
      padding: 100px 20px;
      text-align: center;
    }
    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(255, 255, 255, 0.85);
      z-index: 0;
    }
    .hero > * {
      position: relative;
      z-index: 1;
    }
    .container-scroll {
      max-width: 1000px;
      margin: auto;
      padding: 0px 0px;
      background: #fff;
      position: relative;
      z-index: 1;
    }
    .section {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 60px;
      opacity: 0;
      transform: translateY(50px);
      transition: all 1s ease;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      border-radius: 12px;
      background: #fafafa;
      padding: 20px;
    }
    .section.show {
      opacity: 1;
      transform: translateY(0);
    }
    .image {
      flex: 1;
      padding: 10px;
    }
    .image img {
      width: 100%;
      max-width: 200px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .text {
      flex: 2;
      padding: 20px;
    }
    .text h2 {
      font-size: 28px;
      margin-bottom: 15px;
      border-bottom: 3px solid #8b0000;
      display: inline-block;
      color: #8b0000;
    }
    .section:nth-child(even) {
      flex-direction: row-reverse;
    }
    .footer {
      background-color: #8b0000;
      color: white;
      padding: 30px 10px;
      text-align: center;
    }
    @media (max-width: 768px) {
      .section {
        flex-direction: column !important;
      }
      .image img {
        max-width: 100%;
      }
    }

    html {
      scroll-behavior: smooth;
    }
  </style>

  <style>
    .hero-img {
      height: 70vh;
    }

    .bg-img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.6;
      z-index: 0;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.4);
      z-index: 0;
    }

    .z-1 {
      z-index: 1;
    }

    @media (max-width: 768px) {
      .hero-img {
        height: 50vh;
      }
      .display-4 {
        font-size: 2rem;
      }
      .lead {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>



  <nav class="navbar navbar-expand-lg navbar-bendera" >
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#" style="height: 100%;">
      <img src="images/muu.png" alt="Logo Pancasila" 
           style="max-height: 125px; width: auto; margin-right: 12px;">
      PANCASILA
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="?page=b">Rumah</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>


  <!-- SVG Gelombang -->
  <svg class="wave" viewBox="0 0 1440 150" preserveAspectRatio="none">
    <path d="M0,30 C180,80 360,0 540,40 C720,80 900,0 1080,40 C1260,80 1440,10 1440,10 L1440,150 L0,150 Z" fill="#ffffff"></path>
  </svg>
</nav>
<!-- HERO SECTION-->
 
<section class="hero d-flex align-items-center justify-content-center text-center text-white position-relative">
  <img src="images/B.png" alt="Garuda Background" class="bg-img">
  
  <div class="container position-relative z-1">
    <h1 class="display-4 fw-bold">Mahasiswa Politeknik Negeri Medan</h1>
    <p class="lead">Nilai-nilai dasar negara Indonesia - Pancasila</p>
  </div>

  <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
</section>



<!-- Scrollable Animated Sections -->
<section class="content">
<div class="overlay-light">
<div class="container-scroll">

  <div class="section">
    <div class="image">
    <img src="images/a.png">    </div>
    <div class="text">
      <h2>Ketuhanan Yang Maha Esa</h2>
      <p>
        Sila pertama mengajarkan bahwa setiap warga negara harus menghormati kebebasan beragama dan menjalankan ibadah sesuai kepercayaannya.
      </p>
    </div>
  </div>

  <div class="section">
    <div class="image">
    <img src="images/c.png">    </div>
    <div class="text">
      <h2>Kemanusiaan Yang Adil dan Beradab</h2>
      <p>
        Mengajarkan penghargaan terhadap martabat manusia, keadilan sosial, dan perlakuan yang adil kepada sesama.
      </p>
    </div>
  </div>

  <div class="section">
    <div class="image">
    <img src="images/d.png">    </div>
    <div class="text">
      <h2>Persatuan Indonesia</h2>
      <p>
        Menekankan pentingnya persatuan dalam keberagaman, menjaga keutuhan dan kesatuan bangsa Indonesia.
      </p>
    </div>
  </div>

  <div class="section">
    <div class="image">
    <img src="images/e.png">    </div>
    <div class="text">
      <h2>Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan</h2>
      <p>
        Demokrasi yang berpijak pada musyawarah mufakat dan partisipasi rakyat dalam pemerintahan.
      </p>
    </div>
  </div>

  <div class="section">
    <div class="image">
    <img src="images/f.png">    </div>
    <div class="text">
      <h2>Keadilan Sosial bagi Seluruh Rakyat Indonesia</h2>
      <p>
        Setiap warga negara berhak mendapatkan keadilan sosial, pemerataan kesejahteraan, dan kehidupan yang layak.
      </p>
    </div>
  </div>

</div>




<!-- Section Testimoni dengan Accordion dan Card Bootstrap -->
<section class="container-scroll my-5">
  <h2 class="text-center mb-4" style="border-bottom: 3px solid #ff0000; display: inline-block; font-weight: 700;">
    Pancasila Menurut Mahasiswa
  </h2>

  <div class="accordion" id="testimoniAccordion">

    <!-- Part 1: Teknologi -->
    <div class="accordion-item shadow-sm mb-3">
      <h2 class="accordion-header" id="headingTech">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTech" aria-expanded="false" aria-controls="collapseTech">
          Teknologi dan Pancasila
        </button>
      </h2>
      <div id="collapseTech" class="accordion-collapse collapse" aria-labelledby="headingTech" data-bs-parent="#testimoniAccordion">
        <div class="accordion-body">
          <p>
            Mahasiswa Politeknik Negeri Medan menekankan bahwa kemajuan teknologi harus berlandaskan nilai-nilai Pancasila agar tidak hanya berorientasi pada kemajuan semata, tapi juga membawa manfaat bagi kesejahteraan rakyat.  
            Teknologi harus mendukung keadilan sosial, memperkuat persatuan bangsa, dan menghormati keberagaman yang ada di Indonesia.  
            Dengan begitu, inovasi teknologi bisa menjadi sarana membangun bangsa yang lebih adil dan maju.
          </p>
          <p class="text-muted fst-italic">"Teknologi tanpa nilai Pancasila hanyalah kemajuan tanpa arah."</p>
        </div>
      </div>
    </div>

    <!-- Part 2: Budaya Lokal -->
    <div class="accordion-item shadow-sm mb-3">
      <h2 class="accordion-header" id="headingBudaya">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBudaya" aria-expanded="false" aria-controls="collapseBudaya">
          Budaya Lokal dan Pancasila
        </button>
      </h2>
      <div id="collapseBudaya" class="accordion-collapse collapse" aria-labelledby="headingBudaya" data-bs-parent="#testimoniAccordion">
        <div class="accordion-body">
          <p>
            Meskipun Indonesia adalah negara kesatuan, keberagaman budaya lokal dari berbagai daerah menjadi kekayaan yang luar biasa.  
            Mahasiswa memahami bahwa nilai-nilai Pancasila yang menekankan persatuan dan kemanusiaan harus menghormati dan melestarikan kearifan lokal tersebut.  
            Budaya lokal merupakan identitas yang memperkuat persatuan bangsa sekaligus memperkaya makna Pancasila dalam kehidupan sehari-hari.
          </p>
          <p class="text-muted fst-italic">"Melestarikan budaya lokal adalah cara menjaga nilai Pancasila tetap hidup."</p>
        </div>
      </div>
    </div>

    <!-- Part 3: Pancasila Sebagai Landasan -->
    <div class="accordion-item shadow-sm mb-3">
      <h2 class="accordion-header" id="headingPancasila">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePancasila" aria-expanded="false" aria-controls="collapsePancasila">
          Pancasila sebagai Dasar Negara
        </button>
      </h2>
      <div id="collapsePancasila" class="accordion-collapse collapse" aria-labelledby="headingPancasila" data-bs-parent="#testimoniAccordion">
        <div class="accordion-body">
          <p>
            Pancasila merupakan dasar dan ideologi negara yang menjadi pegangan dalam setiap aspek kehidupan bermasyarakat dan bernegara.  
            Para mahasiswa menegaskan bahwa pemahaman dan pengamalan nilai-nilai Pancasila sangat penting untuk menjaga keutuhan dan stabilitas bangsa.  
            Dengan menjadikan Pancasila sebagai panduan, Indonesia dapat menghadapi berbagai tantangan dengan tetap menjaga persatuan, keadilan, dan kesejahteraan sosial.
          </p>
          <p class="text-muted fst-italic">"Pancasila adalah jiwa bangsa yang harus terus dijaga dan diamalkan."</p>
        </div>
      </div>
    </div>

    <!-- Part 4: Demokrasi Pancasila -->
    <div class="accordion-item shadow-sm mb-3">
      <h2 class="accordion-header" id="headingDemokrasi">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDemokrasi" aria-expanded="false" aria-controls="collapseDemokrasi">
          Demokrasi dan Musyawarah
        </button>
      </h2>
      <div id="collapseDemokrasi" class="accordion-collapse collapse" aria-labelledby="headingDemokrasi" data-bs-parent="#testimoniAccordion">
        <div class="accordion-body">
          <p>
            Mahasiswa menganggap demokrasi yang diterapkan di Indonesia harus mencerminkan nilai musyawarah untuk mufakat, yang menjadi ciri khas demokrasi Pancasila.  
            Partisipasi aktif rakyat dalam pemerintahan harus diimbangi dengan sikap saling menghormati dan menjaga keadilan sosial.  
            Demokrasi Pancasila menjunjung tinggi kebijaksanaan dan kekompakan untuk mencapai keputusan terbaik bagi seluruh rakyat.
          </p>
          <p class="text-muted fst-italic">"Musyawarah dan mufakat adalah kunci demokrasi yang berkeadilan."</p>
        </div>
      </div>
    </div>

    <!-- Part 5: Persatuan dan Kesatuan -->
    <div class="accordion-item shadow-sm mb-3">
      <h2 class="accordion-header" id="headingPersatuan">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePersatuan" aria-expanded="false" aria-controls="collapsePersatuan">
          Persatuan dalam Keberagaman
        </button>
      </h2>
      <div id="collapsePersatuan" class="accordion-collapse collapse" aria-labelledby="headingPersatuan" data-bs-parent="#testimoniAccordion">
        <div class="accordion-body">
          <p>
            Indonesia yang kaya akan keberagaman suku, agama, dan budaya harus terus dijaga persatuannya.  
            Mahasiswa menilai Pancasila sebagai perekat bangsa yang mampu mengatasi perbedaan dan mendorong rasa saling menghormati.  
            Persatuan bukan berarti menghilangkan perbedaan, tapi memeliharanya dalam bingkai kesatuan yang kokoh.
          </p>
          <p class="text-muted fst-italic">"Keberagaman adalah kekuatan, persatuan adalah jalan."</p>
        </div>
      </div>
    </div>

    <!-- Part 6: Keadilan Sosial -->
    <div class="accordion-item shadow-sm mb-3">
      <h2 class="accordion-header" id="headingKeadilan">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKeadilan" aria-expanded="false" aria-controls="collapseKeadilan">
          Keadilan Sosial untuk Semua
        </button>
      </h2>
      <div id="collapseKeadilan" class="accordion-collapse collapse" aria-labelledby="headingKeadilan" data-bs-parent="#testimoniAccordion">
        <div class="accordion-body">
          <p>
            Keadilan sosial merupakan cita-cita utama yang harus diwujudkan di Indonesia.  
            Mahasiswa percaya bahwa Pancasila mengajarkan agar setiap warga negara mendapatkan perlakuan yang adil dan merata dalam berbagai aspek kehidupan.  
            Upaya mewujudkan keadilan sosial harus menjadi prioritas bersama agar kesejahteraan dapat dinikmati oleh seluruh rakyat tanpa terkecuali.
          </p>
          <p class="text-muted fst-italic">"Keadilan sosial adalah fondasi kemajuan bangsa."</p>
        </div>
      </div>
    </div>

    <!-- Part 7: Pancasila dalam Kehidupan Sehari-hari -->
    <div class="accordion-item shadow-sm mb-3">
      <h2 class="accordion-header" id="headingKehidupan">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseKehidupan" aria-expanded="false" aria-controls="collapseKehidupan">
          Mengamalkan Pancasila Setiap Hari
        </button>
      </h2>
      <div id="collapseKehidupan" class="accordion-collapse collapse" aria-labelledby="headingKehidupan" data-bs-parent="#testimoniAccordion">
        <div class="accordion-body">
          <p>
            Mahasiswa menyadari pentingnya menerapkan nilai-nilai Pancasila dalam kehidupan sehari-hari, baik di lingkungan kampus, keluarga, maupun masyarakat.  
            Melalui sikap toleransi, gotong-royong, dan menghargai perbedaan, Pancasila bukan hanya menjadi teori, tapi menjadi praktik nyata yang membentuk karakter bangsa.  
            Pengamalan ini penting agar nilai luhur Pancasila terus hidup dan berkembang di generasi mendatang.
          </p>
          <p class="text-muted fst-italic">"Pancasila hidup dalam tindakan, bukan sekadar kata."</p>
        </div>
      </div>
    </div>

  </div>
</section>



<!-- Testimoni Mahasiswa -->
<section id="testimoni" class="mb-5 pb-5">
  <div class="container mt-5">
    <h2 class="mb-4 fw-bolder text-center">Apa Kata Mahasiswa tentang Web Pancasila?</h2>
    <div class="row g-4">

      <!-- Testimoni 1 -->
      <div class="col-md-4">
        <div class="card p-4 text-dark shadow-sm h-100 text-center">
          <h5 class="fw-bold mb-1">Rizky Maulana</h5>
          <small class="text-muted mb-2 d-block">Mahasiswa Hukum, UI</small>
          <div class="mb-2 text-warning">★★★★★</div>
          <p class="fst-italic">
            "Web ini keren! Saya jadi lebih paham makna Pancasila dalam kehidupan sehari-hari.  
            Kuis yang disediakan juga sangat bagus dan membantu mengasah pemahaman saya."
          </p>
        </div>
      </div>

      <!-- Testimoni 2 -->
      <div class="col-md-4">
        <div class="card p-4 text-dark shadow-sm h-100 text-center">
          <h5 class="fw-bold mb-1">Indah Permatasari</h5>
          <small class="text-muted mb-2 d-block">Mahasiswi Psikologi, UGM</small>
          <div class="mb-2 text-warning">★★★★☆</div>
          <p class="fst-italic">
            "Tampilannya menarik dan kuisnya bikin belajar jadi fun banget!  
            Materinya mudah dipahami dan cocok untuk kami mahasiswa yang ingin mendalami nilai-nilai Pancasila."
          </p>
        </div>
      </div>

      <!-- Testimoni 3 -->
      <div class="col-md-4">
        <div class="card p-4 text-dark shadow-sm h-100 text-center">
          <h5 class="fw-bold mb-1">Dimas Arya</h5>
          <small class="text-muted mb-2 d-block">Mahasiswa Teknik, ITS</small>
          <div class="mb-2 text-warning">★★★★★</div>
          <p class="fst-italic">
            "Sangat membantu untuk memahami nilai-nilai Pancasila secara kontekstual."
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="card text-center p-4 shadow mx-auto" style="max-width: 550px; background: linear-gradient(to bottom, #d50000 0%, #e53935 45%, #f44336 50%, #ffcdd2 60%, #ffffff 100%); border-radius: 20px; color: #212529;">
  <h3 class="card-title mb-3 fw-bold">
    Belajar Pancasila dari SD sampai Jadi Mahasiswa
  </h3>
  <p class="card-text" style="font-size: 1.1rem; line-height: 1.6;">
    Perjalanan memahami Pancasila dimulai sejak sekolah dasar hingga kini sebagai mahasiswa.<br>
    Yuk, terus tingkatkan pengetahuan dan sikap Pancasila dalam kehidupan sehari-hari lewat simulasi kuis ini!
  </p>
</div>
  
<div class="container my-4 text-center">
  <a href="?page=simulation" class="btn btn-lg text-white" style="
    background: linear-gradient(to bottom,
      #d50000 0%,
      #e53935 45%,
      #f44336 50%,
      #ffcdd2 60%,
      #ffffff 100%);
    border: none;
    font-weight: bold;
    padding: 12px 30px;
    border-radius: 100px;
    box-shadow: 0 4px 8px rgba(213, 0, 0, 0.4);
    transition: box-shadow 0.3s ease;
  "
  onmouseover="this.style.boxShadow='0 6px 12px rgba(213,0,0,0.7)'"
  onmouseout="this.style.boxShadow='0 4px 8px rgba(213,0,0,0.4)'"
  >
    Simulasi Quiz
  </a>
</div>

<?php include '_partials/_template/footer.php';?>


<script>
  const sections = document.querySelectorAll('.section');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, {
    threshold: 0.2
  });

  sections.forEach(section => {
    observer.observe(section);
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
