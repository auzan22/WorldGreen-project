<style>
    body {
        background: linear-gradient(to right, #4CAF50, #2E7D32);
        color: white;
    }
</style>

<div class="container-fluid vh-90 d-flex align-items-center justify-content-center" style="margin-top: 5rem;">
        <div class="row w-100 h-100">
            
      <!-- Kolom Kiri: Logo -->
        <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center bg-transparent">
            <img src="./images/eco green.png" alt="Logo" class="img-fluid" style="max-width: 60%; margin-bottom: 65px;">
            <h1 class="text-center"> </h1>
        </div>

            <!-- Kolom Kanan: Form Register -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <main class="form-signin w-75">
                    <form>
                        <h1 class="h3 mb-3 fw-bold text-center">Register</h1>

                        <label class="form-label">USERNAME</label>
                        <input type="text" class="form-control mb-2" placeholder="fullname">

                        <label class="form-label">EMAIL</label>
                        <input type="email" class="form-control mb-2" placeholder="email@example.com">

                        <label class="form-label">PASSWORD</label>
                        <input type="password" class="form-control mb-2" placeholder="******">

                        <label class="form-label">RECONFIRM PASSWORD</label>
                        <input type="password" class="form-control mb-2" placeholder="******">

                        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Register</button>

                        <div class="text-center mt-3">
                            Sudah Memiliki Akun? <a href="?page=login">Login</a>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>

<?php include '_partials/_template/footer.php';?>

