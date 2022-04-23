<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ============= META ============ -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ============ TITLE ============ -->
    <title>Sistem Surat Rujukan Online</title>

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
                <a class="nav-link" aria-current="page" href="daftar">Daftar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login">Log In</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- ============ MAIN ============ -->
    <main class="home d-flex">
      <div class="content">
        <h1 class="home-title">Hai, Selamat Datang Di SSR</h1>
        <h5 class="home-subtitle">
          Mengurus surat rujukan dengan lebih cepat dan mudah
        </h5>
        <p class="home-desc">
          SSR membantumu melengkapi syarat syarat dalam <br />
          pengajuan surat rujukan secara online.
        </p>
        <a href="login" class="btn btn-md align-self-center mt-3">Mulai</a>
      </div>

      <!-- <div class="img"> -->
      <img class="home-img-doctor" src="img/doctor.png" />
      <!-- </div> -->
    </main>

    <img
        class="home-img-decor col-md-3"
        src="img/elipse-decoration.png"
        alt=""
      />

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
