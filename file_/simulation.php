<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

// If user submits quiz answers
if (isset($_POST['submit_quiz'])) {
    $answers = [
        'q1' => 'A',
        'q2' => 'B',
        'q3' => 'C',
        'q4' => 'D',
        'q5' => 'A'
    ];

    $explanations = [
        'q1' => [
            'tema' => 'Nilai Ketuhanan',
            'explanation' => 'Pancasila sebagai dasar negara memiliki nilai Ketuhanan yang mencerminkan pentingnya keimanan dan toleransi antar umat beragama. Mahasiswa sebagai agen perubahan harus menanamkan nilai ini dalam kehidupan kampus untuk menciptakan harmoni antar sesama.'
        ],
        'q2' => [
            'tema' => 'Nilai Kemanusiaan',
            'explanation' => 'Nilai kemanusiaan dalam Pancasila mengajarkan bahwa mahasiswa harus menjunjung tinggi hak asasi manusia, kesetaraan, dan keadilan sosial, baik dalam pergaulan kampus maupun kehidupan bermasyarakat.'
        ],
        'q3' => [
            'tema' => 'Persatuan Indonesia',
            'explanation' => 'Persatuan merupakan fondasi penting yang harus dijaga oleh mahasiswa. Dalam aktivitas organisasi dan akademik, mahasiswa perlu mengedepankan rasa cinta tanah air dan menghindari konflik antar kelompok.'
        ],
        'q4' => [
            'tema' => 'Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan',
            'explanation' => 'Mahasiswa sebagai calon pemimpin bangsa perlu membiasakan diri untuk bersikap demokratis dan bijaksana dalam mengambil keputusan, sebagaimana nilai keempat Pancasila.'
        ],
        'q5' => [
            'tema' => 'Keadilan Sosial',
            'explanation' => 'Penerapan keadilan sosial oleh mahasiswa terlihat dalam kepedulian terhadap isu-isu sosial dan keberpihakan terhadap kelompok rentan serta memperjuangkan akses pendidikan yang merata.'
        ]
    ];

    $score = 0;
    echo "<html><head><title>Hasil Quiz Pancasila</title><style>
        body { font-family: Arial; background: url('images/B.png') no-repeat center top;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: center; padding: 20px; max-width: 800px; margin: auto; }
        .card { background: white; padding: 15px; border-radius: 12px; margin-bottom: 20px; box-shadow: 0 2px 6px rgba(0,0,0,0.1); }
        .correct { color: green; font-weight: bold; }
        .incorrect { color: red; font-weight: bold; }
        .explanation { font-style: italic; font-size: 0.95em; margin-top: 5px; }
        .badge { font-size: 1.5em; }
        a { text-decoration:none; color:#007acc; font-weight:bold; }
        a:hover { text-decoration:underline; }
    </style></head><body>";
    echo "<h1>Hasil Quiz Pancasila</h1>";
    echo "<p>Halo, <strong>" . htmlspecialchars($_SESSION['name'] ?? 'Peserta') . "</strong></p>";

    for ($i = 1; $i <= 5; $i++) {
        $qid = 'q' . $i;
        $userAnswer = $_POST[$qid] ?? '-';
        $correct = $answers[$qid];
        $isCorrect = ($userAnswer === $correct);

        echo "<div class='card'>";
        echo "<p><strong>Pertanyaan $i:</strong> ";
        switch ($i) {
            case 1:
                echo "Apa makna nilai Ketuhanan dalam Pancasila bagi mahasiswa dalam kehidupan kampus sehari-hari?";
                break;
            case 2:
                echo "Bagaimana mahasiswa dapat mengimplementasikan nilai kemanusiaan sesuai sila kedua Pancasila?";
                break;
            case 3:
                echo "Mengapa penting bagi mahasiswa untuk menjaga persatuan Indonesia dalam konteks organisasi kampus?";
                break;
            case 4:
                echo "Apa contoh penerapan nilai demokrasi dalam kegiatan mahasiswa sesuai sila keempat Pancasila?";
                break;
            case 5:
                echo "Bagaimana mahasiswa menunjukkan sikap adil dalam kehidupan sosial kampus sesuai sila kelima?";
                break;
        }
        echo "</p>";

        $options = [
            1 => ['A' => 'Menjaga toleransi antar agama dan meningkatkan keimanan', 'B' => 'Menghindari diskusi tentang agama', 'C' => 'Mengikuti satu agama yang sama', 'D' => 'Mengabaikan nilai keagamaan', 'E' => 'Menolak keberagaman agama'],
            2 => ['A' => 'Mengutamakan kelompok sendiri', 'B' => 'Membantu sesama tanpa memandang latar belakang', 'C' => 'Bersaing secara ketat antar mahasiswa', 'D' => 'Menghindari komunikasi antar suku', 'E' => 'Mementingkan nilai akademik di atas segalanya'],
            3 => ['A' => 'Mengajak konflik ideologi', 'B' => 'Menolak budaya luar', 'C' => 'Mengutamakan kesatuan dan kolaborasi antar kelompok', 'D' => 'Membentuk kelompok eksklusif', 'E' => 'Bersikap netral tanpa partisipasi'],
            4 => ['A' => 'Memaksakan pendapat pribadi dalam rapat', 'B' => 'Mengabaikan suara minoritas', 'C' => 'Menghindari diskusi kelompok', 'D' => 'Mengambil keputusan bersama melalui musyawarah', 'E' => 'Menolak usulan yang berbeda pendapat'],
            5 => ['A' => 'Mendukung kegiatan sosial dan membantu teman yang membutuhkan', 'B' => 'Memilih hanya teman yang sependapat', 'C' => 'Menolak kegiatan sosial', 'D' => 'Mengabaikan masalah sosial di kampus', 'E' => 'Berfokus pada diri sendiri tanpa peduli sekitar']
        ];

        foreach ($options[$i] as $key => $text) {
            $marker = '';
            if ($userAnswer === $key && $key === $correct) {
                $marker = "<span class='badge'>✔️</span> <span class='correct'>(Benar)</span>";
                $score++;
            } elseif ($userAnswer === $key && $key !== $correct) {
                $marker = "<span class='badge'>❌</span> <span class='incorrect'>(Salah)</span>";
            } elseif ($key === $correct && $userAnswer !== $correct) {
                $marker = "<span class='badge'>✔️</span> <span class='correct'>(Jawaban Benar)</span>";
            }
            echo "<label>$key. $text $marker</label><br>";
        }

        echo "<div class='explanation'><strong>Penjelasan ({$explanations[$qid]['tema']}):</strong> {$explanations[$qid]['explanation']}</div>";
        echo "</div>";
    }

    echo "<div class='card'><h2>Nilai Akhir: $score / 5</h2></div>";
    echo "<a href='?'>🔁 Ulangi Quiz</a>";
    echo "</body></html>";
    exit;
}

// Nama
if (isset($_POST['submit_name'])) {
    $name = trim($_POST['name'] ?? '');
    if ($name === '') {
        $error = "Nama tidak boleh kosong.";
    } else {
        $_SESSION['name'] = $name;
        ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Quiz Pancasila</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('images/B.png') no-repeat center top;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: center;
      padding: 20px;
      max-width: 550px;
      margin: auto;
    }
    h1, h2 {
      text-align: center;
      color: #333;
    }
    form {
      margin-top: 20px;
    }
    .card {
      background: white;
      padding: 20px;
      margin-bottom: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.12);
      transition: box-shadow 0.3s ease;
    }
    .card:hover {
      box-shadow: 0 6px 14px rgba(0,0,0,0.18);
    }
    .card p {
      font-weight: bold;
      font-size: 1.1em;
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-top: 8px;
      cursor: pointer;
      font-weight: normal;
      font-size: 0.95em;
    }
    input[type="radio"] {
      margin-right: 8px;
      cursor: pointer;
    }
    button {
      display: block;
      margin: 30px auto 0;
      padding: 12px 30px;
      background-color: #000;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #222;
    }
  </style>
</head>
<body>
  <h1>Quiz Pancasila</h1>
  <p>Halo, <strong><?= htmlspecialchars($_SESSION['name']); ?></strong>. Silakan jawab pertanyaan berikut:</p>
  <form method="POST" action="">
    <?php 
      $questions = [
        1 => "Apa makna nilai Ketuhanan dalam Pancasila bagi mahasiswa dalam kehidupan kampus sehari-hari?",
        2 => "Bagaimana mahasiswa dapat mengimplementasikan nilai kemanusiaan sesuai sila kedua Pancasila?",
        3 => "Mengapa penting bagi mahasiswa untuk menjaga persatuan Indonesia dalam konteks organisasi kampus?",
        4 => "Apa contoh penerapan nilai demokrasi dalam kegiatan mahasiswa sesuai sila keempat Pancasila?",
        5 => "Bagaimana mahasiswa menunjukkan sikap adil dalam kehidupan sosial kampus sesuai sila kelima?"
      ];

      $opts = [
        1 => ['A' => 'Menjaga toleransi antar agama dan meningkatkan keimanan', 'B' => 'Menghindari diskusi tentang agama', 'C' => 'Mengikuti satu agama yang sama', 'D' => 'Mengabaikan nilai keagamaan', 'E' => 'Menolak keberagaman agama'],
        2 => ['A' => 'Mengutamakan kelompok sendiri', 'B' => 'Membantu sesama tanpa memandang latar belakang', 'C' => 'Bersaing secara ketat antar mahasiswa', 'D' => 'Menghindari komunikasi antar suku', 'E' => 'Mementingkan nilai akademik di atas segalanya'],
        3 => ['A' => 'Mengajak konflik ideologi', 'B' => 'Menolak budaya luar', 'C' => 'Mengutamakan kesatuan dan kolaborasi antar kelompok', 'D' => 'Membentuk kelompok eksklusif', 'E' => 'Bersikap netral tanpa partisipasi'],
        4 => ['A' => 'Memaksakan pendapat pribadi dalam rapat', 'B' => 'Mengabaikan suara minoritas', 'C' => 'Menghindari diskusi kelompok', 'D' => 'Mengambil keputusan bersama melalui musyawarah', 'E' => 'Menolak usulan yang berbeda pendapat'],
        5 => ['A' => 'Mendukung kegiatan sosial dan membantu teman yang membutuhkan', 'B' => 'Memilih hanya teman yang sependapat', 'C' => 'Menolak kegiatan sosial', 'D' => 'Mengabaikan masalah sosial di kampus', 'E' => 'Berfokus pada diri sendiri tanpa peduli sekitar']
      ];

      for ($i = 1; $i <= 5; $i++): ?>
      <div class="card">
        <p>Pertanyaan <?= $i ?>:</p>
        <p><?= $questions[$i]; ?></p>
        <?php foreach ($opts[$i] as $key => $text): ?>
          <label>
            <input type="radio" name="q<?= $i ?>" value="<?= $key ?>" required> <?= $key ?>. <?= $text ?>
          </label>
        <?php endforeach; ?>
      </div>
    <?php endfor; ?>
    <button type="submit" name="submit_quiz">Selesai</button>
  </form>
</body>
</html>
<?php
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Masukkan Nama</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('images/B.png') no-repeat center top;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: center;
      padding: 20px;
      max-width: 550PX;
      margin: auto;
    }
    form {
      padding: 20px;
      max-width: 400px;
      margin: auto;
      text-align: center;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    input[type=text] {
      width: 90%;
      padding: 10px;
      margin-top: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 1.1em;
    }
    button {
      margin-top: 15px;
      padding: 10px 25px;
      background-color:rgb(0, 0, 0);
      border: none;
      color: white;
      border-radius: 6px;
      font-size: 1em;
      cursor: pointer;
    }
    button:hover {
      background-color: #005fa3;
    }
    .error {
      color: red;
      margin-top: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>
<h1>Selamat Datang di Quiz Pancasila</h1>
<p>Masukkan nama kamu terlebih dahulu:</p>
<form method="POST" action="">
  <input type="text" name="name" placeholder="Nama lengkap" required />
  <br />
  <button type="submit" name="submit_name">Mulai Quiz</button>
</form>
<?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
</body>
</html>