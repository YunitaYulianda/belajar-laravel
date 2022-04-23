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
      <h1 class="upload-berkas-title">FORM UPLOAD BERKAS</h1>
      <form action="" method="post" class="upload-berkas">
        <div class="row-isi-data">
          <div class="col-md-6">
            <div class="input-form">
              <label for="fotoKTP" class="input-label">Foto KTP </label>
              <input
                type="file"
                class="form-control"
                name="fotoKTP"
                id="fotoKTP"
              />
            </div>
            <div class="input-form">
              <label for="kartuKeluarga" class="input-label">Kartu Keluarga </label>
              <input
                type="file"
                class="form-control"
                name="kartuKeluarga"
                id="kartuKeluarga"
              />
            </div>
          </div>

          <div class="col-md-6">
            <div class="input-form">
              <label for="kartuBPJS" class="input-label">Kartu BPJS </label>
              <input type="file" class="form-control" name="kartuBPJS" id="kartuBPJS" />
            </div>
            <div class="input-form">
              <label for="kartuBerobat" class="input-label"
                >Foto Kartu Berobat Puskesmas
              </label>
              <input type="file" class="form-control" name="kartuBerobat" id="kartuBerobat" />
            </div>
          </div>
        </div>
        <br>
        <div class="input-form suratKeteranganDokter">
          <label for="suratKeteranganDokter" class="input-label">Surat Keterangan Dokter </label>
          <input type="file" class="form-control" name="suratKeteranganDokter" id="suratKeteranganDokter" />
        </div>
        <br>
        <button class="btn btn-isi-data upload-berkas" type="submit">Konfirmasi</button>
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
