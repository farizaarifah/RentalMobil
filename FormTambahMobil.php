<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FORM TAMBAH MOBIL</title>
  </head>
  <body>

    <div class="row" style="margin-top: 40px">

      <div class="col-md-3"></div>

      <div class="col-md-6">

      <form method="post" action="fungsiTambahMobil.php">
        <h2>FORM DATA MOBIL</h2>
        
        <h5>Data Mobil</h5>
          <div class="row">
          <div class="form-group col-md-6">
            <label for="inputNama">Plat</label>
            <input type="text" class="form-control" name="plat">
          </div>
          </div>

          <div class="row form-group">
            <div class="col-md-3">
            <label for="inputNama">Warna</label>
            <input type="text" class="form-control" name="warna">
            </div>
          </div>

          <div class="form-group">
            <label for="inputNama">Merek</label>
            <input type="text" class="form-control"  name="merek">
          </div>

          <div class="row form-group">
            <div class="col-md-3">
            <label for="inputNama">Tahun Produksi</label>
            <input type="text" class="form-control" name="tahun_produksi">
            </div>
          </div>

          <div class="row form-group"> 
            <div class="col-md-3">
              <label for="inputNama">Kapasitas</label>
              <input type="text" class="form-control" name="kapasitas">
            </div>
            

          

            <table class="table table-bordered" style="padding-top: 5 px">
            <tbody>
              
            </tbody>
          </table>

        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>