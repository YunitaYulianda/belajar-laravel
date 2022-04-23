<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ============= META ============ -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ============ TITLE ============ -->
    <title>Daftar | Sistem Surat Rujukan Online</title>

    <!-- ========== BOX ICONS ========== -->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- ========== BOOTSTRAP ========== -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- ============= CSS ============= -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- ============ HEADER =========== -->
    <header id="header">
      <!-- ============ NAV =========== -->
      <nav class="navbar navbar-expand-lg nav-box-shadow">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="SSR's Logo" width="100" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="login">Log In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- ============ MAIN ============ -->
    <main class="daftar">
        <div class="form-daftar">
            <h1 class="daftar-title">Buat Akun</h1>
            <form action="" method="post" autocomplete="off">
                <div class="row">
                    <div class="col-md-6">
                        <label for="namaDepan" class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" name="namaDepan" id="namaDepan">
                    </div>
                    <div class="col-md-6">
                        <label for="namaBelakang" class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" name="namaBelakang" id="namaBelakang">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="col-md-6">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="NIK" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="NIK" id="NIK">
                    </div>
                    <div class="col-md-6">
                        <label for="noHP" class="form-label">No Handphone</label>
                        <input type="text" class="form-control" name="noHP" id="noHP">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button class="btn" type="submit" name="daftar">Buat Akun</button>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </form>
        </div>
        <img class="home-img-doctor" src="img/doctor.png" />
    </main>

    <!-- ============= JS ============ -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
