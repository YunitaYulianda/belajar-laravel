<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- ============= META ============ -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ============ TITLE ============ -->
    <title>Contact Person | Sistem Surat Rujukan Online</title>

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
  <body class="">
    <!-- ========== KETENTUAN ========== -->
    <section class="form-isi-data">
      <h1>FORM ISI DATA</h1>
      <h3>Data Pasien :</h3>
      <form action="" method="post">
        <div class="col-md-6">
          <div class="input-form">
            <label for="namaPasien" class="input-label">Nama Pasien </label>
            <input
              type="text"
              class="form-control"
              name="namaPasien"
              id="namaPasien"
            />
          </div>
          <div class="input-form">
            <label for="noBPJS" class="input-label">No Kartu BPJS </label>
            <input type="text" class="form-control" name="noBPJS" id="noBPJS" />
          </div>
          <div class="input-form jk">
            <label for="jk" class="input-label">Jenis Kelamin </label>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="Pria"
                id="flexCheckDefault"
              />
              <label class="form-check-label" for="flexCheckDefault">
                Pria
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value="Perempuan"
                id="flexCheckDefault"
              />
              <label class="form-check-label" for="flexCheckDefault">
                Perempuan
              </label>
            </div>
          </div>
          <div class="input-form">
            <label for="TTL" class="input-label">Tempat Tanggal Lahir</label>
            <input type="text" class="form-control" name="TTL" />
          </div>
          <div class="input-form">
            <label for="umur" class="input-label">Umur</label>
            <input type="number" class="form-control" name="umur" />
          </div>
          <br /><br />
          <div class="input-form">
            <label for="tanggalPembuatan" class="input-label"
              >Tanggal Pembuatan Surat</label
            >
            <input
              type="date"
              name="tanggalPembuatan"
              id="tanggalPembuatan"
              class="form-control"
            />
          </div>
        </div>

        <div class="col-md-6">
          <div class="input-form">
            <label for="ibu" class="input-label">Nama Ibu Kandung </label>
            <input type="text" class="form-control" name="ibu" id="ibu" />
          </div>
          <div class="input-form">
            <label for="ayah" class="input-label">Nama Ayah Kandung </label>
            <input type="text" class="form-control" name="ayah" id="ayah" />
          </div>
          <div class="input-form">
            <label for="goldar" class="input-label">Golongan Darah</label>
            <input type="text" class="form-control" name="goldar" id="goldar" />
          </div>
          <div class="input-form">
            <label for="pekerjaan" class="input-label">Pekerjaan</label>
            <input
              type="text"
              class="form-control"
              name="pekerjaan"
              id="alamat"
            />
          </div>
          <div class="input-form">
            <label for="alamat" class="input-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" />
          </div>
          <br /><br /><br />
          <div class="input-form">
            <button class="btn btn-isi-data" type="submit">Konfirmasi</button>
          </div>
        </div>
      </form>
    </section>

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
