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

        <!-- Kolom Kanan: Form Login -->
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <main class="form-signin w-75">
                <form method="POST" action="">
                    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

            <div class="form-floating">
                 <input type="email" class="form-control" id="floatingInput" name="email" required>
                  <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingPassword" name="password" required>
                <label for="floatingPassword">Password</label>
            </div>

                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
                    
                    <div class="text-center mt-3">
                        Belum memiliki akun? <a href="?page=register">Register</a>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>

<?php include '_partials/_template/footer.php'; ?>
