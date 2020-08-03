<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FORM TAMBAH PENYEWA</title>
  </head>
  <body>

    <div class="row" style="margin-top: 40px">

      <div class="col-md-3"></div>

      <div class="col-md-6">

      <form method="post" action="fungsiTambahPenyewa.php">
        <h2>FORM DATA PENYEWA</h2>
        
        <h5>Data diri penyewa</h5>
          <div class="row">
          <div class="form-group col-md-6">
            <label for="inputNama">Nama</label>
            <input type="text" class="form-control" name="nama">
          </div>
          </div>

          <div class="row form-group">
            <div class="col-md-3">
            <label for="inputNama">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jk">
            </div>
          </div>

          <div class="form-group">
            <label for="inputNama">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>

          <div class="row form-group">
            <div class="col-md-3">
            <label for="inputNama">NIK</label>
            <input type="text" class="form-control" name="nik">
            </div>
          </div>

          <div class="row form-group"> 
            <div class="col-md-3">
              <label for="inputNama">No.Telp</label>
              <input type="text" class="form-control" name="telepon_penyewa">
            </div>
             <div class="col-md-3">
              <label for="inputNama">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
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