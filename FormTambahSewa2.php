<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FORM TAMBAH SEWA</title>
  </head>
  <body>

    <div class="row" style="margin-top: 40px">

      <div class="col-md-3"></div>

      <div class="col-md-6">

      <form method="post" action="fungsiTambahSewa2.php">
        <h2>FORM SEWA</h2>
        
        <h5>Data Sewa</h5>
            

          <div class="form-group">
            <select class="form-control" name="id_penyewa">
              <?php 
              include 'koneksi.php';
              $data = mysqli_query($koneksi,"SELECT * FROM tb_penyewa");
              while ($d = mysqli_fetch_array($data)) {
              ?>
              <option value="<?php echo $d['id_penyewa'] ?>"><?php echo $d['nama'] ?>-<?php echo $d['alamat'] ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="form-group">
          <select class="form-control" name="mobil">
            <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi,"SELECT * FROM tb_mobil");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <option value="<?php echo $d['id_mobil'] ?>"><?php echo $d['plat'] ?></option>
            <?php } ?>
          </select>
          </div>

          <div class="row form-group">
            <div class="col-md-3">
            <label for="inputNama">Cabang</label>
            <input type="text" class="form-control" name="cabang">
            </div>
          </div>

          <div class="row form-group"> 
            <div class="col-md-6">
              <label for="inputWaktu">Waktu Mulai</label>
              <input type="date" class="form-control" name="waktu_mulai">
            </div>
             <div class="col-md-6">
              <label for="inputWaktu">Waktu Selesai</label>
              <input type="date" class="form-control" name="waktu_selesai">
            </div>
          </div>

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