<style>
        .products {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            text-align: center;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            background-color: #f9f9f9;
        }
        .product-card img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
</style>
</head>
<body>
    <div class="container my-4 flex-grow-1"> 
        <div class="p-4 mb-4 welcome-section">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h2 class="fw-bold text-success"><i class="bi bi-flower1"></i> Selamat Datang</h2>
              <p class="lead mb-0">Mulai jelajahi produk ramah lingkungan kami untuk gaya hidup yang lebih berkelanjutan.</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
              <a href="#produk" class="btn btn-success btn-lg">
                <i class="bi bi-cart-plus"></i> Belanja Sekarang
              </a>
            </div>
          </div>
        </div>

        <div class="mb-5">
          <h3 class="mb-4 text-success fw-bold"><i class="bi bi-stars"></i> Produk Unggulan</h3>
          <div class="products">
              <div class="product-card">
                  <img src="images/ppp1111.jpg" alt="Botol Minum Stainless Steel">
                  <h2>Botol Minum Stainless Steel</h2>
                  <p class="description">Botol minum ramah lingkungan yang dapat digunakan kembali dan tahan lama.</p>
                  <span class="price">Rp 120.000</span>
                  <button class="buy-button">Beli</button>
              </div>
              <div class="product-card">
                  <img src="images/ppp222.jpg" alt="Tas Belanja Kain">
                  <h2>Tas Belanja Kain</h2>
                  <p class="description">Tas belanja dari bahan kain yang dapat digunakan berkali-kali dan mengurangi limbah plastik.</p>
                  <span class="price">Rp 75.000</span>
                  <button class="buy-button">Beli</button>
              </div>
              <div class="product-card">
                  <img src="images/ppp333.jpg" alt="Sikat Gigi Bambu">
                  <h2>Sikat Gigi Bambu</h2>
                  <p class="description">Sikat gigi berbahan bambu yang biodegradable dan bebas plastik.</p>
                  <span class="price">Rp 35.000</span>
                  <button class="buy-button">Beli</button>
              </div>
              <div class="product-card">
                  <img src="images/ppp444.jpg" alt="Sedotan Stainless Steel">
                  <h2>Sedotan Stainless Steel</h2>
                  <p class="description">Sedotan berbahan stainless steel yang bisa digunakan kembali dan mudah dibersihkan.</p>
                  <span class="price">Rp 25.000</span>
                  <button class="buy-button">Beli</button>
              </div>
              <div class="product-card">
                  <img src="images/ppp555.jpg" alt="Sabun Organik">
                  <h2>Sabun Organik</h2>
                  <p class="description">Sabun berbahan alami yang aman untuk kulit dan ramah lingkungan.</p>
                  <span class="price">Rp 50.000</span>
                  <button class="buy-button">Beli</button>
              </div>
              <div class="product-card">
                  <img src="images/ppp666.jpg" alt="Kotak Makan Ramah Lingkungan">
                  <h2>Kotak Makan Ramah Lingkungan</h2>
                  <p class="description">Kotak makan dari bahan ramah lingkungan yang bisa digunakan berulang kali.</p>
                  <span class="price">Rp 150.000</span>
                  <button class="buy-button">Beli</button>
              </div>
          </div>
        </div>
    </div>
</body>
</html>

<?php include '_partials/_template/footer.php'; ?>
